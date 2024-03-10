<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleComtroller extends Controller
{
    public function index(){
        $roles= Role::all();
        return $roles;
    }

    public function show($id){
        $roles= Role::find($id);
        return $roles;
    }
}
