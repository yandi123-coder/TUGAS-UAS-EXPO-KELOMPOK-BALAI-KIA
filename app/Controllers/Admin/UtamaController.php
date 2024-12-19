<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
class UtamaController extends BaseController
{
    public function utama(): string
    {
        $data = [
            'title' => 'utama'
        ];
        return view('admin/home/index', $data);
    }
}
