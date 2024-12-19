<?php

namespace App\Models;

use CodeIgniter\Model;

class Produk1Model extends Model
{
    protected $table            = 'produk1';
    protected $primaryKey       = 'id_produk';
    protected $returnType       = 'object';
    protected $allowedFields    = ['nama_produk','departure' , 'produk', 'sluq_kategori', 'deskripsi' ];

    // protected bool $allowEmptyInserts = false;
    // protected bool $updateOnlyChanged = true;

    // protected array $casts = [];
    // protected array $castHandlers = [];
    protected $dateFormat = 'date';
    protected $createField = 'departure';
}
