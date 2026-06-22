<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Article extends Model
{
    protected $fillable = [
        'title', 'slug', 'content', 'thumbnail', 'category',
        'author', 'meta_title', 'meta_description', 'published_at',
    ];

    protected $casts = [
        'published_at' => 'date',
    ];

    // Slug otomatis dari judul bila dikosongkan, dijamin unik.
    protected static function booted(): void
    {
        static::saving(function (Article $article) {
            if (blank($article->slug)) {
                $base = Str::slug($article->title);
                $slug = $base;
                $i = 2;
                while (static::where('slug', $slug)
                    ->when($article->exists, fn ($q) => $q->whereKeyNot($article->getKey()))
                    ->exists()) {
                    $slug = $base . '-' . $i++;
                }
                $article->slug = $slug;
            }
        });
    }
}
