<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $fillable = [
		'id_kategori',
		'gambar',
		'nama_produk',
		'harga',
	];

	protected $table = 'produk';

	static function tambah_produk($nama_produk,$harga)
	{
		Product::create([
			"nama_produk"=>$nama_produk,
			"harga"=>$harga,
		]);
	}
	static function detail_produk($id_produk)
	{
		$data = Product::where("id",$id_produk)->first();
		return $data;
	}
}
