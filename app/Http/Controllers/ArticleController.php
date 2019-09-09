<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Http\Requests\ArticleRequest;
use Session;
class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        // get articles from DB ordering by created at
        $articles = Article::select('title','status','id','created_at')
        ->orderBy('created_at','desc')
        ->paginate(10); 

        // return view with article object
        return view('articles.index')->with('articles',$articles);  
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return create view
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request) // request validation
    {
        // validation true and new object

        $article = new Article; 

        $article->title = $request->title;
        
        $article->body = $request->body;
        
        $article->status = $request->status;
            
            // store image in storage folder and get path of image
        $image_path = $request->main_image->store('public/article_images');
        
        $article->main_image = $image_path;
            // make sure to save record
            if($article->save()){
                // return success message
            Session::flash('article_added','Article Added Successfully');
            return redirect('/articles/'.$article->id);
            }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        // check article exist
        $article = Article::find($id);
        if($article){
            // return show view to display data of article
            return view('articles.show')->with('article',$article);
        }   
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // check article exist
        $article = Article::find($id);
        if($article){
            // return edit view to change on article values
            return view('articles.edit')->with('article',$article);
        }
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        // another way for validation
        $this->validate($request,[
            'title' => 'required',
            'body' => 'required',
            'status' => 'required|in:published,draft',
            'main_image' => 'required_if:main_image,==,NULL|mimes:jpg,jpeg,png'
            
        ]);

        // check validation exist
        $article = Article::find($id);

        if($article){

            $article->title = $request->title;

            $article->body = $request->body;
            
            $article->status = $request->status;
                
                // check if recived image  request 
            if($request->main_image){
        $image_path = $request->main_image->store('public/article_images');
        
        $article->main_image = $image_path;
            
            }

            // make sure updated success
            if($article->save()){

                Session::flash('article_updated','Article Updated Successfully');
                return redirect('/articles/'.$article->id);
            }
            
        }
        abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        if($article){
            // delete article (soft delete)
            $article->delete();
            Session::flash('article_deleted','Article Deleted Successfully');
            return back();
        }
        abort(404);
    }
}
