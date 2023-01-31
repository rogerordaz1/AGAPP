<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    public function index(){

        $usersCount = User::all()->count();

        return view('panel_admin' , [
            'usersCount' => $usersCount
        ]);
    }
}
