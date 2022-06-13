<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\members;
use App\Models\Users;

class GetDbController extends Controller
{
    public function getMembers()
    {
        $members = members::all();
        return $this->jsonResponse($members);
    }
    public function getUsers()
    {
        $users = Users::all();
        return $this->jsonResponse($users);
    }
}
