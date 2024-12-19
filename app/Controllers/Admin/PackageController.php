<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
class PackageController extends BaseController
{
    public function package(): string
    {
        $data = [
            'title' => 'Package'
        ];
        return view('admin/package/package1', $data);
    }

    public function package2(): string
    {
        $data = [
            'title' => 'package2'
        ];
        return view('admin/package/package2', $data);
    }
}