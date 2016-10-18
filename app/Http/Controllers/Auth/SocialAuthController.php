<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Socialite;
use App\SocialAccountService;

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
      $this->redirectTo = config('redirect_after_login');
   }

    public function redirect($provider)
    {
        return Socialite::driver($provider)->scopes(config('services.'.$provider.'.scopes'))->redirect();
    }

    public function callback(SocialAccountService $service, $provider)
    {

        $user = $service->createOrGetUser(Socialite::driver($provider), $provider);

        auth()->login($user);

        return redirect()->to($this->redirectTo);
    }
}
