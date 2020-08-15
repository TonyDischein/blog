<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function category($slug) {
        $category = Category::where('slug', $slug)->first();
        $articles = $category->articles()->where('published', 1)->paginate(12);

        return view('blog.category', compact('category', 'articles'));
    }

    public function article($slug) {

        //dd(Article::where('slug', $slug)->with('user:id,name')->first());
        return view('blog.article', [
            'article' => Article::where('slug', $slug)->first()
        ]);
    }
}
