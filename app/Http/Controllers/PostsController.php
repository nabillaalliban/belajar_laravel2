<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\barang;

class PostsController extends Controller
{
     public function menampilkan(){


    $post = Post::all();
    return view('tampil_post',compact('post'));

     }

    public function menampilkan2()
    {


        $barang = barang::all();
        return view('tampil_barang', compact('barang'));
    }
}
