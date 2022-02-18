<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Kategori;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikel = Post::select('sampul','judul','slug','created_at')->latest()->get();
        $kategori = Kategori::select('slug','nama')->orderBy('nama','asc')->get();
        return view('culture/culture_list/culture_list',compact('artikel','kategori'));
    }

}
