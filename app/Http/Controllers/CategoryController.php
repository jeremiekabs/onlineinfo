<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Categorie;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Categorie::paginate(3);
        return view('category.index', compact('categories'));
    }

    public function create(){
        return view('category.create');
    }

    public function store(CategoryRequest $request){
        try {
            
            $data= $request->validated();
            Categorie::create($data);

            return redirect()->route('categorie.index')->with('success_message', 'Catégorie enregistrée');
            
        } catch (\Throwable $th) {
            dd($th);
        }
    }
    public function edit(Categorie $categorie) {

        return view('category.edit', compact('categorie'));

    }
    public function update(Categorie $categorie, CategoryRequest $request){

        try {

            $categorie->name= $request->name;
            $categorie->update();

            return redirect()->route('categorie.index')->with('success_message', 'Catégorie modifiée');
            
        } catch (\Throwable $th) {
            dd($th);
        }

    }
}
