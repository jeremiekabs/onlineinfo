<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Article extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'content',
        'auteur',
        'categories_id',
        'image'
    ];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'categories_id');
    }

    public function getSlug(): string
    {
        return Str::slug($this->title);
    }
    public function getId()
    {
        return Str::slug($this->id);
    }
    
}
