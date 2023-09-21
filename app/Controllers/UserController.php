<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class UserController extends BaseController
{
    public function index()
    {
        //
    }
    public function profile($nama = "", $npm = "", $kelas = ""){
        $data = [
            'nama' => $nama,
            'npm' => $npm,
            'kelas' => $kelas
        ];
        return view('profile', $data);
    }
    public function create(){
        return view ('create_user');
    }
    public function store()
    {
        $nama = $this->request->getPost('nama');
        $npm = $this->request->getPost('npm');
        $kelas = $this->request->getPost('kelas');
        $data=[
            'nama'=>$nama,
            'npm'=>$npm,
            'kelas'=>$kelas
        ];
        // dd($data);
        return view('profile',$data);
    }

}
