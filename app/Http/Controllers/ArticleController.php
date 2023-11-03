<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{


    public function __construct(){
        $this -> middleware('auth')-> only ('store', 'destroy', 'edit');
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::latest()->paginate(10);
        return view('articles.index', compact('articles'))
            ->with('i', (request()->input('page', 1) -1) *10);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'title' => 'required',
            'entry_header' => 'required',
            'category' => 'required',
            'article' => 'required',
            'image' => 'required|mimes:png,jpg,gif,svg,afiv,webp|max:2048'
        ]);

        $input = $request -> all();

        if ($image = $request -> file('image')) {
            $destinationFile = 'images/';
            $profileImage = date('YmdHis').".".$image -> getClientOriginalExtension();
            $image -> move($destinationFile, $profileImage);
            $input['image'] = "$profileImage";
        }

        Article::create($input);
        return redirect()-> route('articles.index')
            -> with('success', 'Article published successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $request -> validate([
            'title' => 'required',
            'entry_header' => 'required',
            'category' => 'required',
            'article' => 'required',
        ]);

        $input = $request -> all();

        if ($image = $request -> file('image')) {
            $destinationFile = 'images/';
            $profileImage = date('YmdHis').".".$image -> getClientOriginalExtension();
            $image -> move($destinationFile, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }

        $article -> update($input);
        return redirect()-> route('articles.index')
            -> with('success', 'Article updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article -> delete();
        return redirect()-> route('articles.index')
        -> with('success', 'Article deleted successfully');
    }
}
