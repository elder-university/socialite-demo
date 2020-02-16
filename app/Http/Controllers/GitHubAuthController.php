<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Laravel\Socialite\Contracts\User as SocialiteUser;
use Laravel\Socialite\Facades\Socialite;

class GitHubAuthController extends Controller
{
    const REMEMBER_ME = true;

    public function auth()
    {
        return Socialite::driver('github')->redirect();
    }

    public function callback()
    {
        $user = $this->findOrCreateUser(
            Socialite::driver('github')->user()
        );

        Auth::login($user, self::REMEMBER_ME);

        return redirect(route('comments.index'));
    }

    private function findOrCreateUser(SocialiteUser $gitHubUser)
    {
        return User::firstOrCreate(['github_id' => $gitHubUser->getId()], [
            'name' => $gitHubUser->getName(),
            'email' => $gitHubUser->getEmail(),
            'password' => bcrypt(Str::random(32)),
        ]);
    }
}
