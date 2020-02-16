<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Str;
use Laravel\Socialite\Contracts\User as SocialiteUser;
use Laravel\Socialite\Facades\Socialite;

class GitHubAuthController extends Controller
{
    public function auth()
    {
        return Socialite::driver('github')->redirect();
    }

    public function callback()
    {
        $this->findOrCreateUser(
            Socialite::driver('github')->user()
        );

        return redirect(route('comments.index'));
    }

    private function findOrCreateUser(SocialiteUser $gitHubUser)
    {
        User::firstOrCreate(['github_id' => $gitHubUser->getId()], [
            'name' => $gitHubUser->getName(),
            'email' => $gitHubUser->getEmail(),
            'password' => bcrypt(Str::random(32)),
        ]);
    }
}
