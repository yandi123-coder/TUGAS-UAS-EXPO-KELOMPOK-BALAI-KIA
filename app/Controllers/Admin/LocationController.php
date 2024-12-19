<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
class LocationController extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Location1'
        ];
        return view('admin/Location/Loca1', $data);
    }

    public function index2(): string
    {
        $data = [
            'title' => 'Location2'
        ];
        return view('admin/Location/Loca2', $data);
    }

    public function index3(): string
    {
        $data = [
            'title' => 'Location3'
        ];
        return view('admin/Location/Loca3', $data);
    }

    public function index4(): string
    {
        $data = [
            'title' => 'Location4'
        ];
        return view('admin/Location/Loca4', $data);
    }
}
