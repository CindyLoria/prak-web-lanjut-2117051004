<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Models\KelasModel;
use App\Controllers\BaseController;

class UserController extends BaseController
{
    public $userModel;
    public $kelasModel;

    public function __construct(){
        $this->userModel = new UserModel();
        $this->kelasModel = new KelasModel();
    }

    public function index()
    {
        // $user = $this->userModel = new UserModel();
        $data = [
            'users' => $this->userModel->getUser(),
            'title' => 'List User',
        ];
        return view('list_user', $data);
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

        $this->kelasModel = new KelasModel();
        $kelas = $this->kelasModel->getKelas();

        if(session('validation')!=null){
            $validation = session('validation');
        }
        else{
            $validation = \Config\Services::validation();
        }
        // $kelas = [
        //     [
        //         'id' => 1, 
        //         'nama_kelas' => 'A'
        //     ], 
        //     [
        //         'id' => 2, 
        //         'nama_kelas' => 'B'
        //     ], 
        //     [
        //         'id' => 3, 
        //         'nama_kelas' => 'C'
        //     ], 
        //     [
        //         'id' => 4, 
        //         'nama_kelas' => 'D'
        //     ], 
        // ]; 
        $data = [
            'title' => 'Create User',
            'kelas' => $kelas,
            'validation' => $validation,
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

        $path = 'assets/uploads/img/';
        $foto = $this->request->getFile('foto');
        $name = $foto->getRandomName();

        if($foto->move($path, $name)){
            $foto = base_url($path . $name);
        }

        $this->userModel->saveUser([
            'nama' => $this->request->getVar('nama'),
            'npm' => $this->request->getVar('npm'),
            'id_kelas' => $this->request->getVar('kelas'),
            // 'id_kelas' => $kelasModel->find($kelas)['nama_kelas']
            'foto' => $foto
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
            'kelas' => $this->request->getVar('kelas'),
            'title' => 'Profile'
        ];

        session()->setFlashdata('success', 'Berhasil ditambah');
        return redirect()->to('/user');
        // dd($data);

        // return view('profile',$data);
    }
    public function show($id){
        $user= $this->userModel->getUser($id);
        $data = [
            'title' => 'Profile',
            'user' => $user
        ];
        return view('profile', $data);
    }

}
