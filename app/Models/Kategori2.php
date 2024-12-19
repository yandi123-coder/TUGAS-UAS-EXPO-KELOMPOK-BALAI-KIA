<?php

namespace App\Models;

use CodeIgniter\Model;

class Kategori2 extends Model
{
    protected $table            = 'kategori2';
    protected $primaryKey       = 'id_kategori';
    protected $returnType       = 'object';
    protected $allowedFields    = ['nama_kategori','nama_produk', ];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];
}
