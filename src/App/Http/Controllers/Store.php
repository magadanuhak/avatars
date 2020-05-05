<?php


namespace LaravelMerax\Avatars\App\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelMerax\Avatars\App\Http\Requests\ValidateAvatarRequest;

class Store extends Controller
{

    public function __invoke(ValidateAvatarRequest $request)
    {
        $avatar = $request->user()->avatar;
        $avatar->store($request->file('avatar'));

        return response([
            'saved_name' => $request->user()->avatar_link
        ])->json();
    }
}
