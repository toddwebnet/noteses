<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function home(Request $request)
    {
        if (is_numeric($request->session()->get('userid'))) {
            return redirect('/home');
        } else {
            return $this->login($request);
        }
    }

    public function login(Request $request)
    {
        // clear out any existing session
        $request->session()->flush();
        return view('login');
    }

    public function credentials(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        // clear out any existing session
        $request->session()->flush();

        /** @var UserService $userService */
        $userService = app()->make(UserService::class);
        if ($userService->validate($username, $password)) {
            $request->session()->put('username', $username);
            $request->session()->put('userid', $userService->getUserByUsername($username)->id);
            return [true];
        }
        return [false];
    }

}
