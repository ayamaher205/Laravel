@extends('Layouts.app')
@Section('body')
<div class="row">

<form method="post" action="{{route('posts.update',$post['id'])}}" enctype="multipart/form-data" class="m-5 col">
  @csrf
  @method('put')
    <div class="form-group my-5">
      <label for="formGroupExampleInput">Title</label>
      <input type="text" class="form-control" id="title" placeholder="Enter Title" value="{{$post['title']}}" name="title">
    </div>
    <div class="form-group my-5">
      <label for="formGroupExampleInput2">Body</label>
      <input type="text" class="form-control" id="body" name="body" placeholder="Enter body" value="{{$post['body']}}">
    </div>
    <div class="form-group my-5">
      <label for="formGroupExampleInput2">Creator</label>
      <input type="text" class="form-control" id="body" name="creator" placeholder="Enter body" value="{{$post['creator']}}">
    </div>
    <div class="form-group my-5">
        <label for="exampleFormControlFile1">upload post image</label>
        <input type="file" class="form-control-file" id="image">
      </div>
      <button type="submit"
          class="btn btn-success">Save Post</button>
</form>
<div class="col  col-lg-2"></div>
<img src="{{asset('images/posts/'.$post->image)}}" alt="" class="w-25 h-25 my-5 mx-5">
</div>
@endsection