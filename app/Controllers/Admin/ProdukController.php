<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
class ProdukController extends BaseController
{
    // daftar produk
    public function index()
    {
        $data = [
            'title' => 'Daftar produk',
            'daftar_produk' => $this->ProdukModel->orderBy('id_produk', 'DESC')->findALL()
        ];
        return view('admin/produk/index', $data);
    }

    // ---- ERROR ----
    // form tambah produk
    public function form_create()
    {
        $data = [
            'title' => 'Tambah Produk',
            'kategori_produk' => $this->KategoriModel->findALL(),
            'validation' => \Config\Services::validation()
        ];

        return view('admin/produk/create', $data);
    }
    // ---- ERROR ----

        //form ubah produk
    public function form_update($id_produk)
        {
            $data = [
                'title' => 'Ubah Produk',
                'data_produk' => $this->ProdukModel->find($id_produk),
                'kategori_produk' => $this->KategoriModel->findALL(),
                'validation' => \Config\Services::validation()
            ];
    
            return view('admin/produk/update', $data);
        }

    //fungsi tambah produk
    public function create_produk()
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
        $this->ProdukModel->insert([
            'sluq_produk' => $sluq_produk,
            'nama_produk' => $this->request->getPost('nama_produk'),
            'sluq_kategori' => $this->request->getPost('sluq_kategori'),
            'departure' => $this->request->getPost('departure'),
            'deskripsi' => $this->request->getPost('deskripsi')
        ]);

        return redirect()->to(base_url('daftar-produk'))->with('success', 'Data Produk Berhasil Ditembahkan');
    }

    // daftar kategori produk
    public function kategori()
    {
        $data = [
            'title' => 'Daftar Kategori Produk',
            'daftar_kategori' => $this->KategoriModel->orderBy('id_kategori', 'DESC')->findAll()
        ];
        return view('admin/produk/kategori', $data);
    }

    // tambah kategori produk
    public function store()
    {
        // simpan data  ke data base
        $data = [
            'nama_kategori' => esc($this->request->getPost('nama_kategori')),
        ];

        $this->KategoriModel->insert($data);

        return redirect()->back()->with('success', 'Produk Berhasil Di Tambahkan');
    }

    // ubah kategori produk
    public function update($id_kategori)
    {

        // simpan data  ke data base
        $data = [
            'nama_kategori' => esc($this->request->getPost('nama_kategori')),
        ];

        $this->KategoriModel->update($id_kategori, $data);

        return redirect()->back()->with('success', 'Produk Berhasil Di Ubah');
    }

    // hapus kategori produk
    public function destroy($id_kategori)
    {
        $this->KategoriModel->where('id_kategori', $id_kategori)->delete();

        return redirect()->back()->with('success', 'Data Kategori Produk Berhasil Dihapus');
    }

          //HAPUS PRODUK
          public function destroy1($id_produk)
          {
              $this->ProdukModel->where('id_produk', $id_produk)->delete();
      
              return redirect()->back()->with('success', 'Data Kategori Produk Berhasil Dihapus');
          }
  
}
