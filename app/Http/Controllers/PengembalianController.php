<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pengembalian;
use Excel;
use App\barang;
use App\User;
class PengembalianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengembalians = pengembalian::all();
        return view('pengembalian.index', compact('pengembalians'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
      public function export()
    {
        return view('pengembalian.export');
    }
     public function exportPost(Request $request)
    {
        // Validasi
        $this->validate($request, [
            'tgl' => 'required',
            'type' => 'required|in:pdf,xls',
        ], [
            'tgl.required' => 'Anda belum memilih Barang. Pilih minimal 1 Barang.'
        ]);

        $pengembalians = pengembalian::whereIn('id', $request->get('tgl'))->get();

        $handler = 'export' . ucfirst($request->get('type'));

        return $this->$handler($pengembalians);
    }
  private function exportXls($pengembalian)
    {
        Excel::create('Data Pengembalian Siretolab', function($excel) use ($pengembalian) {
            // Set property
           

            $excel->sheet('Data pengembalian', function($sheet) use ($pengembalian) {
                $row = 1;
                $sheet->row($row, [
                    'nama_member',
                    'nama_barang',
                    'jumlah_pinjam',
                    'tanggal_peminjaman',
                    'tanggal_pengembalian'
                ]);
                foreach ($pengembalians as $books) {
                    $sheet->row(++$row, [
                        $books->user->name ,
                        $books->barang->nama,
                        $books->jumlah,
                        $books->tgl_pinjam,
                        $books->created_at
                    ]);
                }
            });
        })->export('xls');
    }
}
    
