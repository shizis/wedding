<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('pages.home-index');
    }

    public function guest(Request $request)
    {
        $user = User::find(1);

        $guest = $user->guests()->where('slug', '=', $request->slug)
            ->where('uuid', '=', $request->uuid)->first();

        return view('pages.home-index', compact([
            'guest'
        ]));
    }
}
