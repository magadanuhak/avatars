<?php


namespace LaravelMerax\Avatars\App\Commands;

use Illuminate\Console\Command;
use App\Models\User\User;

class GenerateAvatars extends Command
{
    protected $signature = 'merax:avatars:generate';

    protected $description = 'Generates missing user avatars';

    public function handle()
    {
        User::doesntHave('avatar')->get()
            ->each->generateAvatar();

        $this->info('Avatars generated successfully');
    }
}
