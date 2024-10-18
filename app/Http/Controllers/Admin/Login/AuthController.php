<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\Login;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function index()
    {
        return view('admin.pages.login.index');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }

    public function forgotPassword()
    {
        return view('admin.pages.login.forgot-password');
    }

    public function resetPassword($token)
    {
        $resetToken = DB::table('reset_password')->where('token', $token)->first();

        if (!$resetToken) {
            return redirect()->route('login');
        }
        $current_time = Carbon::now();
        $created_at = Carbon::parse($resetToken->created_at)->addMinutes(15);

        //            dd($current_time, $created_at, $current_time > $created_at);
        if ($current_time > $created_at) {
            session()->flash('error-token', 'Thời gian xác nhận đã hết hạn');
            return redirect()->route('forgot-password');
        }
        return view('admin.pages.login.reset-password', ['token' => $token]);


    }
}
