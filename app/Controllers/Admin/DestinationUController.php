<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
class DestinationUController extends BaseController
{
    public function destiu(): string
    {
        $data = [
            'title' => 'desti'
        ];
        return view('admin/destinationU/destiu', $data);
    }

    public function destiu1(): string
    {
        $data = [
            'title' => 'desti1'
        ];
        return view('admin/destinationU/destiu2', $data);
    }

    public function destiu2(): string
    {
        $data = [
            'title' => 'desti3'
        ];
        return view('admin/destinationU/destiu3', $data);
    }

    public function destiu3(): string
    {
        $data = [
            'title' => 'desti4'
        ];
        return view('admin/destinationU/destiu4', $data);
    }
}
