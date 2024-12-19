<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
class AboutController extends BaseController
{
    public function about(): string
    {
        $data = [
            'title' => 'About'
        ];
        return view('admin/about/about', $data);
    }

    public function about1(): string
    {
        $data = [
            'title' => 'About1'
        ];
        return view('admin/about/about1', $data);
    }
}