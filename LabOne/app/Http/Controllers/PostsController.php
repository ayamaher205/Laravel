<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
class PostsController extends Controller
{

    public $contents;
    public $users ; 
    public function get_user($id){
        $user = array_filter($this->users['users'], function ($user) use ($id) {
            return $user['id'] == $id;
        });    
    if(count($user) > 0){
        return $user;
    }else{
        return null;
    }
    }
    public function __construct(){
         $this->contents = File::get(public_path('files/users.json'));
         $this->users = json_decode(json: $this->contents, associative: true);

    }
    public function index(){
        $users = $this->users['users'];
        return view('index', ['users'=> $users]);
    }  
    public function create()
    {
        return view('create');
    }
    public function show($id){
        $user = $this->get_user($id);
        if(!$user){
            return abort(404);
        }
        return view('show', ['user'=>array_values($user)]);
    }
    public function edit($id){
        $user = $this->get_user($id);
        if(!$user){
            return abort(404);
        }
        return view('edit', ['user'=>array_values($user)]);
    }
    public function destroy($id){
         unset($this->users['users'][ $id ]);
         return redirect('/posts');
    }

}
