<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UIController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function dashboard(Request $request)
    {
        if (!session()->has("user_id")) {
            return redirect("/login");
        }
        if ($request->session()->has("message")) {
            return view("dashboard", ['message' => $request->session()->get("message")]);
        }
        return view("dashboard");
    }
    public function login()
    {
        if (session()->has('user_id')) {
            return redirect("/");
        }
        return view("login");
    }
    public function register()
    {
        if (session()->has('user_id')) {
            return redirect("/");
        }
        return view("register");
    }

    public function barang()
    {
        if (!session()->has("user_id")) {
            return redirect("/login");
        }
        return view("barang");
    }

    public function toko()
    {
        if (!session()->has("user_id")) {
            return redirect("/login");
        }
        return view("toko");
    }

    public function barang_toko()
    {
        if (!session()->has("user_id")) {
            return redirect("/login");
        }
        return view("barang_toko");
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect("/");
    }

}