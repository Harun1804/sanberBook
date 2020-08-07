<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        $pertanyaan = DB::table('pertanyaan')->get();
        return view('pertanyaan.index', compact('pertanyaan'));
    }

    public function create()
    {
        return view('pertanyaan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|unique:pertanyaan,judul',
            'isi' => 'required'
        ]);

        DB::table('pertanyaan')->insert([
            'judul' => $request->judul,
            'isi' => $request->isi
        ]);
        return redirect('/posts')->with('success', 'Data Berhasil Masuk');
    }

    public function show($id)
    {
        $pertanyaan = DB::table('pertanyaan')->where('id', $id)->first();
        return view('pertanyaan.show',compact('pertanyaan'));
    }

    public function edit($id)
    {
        $pertanyaan = DB::table('pertanyaan')->where('id', $id)->first();
        return view('pertanyaan.edit', compact('pertanyaan'));
    }

    public function update(Request $request, $id)
    {
        DB::table('pertanyaan')->where('id', $id)->update([
            'judul' => $request->judul,
            'isi' => $request->isi
        ]);
        return redirect('/posts')->with('success', 'Data Berhasil Diperbaharui');
    }

    public function destroy($id)
    {
        DB::table('pertanyaan')->where('id', $id)->delete();
        return redirect('/posts')->with('success', 'Data berhasil Dihapus');
    }
}
