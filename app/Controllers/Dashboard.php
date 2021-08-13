<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'PROMISE - ITTelkom SBY'
        ];

        return view('dashboard/index', $data);
    }
}