<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
       $keyword = $request->input('search');
       $articles = Article::where('title', 'like', '%' . $keyword . '%')->get();

       return view('blog.search', compact('articles'));
       //return View::make('blog.search')->with('articles', $result);

    }

}
