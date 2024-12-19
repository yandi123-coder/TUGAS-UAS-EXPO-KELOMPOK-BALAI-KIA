<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
class Home2Controller extends BaseController
{

    public function home2(): string
    {
        $data = [
            'title' => 'Home2'
        ];
        return view('admin/home/index2', $data);
    }
}