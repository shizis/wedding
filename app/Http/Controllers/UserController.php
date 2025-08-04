<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use App\Models\Media;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class UserController extends Controller
{
    public function index()
    {
        $media = Cache::remember('main_path', now()->addMonth(), function () {
            return Media::whereIn('id', [10, 11, 12])->get();
        });

        return view('pages.home-index', compact([
            'media'
        ]));
    }

    public function guest(Request $request)
    {
        $user = User::find(1);

        $guest = $user->guests()->where('slug', '=', $request->slug)
            ->where('uuid', '=', $request->uuid)->first();

        $media = Cache::remember('main_path', now()->addMonth(), function () {
            return Media::whereIn('id', [10, 11, 12])->get();
        });

        return view('pages.home-index', compact([
            'guest',
            'media'
        ]));
    }
}
