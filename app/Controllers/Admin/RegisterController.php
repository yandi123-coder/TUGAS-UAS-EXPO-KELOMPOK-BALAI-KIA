<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Model_Auth;

class RegisterController extends BaseController
{
    protected $model_auth;
    public function __construct()
    {
        helper("form");
        $this->model_auth = new Model_Auth();
    } 

    public function register()
    {
        $data = array (
            'title' => 'Register',
        );
        return view('admin/regis/index');
    }

    public function save_register()
    {
        if ($this->validate([
            'nama_user' => [
                'label' => 'Nama User',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tolong diisi gaboleh kosong'
                ]
                ],
                'email' => [
                    'label' => 'E-mail',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tolong diisi'
                    ]
                    ],
                    'no_hp' => [
                        'label' => 'No Handphone',
                        'rules' => 'required',
                        'errors' => [
                            'required' => '{field} tolong diisi'
                        ]
                        ],
                        'password' => [
                            'label' => 'Password',
                            'rules' => 'required',
                            'errors' => [
                                'required' => 'All accounts must have {field} provided',
                            ]
                            ],
                            'repassword' => [
                                'label' => 'Retype Password',
                                'rules' => 'required|matches[password]',
                                'errors' => [
                                    'required' => '{field} tolong diisi',
                                    'matches' => '{field} tidak sama'
                                ]
                            ]
        ])) {
            //jika valid
            $data = array(
                'nama_user' => $this->request->getPost('nama_user'),
                'email' => $this->request->getPost('email'),
                'no_hp' => $this->request->getPost('no_hp'),
                'password'=> $this->request->getPost('password'),
                'level' => 3
            );
            $this->model_auth->save_register($data);
            session()->setFlashdata('pesan', 'register berhasil');
            return redirect()->to(base_url('Admin/RegisterController/login'));
        }else {
            //jika tidak valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('Admin/RegisterController/register'));
        }
    }
    public function login()
    {
        $data = array (
            'title' => 'login',
        );
        return view('admin/log/index');
    }

    public function cek_login()
    {
        if ($this->validate([
            'email' => [
                'label' => 'E-Mail',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
                ],
                'password' => [
                    'label' => 'Password',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong'
                    ]
                    ],
        ])) {
            //jika valid
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $cek = $this->model_auth->login($email, $password);
            if ($cek) {
                session()->set('log', true);
                session()->set('nama_user', $cek['nama_user']);
                session()->set('email', $cek['email']);
                session()->set('level', $cek['level']);
                session()->set('foto_user', $cek['foto_user']);
                //login
                return redirect()->to(base_url('Admin/Home2Controller/home2'));
            }else {
                //jika data tak cocok
                session()->setFlashdata('pesan', 'login gagal');
                return redirect()->to(base_url('Admin/RegisterController/login'));
            }
        }else {
            //jika ga valid
        }
    }

    public function logout()
    {
        session()->remove('log');
        session()->remove('nama_user');
        session()->remove('email');
        session()->remove('level');
        session()->remove('foto_user');
        session()->setFlashdata('pesan', 'logout sukses');
        return redirect()->to(base_url('Admin/RegisterController/login'));
    }
}
// admin/dashboard/index