<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
class Produk3Controller extends BaseController
{
    // daftar produk
    public function index3()
    {
        $data = [
            'title' => 'Daftar produk',
            'daftar_produk' => $this->Produk3Model->orderBy('id_produk', 'DESC')->findALL()
        ];
        return view('admin/produk3/index3', $data);
    }

    // ---- ERROR ----
    // form tambah produk
    public function form_create3()
    {
        $data = [
            'title' => 'Tambah Produk',
            'kategori_produk' => $this->Kategori3Model->findALL(),
            'validation' => \Config\Services::validation()
        ];

        return view('admin/produk3/create3', $data);
    }
    // ---- ERROR ----

        //form ubah produk
    public function form_update3($id_produk)
        {
            $data = [
                'title' => 'Ubah Produk',
                'data_produk' => $this->Produk3Model->find($id_produk),
                'kategori_produk' => $this->Kategori3Model->findALL(),
                'validation' => \Config\Services::validation()
            ];
    
            return view('admin/produk3/update3', $data);
        }

    //fungsi tambah produk
    public function create_produk3()
    {
        $rules = $this->validate([
            'nama_produk' => 'required',
            'sluq_kategori' => 'required',
            'departure' => 'required',
        ]);

        // jika gagal
        if (!$rules) {
            session()->setFlashdata('failed', 'data produk gagal ditambahkan');
            return redirect()->back()->withInput();
        }

        //membuat sluq
        $sluq_produk = url_title($this->request->getPost('nama_produk'), '-',);

        //jika data valid
        $this->Produk3Model->insert([
            'sluq_produk' => $sluq_produk,
            'nama_produk' => $this->request->getPost('nama_produk'),
            'sluq_kategori' => $this->request->getPost('sluq_kategori'),
            'departure' => $this->request->getPost('departure'),
            'deskripsi' => $this->request->getPost('deskripsi')
        ]);

        return redirect()->to(base_url('daftar-produk3'))->with('success', 'Data Produk Berhasil Ditembahkan');
    }
}