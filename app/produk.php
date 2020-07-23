<?php

namespace app;

use illuminate\database\eloquent\model;

class produk extends model {
    protected $table='produk';
    protected $fillable=['id','nama_produk','keterangan','harga','jumlah'
];
}

?>