<?php

namespace App\Http\Controllers;

use PDF;


use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;



class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article = Article::all();
        return view('articles.index', ['articles' => $article]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // testing validasi
        // dd($request->image);

        // $file_name = $request->file('image')->image->getClientOriginalName();
        // $image = $request->file('image')->storeAs('images', $file_name);

        if ($request->file('image')!=null) {
          $image_name = $request->file('image')->store('images', 'public');
        }

        Article::create([
            'title'=> $request->title,
            'content'=> $request->content,
            'freatured_image' => $image_name,
        ]);
        return redirect()->route('articles.index')
            ->with('success','Articles successfully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);

        return view('articles.edit', ['article' => $article]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $article = Article::find($id);

        $article->title = $request->title;
        $article->content = $request->content;
   
        if ($article->freatured_image && file_exists(storage_path('app/public' . $article->freatured_image))) {
            Storage::delete('public/' . $article-> freatured_image);
        }
        $image_name = $request->file('image')->store('image' , 'public');
        $article->freatured_image = $image_name;

        $article-> save();
        return redirect()-> route('articles.index')
            ->with('success', 'Articles successfully Diupdate');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
    public function print_pdf()
    {
        $articles = Article::all();
        $pdf = PDF::loadview('articles.articles_pdf', ['articles' => $articles]);
        return $pdf->stream();
    }

    public function test()
    {
        $articles = Article::all();
        return view('articles.index', ['articles' => $articles]);
    }
 
}