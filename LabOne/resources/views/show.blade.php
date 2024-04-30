@extends('Layouts.app')
@Section('body')
{{--@dump($user) --}}
<div class="card text-center my-5 mx-auto" style="width: 18rem;">
    <img class="card-img-top" src="{{$user[0]['image']}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{$user[0]['firstName']}}&nbsp;&nbsp; {{$user[0]['lastName']}}</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="/posts" class="btn btn-primary">Go Back</a>
    </div>
  </div>

@endsection