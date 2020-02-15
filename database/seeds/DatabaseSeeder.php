<?php

use Illuminate\Database\Seeder;
use App\Comment;
use App\User;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        factory(User::class)->create([
            'name' => 'James I',
            'email' => 'james@example.com',
            'password' => bcrypt('secret'),
        ]);

        $users = factory(User::class, 10)->create();

        $users->each(function (User $user) {
            for ($count = 0; $count < 5; $count++) {
                factory(Comment::class)->create(['user_id' => $user->id]);
            }
        });
    }
}
