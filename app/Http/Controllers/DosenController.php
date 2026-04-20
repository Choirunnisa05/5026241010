<?php
//package
namespace App\Http\Controllers;
//import
use Illuminate\Http\Request;

class DosenController extends Controller
{
    //
    public function index(){
    return "<h1> Halo ini adalah method index,</h1> dalam controller DosenController. - <b>www.malasngoding.com</b>";
}

    public function biodata(){
    	$nama = "Diki Alfarabi Hadi";
        $umur = 35;
        $pelajaran = ["Algoritma & Pemrograman","Kalkulus","Pemrograman Web"];
    	return view('biodata',['nama' => $nama, 'umur' => $umur, 'matkul' => $pelajaran]);
    }
}
