<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
class DestinationController extends BaseController
{
    public function desti(): string
    {
        $data = [
            'title' => 'desti'
        ];
        return view('admin/destination/desti', $data);
    }

    public function desti1(): string
    {
        $data = [
            'title' => 'desti1'
        ];
        return view('admin/destination/desti2', $data);
    }

    public function desti2(): string
    {
        $data = [
            'title' => 'desti3'
        ];
        return view('admin/destination/desti3', $data);
    }

    public function desti3(): string
    {
        $data = [
            'title' => 'desti4'
        ];
        return view('admin/destination/desti4', $data);
    }
}
