<?php

namespace App\Http\Controllers;

use Exception;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use \GuzzleHttp\Psr7\Request as RequestGuzzle;
use Illuminate\Support\Facades\Log;

class LibraryController extends Controller
{
    public static function requestAsync($method = 'GET', $route, $body = null, $head = null)
    {
        try {
            if (!$head) {
                $tokenController = new TokenController;
                $head = $tokenController->getheaderAuth();
            }
            $client = new Client();
            if ($body) {
                $request = new RequestGuzzle($method, env('END_POINT_BACKEND') . $route, $head, json_encode($body));
                $promise = $client->sendAsync($request)->then(function ($response) {
                    return json_decode($response->getBody()->getContents(),true);
                });
            } else {
                $request = new RequestGuzzle($method, env('END_POINT_BACKEND') . $route, $head);
                $promise = $client->sendAsync($request)->then(function ($response) {
                    return json_decode($response->getBody()->getContents(),true);
                });
            }
            $result = $promise->wait();
            if (isset($result['error']) && $result['error']) {
                throw new Exception();
            }
            return $result;
        } catch (Exception $e) {
            throw $e;
        }

    }

    public static function responseApi($data = [], $message = '', $error = 0): Array
    {
        return [
            'error' => $error,
            'data' => $data,
            'message' => $message
        ];
    }

    public static function recordError(Exception $error)
    {
        try {
            $body = [
                'Message' => $error->getMessage(),
                'Code' => $error->getCode(),
                'File' => $error->getFile(),
                'Line' => $error->getLine(),
                'TraceAsString' => $error->getTraceAsString()
            ];
            LibraryController::requestAsync('POST', '/api/logsystem/recorderror',$body);
            return true;
        } catch (Exception $e) {
            Log::debug($e);
        }
    }

}
