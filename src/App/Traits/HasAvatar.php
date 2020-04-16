<?php


namespace LaravelMerax\Avatars\App\Traits;

use LaravelMerax\Avatars\App\Models\Avatar;
use LaravelMerax\Avatars\App\Services\DefaultAvatar;

trait HasAvatar
{
    public static function bootHasAvatar()
    {
        self::created(fn ($model) => $model->generateAvatar());
    }

    public function avatar()
    {
        return $this->hasOne(Avatar::class);
    }

    public function generateAvatar(): Avatar
    {
        optional($this->avatar)->delete();

        return (new DefaultAvatar($this))->create();
    }
}
