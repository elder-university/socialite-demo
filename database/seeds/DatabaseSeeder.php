<?php

use Illuminate\Database\Seeder;
use App\Comment;
use App\User;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $users = factory(User::class, 10)->create();

        $users->each(function (User $user) {
            for ($count = 0; $count < 5; $count++) {
                factory(Comment::class)->create(['user_id' => $user->id]);
            }
        });
    }
}
