<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
    protected $table = 'peminjamans';
    protected $fillable = ['id_user','id_barang','jumlah'];
    public $timestamps = true;
    
    public function barang(){
        return $this->belongsTo('App\barang','id_barang');
    }
    public function user(){
        return $this->belongsTo('App\User','id_user');
    }
}
