<?php

namespace App\Http\Controllers;

use App\Models\Akun;
use App\Models\Barang;
use App\Models\BarangToko;
use App\Models\Toko;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function login(Request $request)
    {
        // Gunakan request untuk mendapatkan data yg diinginkan
        $username = $request->username;
        $password = $request->password;

        $akun = Akun::where([['username', "=", $username], ['password', "=", $password]])->first();

        // Handle kalau akun tidak ditemukan
        if ($akun == null) {
            return view('login', ['error' => "akun tidak ditemukan"]);
        }

        // Handle berhasil ke dashboard
        $request->session()->put('user_id', $akun->id);
        return redirect('/');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function buat_toko(Request $request)
    {
        // Gunakan request untuk mendapatkan data yg diinginkan
        $nama_toko = $request->nama;
        $id_admin = $request->session()->get("user_id");

        $toko = new Toko();
        $toko->nama = $nama_toko;
        $toko->id_akun = $id_admin;
        $toko->save();

        return redirect("/")->with(["message" => "Berhasil menambahkan toko"]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function buat_barang(Request $request)
    {
        // Gunakan request untuk mendapatkan data yg diinginkan
        $nama_barang = $request->nama;
        $id_admin = $request->session()->get("user_id");

        $barang = new Barang();
        $barang->nama = $nama_barang;
        $barang->id_akun = $id_admin;
        $barang->save();

        return redirect("/")->with(["message" => "Berhasil menambahkan barang"]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sematkan_barang_toko(Request $request)
    {
        // Gunakan request untuk mendapatkan data yg diinginkan
        // Disini aku hanya hardcode

        $id_toko = $request->id_toko;
        $id_barang = $request->id_barang;

        $semat = new BarangToko();
        $semat->id_barang = $id_barang;
        $semat->id_toko = $id_toko;
        $semat->save();

        return redirect("/")->with(["message" => "Berhasil menyematkan barang dan toko"]);

    }

}