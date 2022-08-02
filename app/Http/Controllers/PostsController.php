<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('posts.index', [
            'posts' => Posts::all()
        ]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.add');
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

        $post = new Posts();
        $post->author = $request->author;
        $post->title = $request->title;
        $post->body = $request->body;
        if($request->hasFile('cover')){
            $file = $request->file('cover');
            $fileName = $file->getClientOriginalName().time().'.'.$file->getClientOriginalExtension();

            $destinationPath = public_path('/uploads');
            $file->move($destinationPath, $fileName);
            $post->cover = $fileName;
        }
        $post->save();
        if($request->hasFile('images')){
            $files = $request->file('images');
            foreach($files as $file){
                $image = new Image();
                $fileName = $file->getClientOriginalName().time().'.'.$file->getClientOriginalExtension();
                $destinationPath = public_path('/images');
                $file->move($destinationPath, $fileName);
              DB::table('images')->insert([
                'image' => $fileName,
                'post_id' => $post->id]);

              }


        }
        return redirect()->route('posts.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $post = Posts::find($id);
        return view('posts.show', [
            'post' => $post
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Posts $posts)
    {
        $post = Posts::find($request->id);
        $post->author = $request->author;
        $post->title = $request->title;
        $post->body = $request->body;

        if($request->hasFile('cover')){
            $file = $request->file('cover');
            $fileName = $file->getClientOriginalName().time().'.'.$file->getClientOriginalExtension();
            $destinationPath = public_path('/uploads');
            $file->move($destinationPath, $fileName);
            File::delete(public_path('/uploads/'.$post->cover));
            $post->cover = $fileName;

        }
        $post->save();

        return redirect()->route('posts.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $post = Posts::find($id);
        
        $post->delete();
        File::delete(public_path('uploads/'.$post->cover));
        return redirect()->route('posts.index');


    }
    public function delImages($id){
        $image = Image::find($id);
        $image->delete();
        File::delete(public_path('images/'.$image->image));
        return redirect()->route('posts.index', ['id' => $image->post_id]);
    }
}


