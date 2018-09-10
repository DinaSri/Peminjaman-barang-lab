<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengembalian extends Model
{
    protected $table = 'pengembalians' ;
    protected $fillable = ['id_user','id_barang','jumlah','tgl_pinjam'];
    public $timestamps = true;

    public function barang(){
        return $this->belongsTo('App\barang','id_barang');
    }
    public function user(){
        return $this->belongsTo('App\User','id_user');
    }
}
