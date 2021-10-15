<?php

namespace App\Controllers;
use App\Models\UserGroupModel;

class Dashboard extends BaseController
{
    public function index()
    {        
        $data = [
            'title' => 'PROMISE - ITTelkom SBY',
            'usergroup' => $this->userGroup,
        ];        
        return $this->view_dashboard($this->userGroup);
    }

    public function view_dashboard($userGroup=false){
        $data = [
            'title' => 'Dashboard - '.$userGroup,
            'usergroup' => $userGroup,
        ];

        return view('dashboard/index'.str_replace(" ","_",strtolower($userGroup=="Administrator"?"":"_".$userGroup)), $data);

    }
}