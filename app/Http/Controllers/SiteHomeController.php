<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Commentaire;
use Illuminate\Http\Request;

class SiteHomeController extends Controller
{
    public function index(){
        $threeLastArticles = Article::orderBy('created_at', 'desc')->take(4)->get();
        $tenLastArticles = Article::orderBy('created_at', 'desc')->take(9)->get();
        $leftArticles = Article::orderBy('created_at', 'desc')->skip(9)->take(1)->get();
        $nextArticlesFives = Article::orderBy('created_at', 'desc')->skip(10)->take(5)->get();
        $nextArticlesOnes = Article::orderBy('created_at', 'desc')->skip(15)->take(1)->get();
        $nextArticlesOnesLarges = Article::orderBy('created_at', 'desc')->skip(16)->take(1)->get();
        $nextArticlesOnesLarges2 = Article::orderBy('created_at', 'desc')->skip(17)->take(1)->get();
        
        return view('home', compact('threeLastArticles', 'tenLastArticles', 'leftArticles', 'nextArticlesFives', 'nextArticlesOnes', 'nextArticlesOnesLarges', 'nextArticlesOnesLarges2'));
    }
    public function show(string $slug, Article $article){

        $latesArticles = Article::orderBy('created_at', 'desc')->take(4)->get();
        $commentaires = Commentaire::where('articles_id', $article->id)->orderBy('created_at', 'desc')->get();
        $countComment= Commentaire::where('articles_id', $article->id)->orderBy('created_at', 'desc')->count();
        $expectedSlug = $article->getSlug();
        
        if ($slug != $expectedSlug) {
            return to_route('singlearticle.show', ['slug'=>$expectedSlug, 'article'=>$article]);
        }
        
        return view('zsingleArticle.index', [
            'article' => $article,
            'latesArticles'=>$latesArticles,
            'commentaires'=>$commentaires,
            'countComment'=>$countComment
        ]);
    }

    public function store($slug, $article, Request $request){           
        $request->validate([
            'auteur' => 'required|string|max:255',
            'content' => 'required|string',
        ]);
        $commentaire = new Commentaire();
        $commentaire->content = $request->input('content');
        $commentaire->auteur = $request->input('auteur');
        $commentaire->articles_id = $article;
        $commentaire->save();

        return redirect()->route('singlearticle.show', ['slug' => $slug, 'article' => $article])
                ->with('success', 'Votre commentaire a été posté avec succès !');
    }
}
