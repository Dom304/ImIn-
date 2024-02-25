<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\APIController;
use App\Models\User;
use App\Models\Job;
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
        $jobs = Job::list();
        return view('home', ['jobs' => $jobs]);
    }

    public function login(Request $request)
    {
        Log::info(__METHOD__ . print_r($request, true));
        try {
            $username = $request->input('username');
            $password = $request->input('password');

            $user = true;

            if ($user) {
                return redirect('home');
            } else {
                Log::error('wrong pass');
            }
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            Log::error($e->getTraceAsString());
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
