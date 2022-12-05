<?php

namespace App\Http\Controllers;

use App\Models\Akun;
use Illuminate\Http\Request;

class AkunController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        // Gunakan request untuk mendapatkan data yg diinginkan
        $username = $request->username;
        $password = $request->password;

        $akun = new Akun();
        $akun->username = $username;
        $akun->password = $password;
        $akun->save();
        return view('register', ['message' => "berhasil membuat akun"]);
    }

/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
}