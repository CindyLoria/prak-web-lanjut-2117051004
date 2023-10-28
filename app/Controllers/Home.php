<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data =[
            'title' => "Home",
        ];
        return view('navigation', $data);
    }
    public function profile($nama = "", $npm = "", $kelas = ""){
        $data = [
            'nama' => $nama,
            'npm' => $npm,
            'kelas' => $kelas
        ];
        return view('profile', $data);
    }
}
