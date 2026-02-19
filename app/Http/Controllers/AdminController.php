<?php

namespace App\Http\Controllers;

use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::select(
            'role',
            'penggunaId',
            'icNum',
            'status',
            'penyelarasId',
            'unitId',
            'ptjId',
            'name',
            'email'
        )->get();

        return view('admin.dashboard', compact('users'));
    }
}
