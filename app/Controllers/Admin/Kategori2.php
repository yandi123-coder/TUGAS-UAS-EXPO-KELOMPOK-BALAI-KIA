<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
class Kategori2 extends BaseController
{
    // daftar produk
    public function index2()
    {
        $data = [
            'title' => 'Daftar produk',
            'daftar_produk1' => $this->Produk2Model->orderBy('id_produk', 'DESC')->findALL()
        ];
        return view('admin/produk2/index2', $data);
    }

    public function form_create2()
    {
        $data = [
            'title' => 'Tambah Produk',
            'kategori_produk' => $this->Kategori2->findALL(),
            'validation' => \Config\Services::validation()
        ];

        return view('admin/produk2/create2', $data);
    }

    public function create_produk2()
    {
        $rules = $this->validate([
            'nama_produk' => 'required',
            'sluq_kategori' => 'required',
            'departure' => 'required',
        ]);

    //     // jika gagal
        if (!$rules) {
            session()->setFlashdata('failed', 'data produk gagal ditambahkan');
            return redirect()->back()->withInput();
        }

        //membuat sluq
        $produk = url_title($this->request->getPost('nama_produk'), '-',);

        //jika data valid
        $this->Produk2Model->insert([
            'produk' => $produk,
            'nama_produk' => $this->request->getPost('nama_produk'),
            'sluq_kategori' => $this->request->getPost('sluq_kategori'),
            'departure' => $this->request->getPost('departure'),
            'deskripsi' => $this->request->getPost('deskripsi')
        ]);

        return redirect()->to(base_url('daftar-produk2'))->with('success', 'Data Produk Berhasil Ditembahkan');
    }

    //AWAL KATEGORI
    public function kategori2()
    {
        $data = [
            'title' => 'Daftar Kategori Produk',
            'daftar_kategori' => $this->Kategori2->orderBy('id_kategori', 'DESC')->findAll()
        ];
        return view('admin/produk2/kategori2', $data);
    }
    //TAMBAH KATEGORI
    public function store2()
    {
        // simpan data  ke data base
        $data = [
            'nama_kategori' => esc($this->request->getPost('nama_kategori')),
        ];

        $this->Kategori2->insert($data);

        return redirect()->back()->with('success', 'Produk Berhasil Di Tambahkan');
    }

        // hapus kategori produk
        public function destroy4($id_kategori)
        {
            $this->Kategori2->where('id_kategori', $id_kategori)->delete();
    
            return redirect()->back()->with('success', 'Data Kategori Produk Berhasil Dihapus');
        }

            //HAPUS PRODUK
    public function destroy5($id_produk)
    {
        $this->Produk2Model->where('id_produk', $id_produk)->delete();

        return redirect()->back()->with('success', 'Data Kategori Produk Berhasil Dihapus');
    }
}