<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.pages.admin-index');
    }

    public function guests()
    {
        $user = User::find(1);
        $guests = $user->guests->all();

        return view('admin.pages.admin-guests', compact([
            'guests'
        ]));
    }
}
