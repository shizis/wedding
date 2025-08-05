<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        if (!Auth::user()->hasRole('Super-Admin')) {
            return to_route('user.index');
        }

        return view('admin.pages.admin-index');
    }

    public function guests()
    {
        if (!Auth::user()->hasRole('Super-Admin')) {
            return to_route('user.index');
        }

        $user = User::find(1);
        $guests = $user->guests->all();

        return view('admin.pages.admin-guests', compact([
            'guests'
        ]));
    }
}
