<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table            = 'produk';
    protected $primaryKey       = 'id_produk';
    protected $returnType       = 'object';

    protected $allowedFields    = ['sluq_produk', 'sluq_kategori', 'deskripsi', 'nama_produk', 'departure', 'nama_hotel', 'nama_user'];

    // Dates
    protected $dateFormat = 'date';
    protected $createField = 'departure';
}
