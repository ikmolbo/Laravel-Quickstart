<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\SocialAccount;
use App\Http\Controllers\Controller;
use Socialite;
use App\SocialAccountService;
use Log;

class SocialAuthController extends Controller
{

  /**
   * Where to redirect users after resetting their password.
   *
   * @var string
   */
   protected $redirectTo;

   /**
    * Create a new controller instance.
    *
    * @return void
    */
   public function __construct()
   {
      $this->redirectTo = config('app.redirect_after_login');
   }

    public function redirect($provider)
    {
        return Socialite::driver($provider)->scopes(config('services.'.$provider.'.scopes'))->redirect();
    }

    public function callback(SocialAccount $social, $provider)
    {
        // To fix problem with logging into several services at once, add ->stateless().
        // See: http://stackoverflow.com/questions/30660847/laravel-socialite-invalidstateexception
        $user = $social->createOrUpdateUser(Socialite::driver($provider)->stateless(), $provider);
        auth()->login($user);

        return redirect()->to($this->redirectTo);
    }
}
