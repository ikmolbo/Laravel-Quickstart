<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Socialite\Contracts\Provider;
use Hash;

class SocialAccount extends Model
{
    protected $fillable = ['user_id', 'provider_user_id', 'provider', 'access_token', 'refresh_token'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function createOrUpdateUser(Provider $provider, $driver) {

      $providerUser = $provider->user();
      $providerName = $driver;

      // If the user is already signed in, make sure we associate
      // this oAuth2 account with the existing user account
      if(auth()->check()) {
        $user = auth()->user();
      }
      else  {
        $user = User::firstOrCreate(
          [
            'email' => $providerUser->getEmail()
          ],
          [
            'email' => $providerUser->getEmail(),
            'name' => $providerUser->getName(),
            'avatar' => $providerUser->getAvatar(),
            'password' => str_random(16),
          ]
        );
      }

      $account = SocialAccount::updateOrCreate(
        [
          'provider' => $providerName,
          'provider_user_id' => $providerUser->getId()
        ],
        [
          'user_id' => $user->id,
          'provider' => $providerName,
          'provider_user_id' => $providerUser->getId(),
          'access_token' => $providerUser->token,
          'refresh_token' => $providerUser->refreshToken,
        ]
      );

      return $account->user;
    }
}
