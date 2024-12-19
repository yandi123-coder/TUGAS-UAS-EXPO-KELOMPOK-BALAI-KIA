<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
class Produk extends BaseController
{
    // daftar produk
    public function index1()
    {
        $data = [
            'title' => 'Daftar produk',
            'daftar_produk1' => $this->Produk1Model->orderBy('id_produk', 'DESC')->findALL()
        ];
        return view('admin/produk1/index1', $data);
    }

    public function form_create1()
    {
        $data = [
            'title' => 'Tambah Produk',
            'kategori_produk' => $this->Kategori->findALL(),
            'validation' => \Config\Services::validation()
        ];

        return view('admin/produk1/create1', $data);
    }

    public function create_produk1()
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
        $produk = url_title($this->request->getPost('nama_produk'), '-',);

        //jika data valid
        $this->Produk1Model->insert([
            'produk' => $produk,
            'nama_produk' => $this->request->getPost('nama_produk'),
            'sluq_kategori' => $this->request->getPost('sluq_kategori'),
            'departure' => $this->request->getPost('departure'),
            'deskripsi' => $this->request->getPost('deskripsi')
        ]);

        return redirect()->to(base_url('daftar-produk1'))->with('success', 'Data Produk Berhasil Ditembahkan');
    }

    //AWAL KATEGORI
    public function kategori1()
    {
        $data = [
            'title' => 'Daftar Kategori Produk',
            'daftar_kategori' => $this->Kategori->orderBy('id_kategori', 'DESC')->findAll()
        ];
        return view('admin/produk1/kategori1', $data);
    }
    //TAMBAH KATEGORI
    public function store1()
    {
        // simpan data  ke data base
        $data = [
            'nama_kategori' => esc($this->request->getPost('nama_kategori')),
        ];

        $this->Kategori->insert($data);

        return redirect()->back()->with('success', 'Produk Berhasil Di Tambahkan');
    }

        // hapus kategori produk
        public function destroy2($id_kategori)
        {
            $this->Kategori->where('id_kategori', $id_kategori)->delete();
    
            return redirect()->back()->with('success', 'Data Kategori Produk Berhasil Dihapus');
        }

            //HAPUS PRODUK
    public function destroy3($id_produk)
    {
        $this->Produk1Model->where('id_produk', $id_produk)->delete();

        return redirect()->back()->with('success', 'Data Kategori Produk Berhasil Dihapus');
    }
}