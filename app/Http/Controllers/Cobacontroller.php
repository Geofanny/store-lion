<?php

namespace App\Http\Controllers;

use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;


class Cobacontroller extends Controller
{
	public function __construct()
	{
		$this->middleware(['auth']);
	}

	public function bebas(){
		$products = DB::table('produk')->where('id_kategori', 1)->paginate(4);
		$elektronik = DB::table('produk')->where('id_kategori',2)->paginate(4);
		$shoes = DB::table('produk')->where('id_kategori',3)->paginate(4);
		$watches = DB::table('produk')->where('id_kategori',4)->paginate(4);
		$jewellery = DB::table('produk')->where('id_kategori',5)->paginate(4);
		$makeup = DB::table('produk')->where('id_kategori',6)->paginate(4);
		$sports = DB::table('produk')->where('id_kategori',7)->paginate(4);
		$home = DB::table('produk')->where('id_kategori',8)->paginate(4);
		$kids = DB::table('produk')->where('id_kategori',9)->paginate(4);

		return view('user/index')->with([
			'products' => $products,
			'elektronik' => $elektronik,
			'shoes' => $shoes,
			'watches' => $watches,
			'jewellery' => $jewellery,
			'makeup' => $makeup,
			'sports' => $sports,
			'home' => $home,
			'kids' => $kids,
		]);
	}

	public function moreProducts($id_kategori)
	{
		$kategori = DB::table('kategori')->where('id_kategori', $id_kategori)->first();
		$products = DB::table('produk')
		->where('id_kategori', $id_kategori)
		->paginate(8);

		return view('barang.more-products')->with([
			'products' => $products,
			'kategori'=>$kategori
		]);
	}
	public function do_tambah_cart($id_produk)
	{
		// session()->forget('cart');
		$cart = session("cart") ? session("cart") : [];
		$produk = Product::detail_produk($id_produk);
		$x = [
			"nama_produk" => $produk->nama_produk,
			"gambar"=>$produk->gambar,
			"harga"=>$produk->harga,
			"jumlah"=>1
		];

		array_push($cart, $x);
		session(["cart"=>$cart]);
		return redirect("/cart");

		// dd(request()->session()->get('cart'));
	}
	function cart()
	{
		$provinces = Province::all();
		$regencies = Regency::all();
		$districts = District::all();
		$villages = Village::all();
		$cart = session("cart");
		return view("user/keranjang")->with(["cart"=>$cart,
			'provinces'=>$provinces,
			'regencies'=>$regencies,
			'districts'=>$districts,
			'villages'=>$villages,
		]);
	}
	function do_hapus_cart($id_produk)
	{
		$cart = session("cart");
		unset($cart[$id_produk]);
		session(["cart"=>$cart]);
		return redirect("/cart");

	}
	// public function form()
	// {
	// 	$provinces = Province::all();
	// 	$regencies = Regency::all();
	// 	$districts = District::all();
	// 	$villages = Village::all();
	// 	return view('user/keranjang',compact('provinces','regencies','districts','villages'));
	// }
	function do_tambah_transaksi($value='')
	{
		# code...
	}
}