<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Category;
use Carbon\carbon;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $posts= Post::all();
        //$posts= Post::with('user')->orderBy('created_at','desc')->get();
        $posts= Post::with('user')->newest()->published()->paginate(3);
        $categories = Category::with('posts')->get();
        return view ('blog.index',compact('posts','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post) //Post::find(wildcard) i.e $id in this case
    {
        $categories = Category::with('posts')->get();
        // $post= Post::published()->findOrFail($id);
        return view('blog.show',compact('post','categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function Category(Category $category)
    {   $categoryName= $category->title;
        $categories = Category::with('posts')->get();
        // $posts= Post::with('category')->published()->where('category_id',$id)->paginate(3);
        $posts = $category->posts()->where('published_at','<=',Carbon::now())->paginate(3);
        return view ('blog.index',compact('posts','categories','categoryName'));
    }

    public function author(User $author)
    {
        $authorName= $author->name;
        $categories= Category::with('posts')->get();
        $posts= $author->post()->where('published_at','<=',Carbon::now())->paginate(3);
        return view('blog.index',compact('posts','categories','authorName'));

    }
}
