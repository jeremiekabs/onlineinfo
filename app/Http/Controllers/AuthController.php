<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function handleLogin(AuthRequest $request)
    {
        $credentials = $request->only(['email', 'password']);
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->statut == 1 || $user->statut == 2) {
                return redirect()->route('dashboard');
            } else {
                Auth::logout();
                return redirect()->back()->with('error_msg', 'Votre statut ne permet pas de vous connecter.');
            }
        } else {
            return redirect()->back()->with('error_msg', 'Paramètres de connexion non reconnus.');
        }
    }

    public function register()
    {
        return view('auth.register');
    }

    public function handleRegister(RegisterRequest $request)
    {

        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);
        User::create($data);

        return back()->with('success_message', 'Compte créé avec succès. L\'admin doit valider votre compte');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')->with('success_msg', 'Vous êtes déconnecté avec succès');
    }
    public function index()
    {
        if (Auth::user()->statut != 2) {
            return redirect('/dashboard');
        }

        $users = User::whereIn('statut', [0, 1])->paginate(5);
        return view('auth.index', compact('users'));
    }

    public function update($id, $statut)
    {
        if (Auth::user()->statut != 2) {
            return redirect('/dashboard');
        }
        $user = User::find($id);
        $user->statut = $statut;
        $user->save();

        return redirect()->back()->with('success', 'Statut mis à jour avec succès');
    }
}
