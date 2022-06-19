<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function layout()
    {
        $libraryController = new LibraryController;
        // $menus = $libraryController->requestAsync("GET", "/api/menus");
        // $firstMenus = [
        //     'id' => '',
        //     'href' => 'test'
        // ];
        // foreach ($menus['data'] as $key => $value) {
        //     if ($value['slug'] == 'link') {
        //         $firstMenus = $value;
        //         break;
        //     }
        // }
        return view('layouts.app');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        try {
            // if (!$request->request_server) {
            //     return redirect(route('layout'));
            // }
            Log::debug("ABRIR HOME");
            return view('home');
            // return redirect(route('home'));
        } catch (Exception $e) {
            LibraryController::recordError($e);
            return LibraryController::responseApi(["title" => __('messages.titleLoadPageError'), "message" => __('messages.defaultMessage')], "", 500);
        }
    }
}
