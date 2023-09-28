<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Models\KelasModel;
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
        $kelas = [
            [
                'id' => 1, 
                'nama_kelas' => 'A'
            ], 
            [
                'id' => 2, 
                'nama_kelas' => 'B'
            ], 
            [
                'id' => 3, 
                'nama_kelas' => 'C'
            ], 
            [
                'id' => 4, 
                'nama_kelas' => 'D'
            ], 
        ]; 
        $data = [
            'kelas' => $kelas, 
        ]; 
        return view('create_user', $data);
    }

    public function store()
    {
        // dd($this->request->getVar());
        $userModel = new UserModel();

        if(!$this->validate($userModel->getValidationRules())){
            session()->setFlashdata('errors', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $userModel->saveUser([
            'nama' => $this->request->getVar('nama'),
            'npm' => $this->request->getVar('npm'),
            'id_kelas' => $this->request->getVar('kelas'),
        ]);

        // $nama = $this->request->getPost('nama');
        // $npm = $this->request->getPost('npm');
        // $kelas = $this->request->getPost('kelas');
        $data=[
            // 'nama'=>$nama,
            // 'npm'=>$npm,
            // 'kelas'=>$kelas
            'nama' => $this->request->getVar('nama'),
            'npm' => $this->request->getVar('npm'),
            'kelas' => $this->request->getVar('kelas')
       
        ];

        session()->setFlashdata('success', 'Berhasil ditambah');

        // dd($data);

        return view('profile',$data);
    }

}
