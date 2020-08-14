<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use  App\Models\Category;

class Article extends Model
{
    protected $fillable = ['title', 'slug', 'description_short', 'description', 'image', 'image_show', 'meta_title', 'meta_description', 'meta_keyword','published', 'created_by', 'modified_by'];

    //Polimorphic relation with categories
    public function categories() {
        return $this->morphToMany(Category::class, 'categoryable');
    }

    //Mutators
    public function setSlugAttribute($value) {
        $this->attributes['slug'] = Str::slug(mb_substr($this->title, 0, 40) . "-" . Carbon::now()->format('dmyHi'), '-');
    }

    public function scopeLastArticles($query, $count) {
        return $query->orderBy('created_at', 'desc')->take($count)->get();
    }
}
