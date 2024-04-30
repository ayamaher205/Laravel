<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

use Illuminate\Http\Request;
use App\Models\Post;
class PostsController extends Controller
{
    //
    private function file_operations($request){
        if($request->hasFile('image')){
            $image = $request->file('image');
            $filepath=$image->store("images","posts_uploads" );
            return $filepath;

        }
        return null;
    }
    public function index()
    {
        $posts = Post::paginate(5);
        return view("index" ,compact('posts'));
    }
    public function create(){
        return view("create");
    }

    public function store(){
        $request_parms = request();
        $image_path = $this->file_operations($request_parms);
        $post = new Post();
        $post->title = $request_parms['title'];
        $post->body = $request_parms['body'];
        $post->creator = $request_parms['creator'];
        $post->image = $image_path;

        $post->save();
        return to_route('posts.show', $post->id);
    }
    public function show($id){
        $post = Post::find($id);
        if($post){
        return view('show', ['post'=> $post]);
    }
    return abort(404);
    }
    public function edit($id){
        $post =Post::findOrFail($id);
        return view("edit", ["post"=> $post]);
    }
    public function update($id){
        $request_parms = request();
        $post = Post::findOrFail($id);
        $post->title = $request_parms["title"];
        $post->body = $request_parms["body"];  
        $post->creator = $request_parms["creator"];
        $post->save();
        return to_route("posts.show", $post->id);
    }
    public function destroy($id){
        $post=Post::findOrFail($id);
        $post->delete();
        return to_route("posts.index");
    }
}
