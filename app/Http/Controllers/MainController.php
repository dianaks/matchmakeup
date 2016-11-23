<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

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
        return view('home');
    }

    public function upload(Request $request)
    {
        $palette = Palette::fromFilename($request->file->path()); // Mengambil pallete warna dari skin.jp
        $extractor = new ColorExtractor($palette);
        $topFive = $extractor->extract(5);

        foreach ($topFive as &$warna) {
            $warna = str_pad(dechex($warna), 6, '0', STR_PAD_LEFT);
        }

        $maybellinePallete = ['E4BE97','E0B48F','E2AA77','E6B280','E5B177','D19B6C'];
        return view('home', ['abc'=> $topFive]); // Menampilkan halaman home
    }
}
