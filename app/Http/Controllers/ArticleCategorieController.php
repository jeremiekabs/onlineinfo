<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Categorie;
use Illuminate\Http\Request;

class ArticleCategorieController extends Controller
{
    public function show(Categorie $categorie){
        $categoriesArts = Article::where('categories_id', $categorie->id)->orderBy('created_at', 'desc')->paginate(6);
        $lateslatesArticles = Article::orderBy('created_at', 'desc')->take(10)->get();
        $randomArticles = $lateslatesArticles->random(5);
        return view('zsingleArticle.show', compact('categorie', 'categoriesArts', 'randomArticles'));
    }
}
