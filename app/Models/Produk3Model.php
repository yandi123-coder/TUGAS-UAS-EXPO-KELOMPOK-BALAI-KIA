<?php

namespace App\Models;

use CodeIgniter\Model;

class Produk3Model extends Model
{
    protected $table            = 'produk3';
    protected $primaryKey       = 'id_produk';
    protected $returnType       = 'object';
    protected $allowedFields    = ['nama_produk','departure' , 'deskripsi', 'produk', 'sluq_kategori' ];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];
    protected $dateFormat = 'date';
    protected $createField = 'departure';
}
