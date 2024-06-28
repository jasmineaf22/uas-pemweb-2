<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class RegisterController extends Controller
{
    public function create()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'min:1', 'max:10'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:3']
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        if (Auth::guard('web')->attempt(['email' => $user->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->intended('table');
        }
    }

    public function username()
    {
        return 'email'; // or whichever field you are using for authentication
    }
}
