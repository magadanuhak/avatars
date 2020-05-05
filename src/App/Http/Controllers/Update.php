<?php


namespace LaravelMerax\Avatars\App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class Update extends Controller
{

    public function __invoke()
    {
        $avatar = Auth::user()->generateAvatar();

        return response()->json([
            'saved_name' => Auth::user()->avatar_link
        ]);
    }
}
