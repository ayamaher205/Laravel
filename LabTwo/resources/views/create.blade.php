@extends('Layouts.app')
@Section('body')
<form method="post" action="{{route('posts.store')}}" enctype="multipart/form-data" class="m-5">
  @csrf
    <div class="form-group my-5">
      <label for="formGroupExampleInput">Title</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title">
    </div>
    <div class="form-group my-5">
      <label for="formGroupExampleInput2">Body</label>
      <input type="text" class="form-control" id="body" name="body" placeholder="Enter body">
    </div>
    <div class="form-group my-5">
      <label for="formGroupExampleInput2">Creator</label>
      <input type="text" class="form-control" id="creator" name="creator" placeholder="Enter Creator">
    </div>
    <div class="form-group my-5">
        <label for="exampleFormControlFile1" class="d-block">upload post image</label>
        <input type="file" class="form-control-file d-block" id="image" name="image">
      </div>
      <button type="submit" class="btn btn-success">Save Post</button>
</form>
@endsection