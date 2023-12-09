<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $data = Book:: all();
        return response()->json([
            'status' => '200',
            'message' => 'Data berhasil Didapatkan',
            'data' => $data
        ]);
    }
}
