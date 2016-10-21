<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        return view('user')->with('user', $user);
    }

    /**
     * Updates user details except password
     *
     * @return \Illuminate\Http\Response
     */
    public function profile(Request $request)
    {
      $this->validate($request, [
          'name' => 'required|min:3'
      ]);

      auth()->user()->update($request->only(['name']));

      return back()->withInput()->with('status', 'Your profile has been updated.');
    }

    /**
     * Updates user password
     *
     * @return \Illuminate\Http\Response
     */
    public function password(Request $request)
    {
      $this->validate($request, [
          'password' => 'required|min:6',
          'password_confirmation' => 'required|same:password',
      ]);

      auth()->user()->update($request->only(['password']));

      return back()->withInput()->with('status', 'Your profile has been updated.');
    }
}
