<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use League\ColorExtractor\Color;
use League\ColorExtractor\ColorExtractor;
use League\ColorExtractor\Palette;

/*
	Controller berfungsi untuk mengarahkan ke halaman html yang dituju 
	dan mempersiapkan semua yang harus disiapkan sebelum halaman html dibuka
*/

class MainController extends Controller
{
    public function home()
    {
    	$alamatFile = resource_path('assets/img/skin.jpg');
    	$palette = Palette::fromFilename($alamatFile); // Mengambil pallete warna dari skin.jpg

    	$extractor = new ColorExtractor($palette);
		$topFive = $extractor->extract(5);

		foreach ($topFive as &$warna) {
			$warna = dechex($warna);			
		}

		//Menampilkan variabel dalam PHP ke HTML
    	$nama = 'diana';
    	$hasil = 95 * 17;

    	$maybellinePallete = ['E4BE97','E0B48F','E2AA77','E6B280','E5B177','D19B6C']
        return view('home', ['nama'=> $nama, 'hasil'=> $hasil, 'abc'=> $topFive]); // Menampilkan halaman home

    }
}