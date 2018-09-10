<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\barang;
use App\peminjaman;
use App\pengembalian;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peminjamans = peminjaman::with('User','barang')->get();
        return view('peminjaman.index', compact('peminjamans'));
    }
     public function daftar()
    {
        $peminjamans = peminjaman::all();
        $barangs = barang::all();
        return view('peminjaman.daftar',compact('peminjamans','barangs'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barangs = barang::all();
        $users = User::all();
        return view('peminjaman.create', compact('barangs','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'id_user' => 'required|max:255',
            'id_barang' => 'required|max:255',
            'jumlah'=>'required|max:255',
        ]);

        $peminjamans = new peminjaman;
        $peminjamans->id_user = $request->id_user;
        $peminjamans->id_barang = $request->id_barang;
        $peminjamans->jumlah = $request->jumlah;

        $barangs = barang::findOrFail($peminjamans->id_barang);
        $barangs->stok = $barangs->stok - $request->jumlah;
        $barangs-> save();
        $peminjamans->save();
        return redirect()->route('peminjaman.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $peminjamans = peminjaman::findOrFail($id);
        $users = User::all();
        $barangs = barang::all();
        $selectedusers = peminjaman::findOrFail($id)->id_user;
        $selectedbarangs = peminjaman::findOrFail($id)->id_barang;
        return view('peminjaman.show' ,compact('peminjamans','users','barangs','selectedusers','selectedbarangs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peminjamans = peminjaman::findOrFail($id);
        $users = User::all();
        $selectusers = peminjaman::findOrFail($id)->id_user;
        $barangs = barang::all();
        $selectbarangs = peminjaman::findOrFail($id)->id_barang;
        return view('peminjaman.edit', compact('peminjamans','users','selectusers','barangs','selectbarangs'));
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

        $pengembalians = new pengembalian;
        $pengembalians->id_user = $request->id_user;
        $pengembalians->id_barang = $request->id_barang;
        $pengembalians->jumlah = $request->jumlah;
        $pengembalians->tgl_pinjam = $request->tgl_pinjam;
        $pengembalians->save();

        $peminjamans = peminjaman::findOrFail($id);
        $barangs = barang::findOrFail($request->id_barang);
        $barangs->stok = $barangs->stok + $request->jumlah;

        $barangs->save();
        $peminjamans->delete();
        $pengembalians->save();

        return redirect()->route('pengembalian.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peminjamans = peminjaman::findOrFail($id);
        $peminjamans->delete();
        return redirect()->route('peminjaman.index');

    }
}
