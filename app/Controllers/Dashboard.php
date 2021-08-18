<?php

namespace App\Controllers;
use App\Models\UserGroupModel;

class Dashboard extends BaseController
{
    public function index()
    {        
        $userGroup = new UserGroupModel();
        $data = [
            'title' => 'PROMISE - ITTelkom SBY',
            'usergroup' => $userGroup->getGroupName(user()->usergroupid),
        ];

        return view('dashboard/index', $data);
    }
}