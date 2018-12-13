<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class ManageController extends Controller
{
    public function getManageIndex(){
        return view('manage.index');
    }
}
