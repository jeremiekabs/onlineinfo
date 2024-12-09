<?php

namespace App\Http\Controllers;
use Intervention\Image\Facades\Image;

use App\Http\Requests\ArticleRequest;
use Illuminate\Support\Facades\File;
use App\Models\Article;
use App\Models\Categorie;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        $articles = Article::orderBy('created_at', 'desc')->paginate(5);
        return view('article.index', compact('articles'));
    }

    public function create(){
        $categories = Categorie::all();
        return view('article.create', compact('categories'));
    }

    public function store(Request $request){          
        $request->validate(
            [
                'title' => 'required|max:255',
                'content'=>'required',
                'auteur'=>'required',
                'categories_id'=>'required',
                'image' => 'mimes:png,jpeg,jpg|max:2048',
            ]
        );
        $filePath= public_path('images');
        $inser = new Article();

        $inser->title=$request->title;
        $inser->content=$request->content;
        $inser->auteur=$request->auteur;
        $inser->categories_id=$request->categories_id;

        if ($request->hasFile('image')) {
            $file= $request->file('image');
            $file_name= time() . $file->getClientOriginalName();
            
            $file->move($filePath, $file_name);
            $inser->image= $file_name;
        }
        $resultat = $inser->save();

        return redirect()->route('article.index')->with('success_message', 'Article enregistré');
    }

    public function edit(Article $article) {

        $categories = Categorie::all();
        return view('article.edit', compact('article','categories'));

    }
    public function update(Request $request, Article $article){

        $request->validate(
            [
                'title' => 'required|max:255',
                'content'=>'required',
                'auteur'=>'required',
                'categories_id'=>'required',
                'image' => 'mimes:png,jpeg,jpg|max:2048',
            ]
        );

        $article->title= $request->title;
        $article->content= $request->content;
        $article->auteur= $request->auteur;
        $article->categories_id= $request->categories_id;

        if ($request->hasFile('image')) {
            $filePath= public_path('images');
            $file= $request->file('image');
            $file_name= time() . $file->getClientOriginalName();
            $file->move($filePath, $file_name);
            //delete photo
            if (!is_null($article->image)) {
                $oldImage = public_path('images/' . $article->image);
                if (File::exists($oldImage)) {
                    unlink($oldImage);
                }
            }
            $article->image= $file_name;
        }

        $resultat = $article->save();
        return redirect()->route('article.index')->with('success_message', 'Article modifié');
            
    }
}
