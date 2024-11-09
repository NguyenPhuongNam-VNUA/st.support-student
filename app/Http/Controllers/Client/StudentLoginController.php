<?php

declare(strict_types=1);

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Student;
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
}
