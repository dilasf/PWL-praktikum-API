<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Bookshelf;
use Exception;
use Illuminate\Http\Request;

class BookshelfController extends Controller
{
    public function index(){
        $data = Bookshelf::all();
        return response()->json([
            'status' => '200',
            'message' => 'Data Berhasil Didapatkan',
            'data' => $data
        ]);
    }

    public function store(Request $req){
       try {
            $data = Bookshelf::create([
                'name' => $req->name,
                'code' => $req->code
            ]);
            return response()->json([
                'status' => '201',
                'message' => 'Data Berhasil Disimpan',
                'data' => $data
            ], 201);
       } catch (Exception $e) {
            return response()->json([
                'status' => '500',
                'message' => 'Maaf terjadi kesalahan tidak terduga',
                // 'message' => $e->getMessage(),
            ], 500);
       }


    }
}