<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title'=>[],
            'content'=>[],
            'auteur'=>[],
            'categories_id'=>[],
            'image'=>[],
        ];
    }
    public function messages(){
        return [
            'title.required'=>'Le titre est requis',
            'title.unique'=>'Le titre existe déjà',
            'content.required'=>'Le contenu est requis',
            'content.unique'=>'Le contenu existe déjà',
            'auteur.required'=>'Auteur est requis',
            'categorie_id.required'=>'Catégorie est requise',           
        ];
    }
}
