<?php

namespace App;


class  Produk Extends Model{
	protected $table = 'produk';


	protected $casts = [
		'created_at' => 'datetime',
		'berat' => 'decimal:2'
		

	];

	function seller(){
		return $this->belongsTo(User:: class,'id_user');
	}

	function getHargaAttribute(){
		return "Rp. ".number_format($this->attributes['harga']);
	}

	function getTanggalprodukAttribute(){
		$tanggal =$this->created_at;
		return strftime("%d %b %Y", strftime($this->created_at));
	}
}