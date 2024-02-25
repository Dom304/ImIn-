<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\APIController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UserController extends APIController
{
    public function index()
    {
        return view('login');
    }

    public function home()
    {
        return view('home');
    }

    public function login(Request $request)
    {
        try {
            $username = $request->input('email');
            $password = $request->input('password');

            $user = User::user_login($username, $password);

            if ($user) {
                return $this->return_success($request, true, 'success');
            } else {
                return $this->return_error($request, "Unsuccessful login", false);
            }
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            Log::error($e->getTraceAsString());
            return $this->return_error($request, $e->getMessage(), false);
        }
    }



    // public function logout(Request $request)
    // {
    //     try {


    //     } catch (\Exception $e) {
    //         Log::error($e->getMessage());
    //         Log::error($e->getTraceAsString());
    //         return $this->return_error($request, $e->getMessage(), false);
    //     }
    // }

}
