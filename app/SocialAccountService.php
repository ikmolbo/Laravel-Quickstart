<?php

namespace App;

use Laravel\Socialite\Contracts\Provider;
use Hash;

class SocialAccountService
{
    public function createOrGetUser(Provider $provider, $driver)
    {

        $providerUser = $provider->user();
        $providerName = $driver;

        // $providerUser->token; // Access Token - to be stored per user in tokens table

        $account = SocialAccount::whereProvider($providerName)
            ->whereProviderUserId($providerUser->getId())
            ->first();

        if ($account) {
            return $account->user;
        } else {

            $account = new SocialAccount([
                'provider_user_id' => $providerUser->getId(),
                'provider' => $providerName
            ]);

            // If the user is already signed in, make sure we associate
            // this oAuth2 account with the existing user account
            if(auth()->check()) {
              $user = auth()->user();
            }
            else {
              $user = User::whereEmail($providerUser->getEmail())->first();
            }

            if (!$user) {

                $user = User::create([
                    'email' => $providerUser->getEmail(),
                    'name' => $providerUser->getName(),
                    'password' => Hash::make(str_random(8))
                ]);
            }

            $account->user()->associate($user);
            $account->save();

            return $user;

        }

    }
}
