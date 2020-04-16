<?php


namespace LaravelMerax\Avatars\App\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelMerax\Avatars\App\Models\Avatar;

class Show extends Controller
{
    public function __invoke(Avatar $avatar)
    {
        return $avatar->inline();
    }
}
