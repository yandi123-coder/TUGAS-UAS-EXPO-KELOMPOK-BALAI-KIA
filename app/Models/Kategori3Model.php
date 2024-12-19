<?php

namespace App\Models;

use CodeIgniter\Model;

class Kategori3Model extends Model
{
    protected $table            = 'kategori5';
    protected $primaryKey       = 'id_kategori';
    protected $returnType       = 'object';
    protected $allowedFields    = ['nama_kategori','nama_produk', ];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];
}
