<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function store(Request $request)
    {
        session_start();

        $username = $request->username;
        $password = $request->password;

        $employee = Employee::where([['username', $username]])->first();

        if (!$employee) {
            $_SESSION['auth']['error'] = 'exists';
            return redirect()->route('home');
        }

        if (Hash::check($password, $employee->password)) {
            $_SESSION['auth']['id'] = $employee->id;
            $_SESSION['auth']['username'] = $employee->username;
            $_SESSION['auth']['occupation'] = $employee->occupation;

            return redirect()->route('home');
        }

        $_SESSION['auth']['error'] = 'password';
        return redirect()->route('home');
    }

    public function destroy()
    {
        session_start();
        unset($_SESSION['auth']);
        return redirect()->route('home');
    }
}
