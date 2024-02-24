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