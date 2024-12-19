<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
class Kategori3Controller extends BaseController
{
    // daftar produk
    // public function index3()
    // {
    //     $data = [
    //         'title' => 'Daftar produk',
    //         'daftar_produk1' => $this->Produk2Model->orderBy('id_produk', 'DESC')->findALL()
    //     ];
    //     return view('admin/produk2/index2', $data);
    // }

    public function kategori3()
    {
        $data = [
            'title' => 'Daftar Kategori Produk',
            'daftar_kategori' => $this->Kategori3Model->orderBy('id_kategori', 'DESC')->findAll()
        ];
        return view('admin/produk3/kategori3', $data);
    }

    public function store3()
    {
        // simpan data  ke data base
        $data = [
            'nama_kategori' => esc($this->request->getPost('nama_kategori')),
        ];

        $this->Kategori3Model->insert($data);

        return redirect()->back()->with('success', 'Produk Berhasil Di Tambahkan');
    }

            // hapus kategori produk
            public function destroy6($id_kategori)
            {
                $this->Kategori2->where('id_kategori', $id_kategori)->delete();
        
                return redirect()->back()->with('success', 'Data Kategori Produk Berhasil Dihapus');
            }
    
                //HAPUS PRODUK
        public function destroy7($id_produk)
        {
            $this->Produk3Model->where('id_produk', $id_produk)->delete();
    
            return redirect()->back()->with('success', 'Data Kategori Produk Berhasil Dihapus');
        }
}