<?php


namespace LaravelMerax\Avatars\App\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelMerax\Avatars\App\Http\Requests\ValidateAvatarRequest;
use LaravelMerax\Avatars\App\Models\Avatar;

class Store extends Controller
{

    public function __invoke(ValidateAvatarRequest $request)
    {
        $avatar = $request->user()->avatar ?? new Avatar();
        $avatar->store($request->file('file'));

        return response()->json([
            'saved_name' => $request->user()->fresh()->avatar_link
        ]);
    }
}
