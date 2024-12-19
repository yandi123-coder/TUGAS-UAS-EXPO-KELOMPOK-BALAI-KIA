<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
class HomeController extends BaseController
{
    public function home(): string
    {
        $data = [
            'title' => 'Home'
        ];
        return view('admin/home/index', $data);
    }
}
