<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Categorie;
use App\Models\User;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index(){
        $articles = Article::all()->count();
        $categories = Categorie::all()->count();
        $usersOff = User::whereIn('statut', [0])->count();

        return view('dashboard', compact('articles', 'categories', 'usersOff'));
    }
}
