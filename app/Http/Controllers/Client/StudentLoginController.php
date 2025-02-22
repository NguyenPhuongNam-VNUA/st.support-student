<?php

declare(strict_types=1);

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class StudentLoginController extends Controller
{
    public function index()
    {
        $username = null;
        if (session('verified_token')) {
            $email_verified = DB::table('emails_verified')->where('token', session('verified_token'))->first();
            if ($email_verified) {
                $student = Student::where('email', $email_verified->email)->first();

                if ($student) {
                    DB::table('emails_verified')->where('token', session('verified_token'))->delete();
                    session()->forget('verified_token');
                    $username = $student->username;
                    $student->email_verified = 1;
                    $student->save();
                }
            }
        }

        return view('client.pages.login.index', compact('username'));
    }

    public function register()
    {
        return view('client.pages.login.register');
    }

    public function logout()
    {
        auth('students')->logout();
        return redirect()->route('client.index');
    }

    public function verify($token)
    {
        $token_verified = DB::table('emails_verified')->where('token', $token)->first();
        if (!$token_verified) {
            return view('client.pages.login.register');
        }

        session(['verified_token' => $token]);
        return redirect()->route('student.login');
    }

    public function forgotPassword()
    {
        return view('client.pages.login.forgot-password');

    }

    public function resetPassword($token)
    {
        $resetToken = DB::table('reset_password')->where('token', $token)->first();
        if (!$resetToken) {
            return redirect()->route('student.forgot-password');
        }

        $current_time = Carbon::now();
        $created_at = Carbon::parse($resetToken->created_at)->addMinutes(15);
        if ($current_time > $created_at) {
            session()->flash('error-token', 'Thời gian xác nhận đã hết hạn');
            return redirect()->route('student.forgot-password');
        }


        return  view('client.pages.login.reset-password', ['token' => $token]);

    }
}
