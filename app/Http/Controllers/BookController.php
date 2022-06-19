<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        try {
            $libraryController = new LibraryController;
            $book = $libraryController->requestAsync("GET", "/api/book");
            // if ($book['error'] != 0) {
            //     return view('home');
            // }
            return view('book.index',['book' => $book['data']]);
            // return view('book.index');
        } catch (Exception $e) {
            throw $e;
            LibraryController::recordError($e);
            return LibraryController::responseApi(["title" => __('messages.titleLoadPageError'), "message" => __('messages.defaultMessage')], "", 500);
        }
    }
}
