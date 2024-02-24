<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\APIController;
use App\Models\CruxDBApiClient;
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

    public function profile($user_id)
    {
        $user_info = User::get_user_info(((string)$user_id));

        return view('profile',
            [
                'user_info' => $user_info,
            ]);
    }

    public function login(Request $request)
    {
        try {
          

        } catch (\Exception $e) {
            Log::error($e->getMessage());
            Log::error($e->getTraceAsString());
            return $this->return_error($request, $e->getMessage(), false);
        }
    }

    public function logout(Request $request)
    {
        try {
        

        } catch (\Exception $e) {
            Log::error($e->getMessage());
            Log::error($e->getTraceAsString());
            return $this->return_error($request, $e->getMessage(), false);
        }
    }

}