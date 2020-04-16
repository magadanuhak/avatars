<?php


namespace LaravelMerax\Avatars\App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class ValidateAvatarRequest extends FormRequest
{

    public function rules()
    {
        return ['avatar' => 'required|image'];
    }
}