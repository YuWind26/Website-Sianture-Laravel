<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Kategori;

class CultureController extends Controller
{
    public function index()
    {
        $kategori = Kategori::select('slug','nama')->orderBy('nama','asc')->get();
        return view('culture/culture',compact('kategori'));
    }

    public function kategori($slug)
    {
        $kategori = Kategori::select('id')->where('slug', $slug)->firstOrFail();
        $artikel = Post::select('sampul','judul','slug','created_at')->where('id_kategori',$kategori->id)->latest()->get();
        $kategori = Kategori::select('slug','nama')->where('slug', $slug)->firstOrFail();
        return view('culture/culture_list/culture_list',compact('artikel','kategori'));
    }

    public function artikel($k,$d)
    {
        $kategori = Kategori::select('id')->where('slug', $k)->firstOrFail();
        $artikel = Post::select('sampul','judul','slug','created_at')->where('id_kategori',$kategori->id)->latest()->get();
        $artikel = Post::select('id','judul','konten','id_kategori','created_at','sampul')->where('slug', $d)->firstOrFail();
        $kategori = Kategori::select('slug','nama')->where('slug', $k)->firstOrFail();
        return view('culture/culture_list/culture_detail/culture_detail',compact('artikel','kategori'));
    }
}
