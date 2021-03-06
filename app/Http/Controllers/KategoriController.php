<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;


class KategoriController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = Kategori::select('id', 'nama', 'slug')->latest()->simplePaginate(5);
        return view('admin/kategori/index', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/kategori/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
        ]);


        Kategori::create([
            'nama' => Str::title($request->nama),
            'slug' => Str::slug($request->nama, '-')
        ]);

        // $request->session()->flash('sukses', '
        // <div class="alert alert-success" role="alert">
        //     Data Berhasil ditambahkan
        // </div>
        // ');

        Alert::success('sukses', 'Data Berhasil Dibuat');

        return redirect('/kategori');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = Kategori::select('id', 'nama')->whereId($id)->first();
        return view('admin/kategori/edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
        ]);


        Kategori::whereId($id)->update([
            'nama' => Str::title($request->nama),
            'slug' => Str::slug($request->nama, '-')
        ]);

        // $request->session()->flash('sukses', '
        // <div class="alert alert-success" role="alert">
        //     Data Berhasil diupdate
        // </div>
        // ');

        Alert::success('sukses', 'Data Berhasil diupdate');

        return redirect('/kategori');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Kategori::whereId($id)->delete();

        // request()->session()->flash('sukses', '
        // <div class="alert alert-success" role="alert">
        //     Data Berhasil dihapus
        // </div>
        // ');
        // return redirect('/kategori');
    }

    public function konfirmasi($id)
    {
        // example:
        alert()->question('Yakin menghapus?', 'Anda tidak bisa mengembalikan data ini lagi jika anda menghapus')
            ->showConfirmButton('<a href="/kategori/' . $id . '/delete" class="text-white" style="text-decoration: none">Delete</a>', '#3085d6')->toHtml()
            ->showCancelButton('Batal', '#aaa')->reverseButtons();

        return redirect('/kategori');
    }

    public function delete($id)
    {
        $kategori = Kategori::select('id')->whereId($id)->firstOrFail();
        $kategori->delete();

        // request()->session()->flash('sukses', '
        // <div class="alert alert-success" role="alert">
        //     Data Berhasil dihapus
        // </div>
        // ');

        Alert::success('sukses', 'Data Berhasil dihapus');
        return redirect('/kategori');
    }
}
