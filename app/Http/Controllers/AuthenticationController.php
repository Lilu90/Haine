<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request as HttpRequest;


class AuthenticationController extends Controller
{
    public function login(HttpRequest $request) {
        $email = $request->get('email');
        $user = User::where('email', $email)->get()->first();
        if (!$user) {
            return back()->withErrors([
                'email' => 'email not found. '
            ])->onlyInput('email');
        }
        $pas = $request->get('password');
        $passwordIsCorrect = Hash::check($pas, $user->password);
        if (!$passwordIsCorrect) {
            return back()->withErrors([
                'password' => 'Password is not matching. '
            ])->onlyInput('email');
        }
        Auth::login($user);
        $request->session()->regenerate();
        return redirect('/');
    }

    public function index() {
        return View::make('authentication.login');
    }

    public function registration() {
        return View::make('authentication.registration');
    }

    public function register(HttpRequest $request) {

        if (!$request->get('password')) {
            throw new \Exception('I could not find the password');
        }
        if (!$request->get('password_confirmation')) {
            throw new \Exception('I did not find password confirmation');
        }
        if ($request->get('password') != $request->get('password_confirmation')) {
            throw new \Exception('Confirmation is not equal to password');
        }
        if (!$request->get('name')) {
            throw new \Exception('I could not find the name');
        }
        if (!$request->get('email')) {
            throw new \Exception('I could not find the email');
        }


        DB::table('users')->insert([
            "name" => $request->get("name"),
            "password" => Hash::make($request->get("password")),
            "email" => $request->get("email")
        ]);



//        dd($request->all());
    }

    public function logout(Request $request) {
        if(Auth::user()) {
            Auth::logout();
        }
        return View::make('home.home');
    }

}



