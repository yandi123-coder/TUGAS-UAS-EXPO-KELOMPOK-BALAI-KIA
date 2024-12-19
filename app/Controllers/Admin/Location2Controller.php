<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
class Location2Controller extends BaseController
{
    public function locat1(): string
    {
        $data = [
            'title' => 'Location1'
        ];
        return view('admin/Locati/location1', $data);
    }

    public function locat2(): string
    {
        $data = [
            'title' => 'Location2'
        ];
        return view('admin/Locati/location2', $data);
    }

    public function locat3(): string
    {
        $data = [
            'title' => 'Location3'
        ];
        return view('admin/Locati/location3', $data);
    }

    public function locat4(): string
    {
        $data = [
            'title' => 'Location4'
        ];
        return view('admin/Locati/location4', $data);
    }

}