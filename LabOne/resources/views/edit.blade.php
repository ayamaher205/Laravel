@extends('Layouts.app')

@Section('body')
<form class="m-5">
    <!-- 2 column grid layout with text inputs for the first and last names -->
    <div class="row mb-4">
      <div class="col">
        <div data-mdb-input-init class="form-outline">
            <label class="form-label" for="form3Example1">First name</label>
          <input type="text" id="form3Example1" class="form-control" value="{{$user[0]['firstName']}}" />
        </div>
      </div>
      <div class="col">
        <div data-mdb-input-init class="form-outline">
            <label class="form-label" for="form3Example2">Last name</label>
          <input type="text" id="form3Example2" class="form-control" value="{{$user[0]['lastName']}}"/>
        </div>
      </div>
    </div>
  
    <!-- Email input -->
    <div data-mdb-input-init class="form-outline mb-4">
        <label class="form-label" for="form3Example3">Email address</label>
      <input type="email" id="form3Example3" class="form-control" value="{{$user[0]['email']}}" />
    </div>
  
    <!-- Password input -->
    <div data-mdb-input-init class="form-outline mb-4">
      <input type="password" id="form3Example4" class="form-control" />
      <label class="form-label" for="form3Example4" value="{{$user[0]['password']}}">Password</label>
    </div>
  
    <!-- Checkbox -->
    <div class="form-check d-flex justify-content-center mb-4">
      <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
      <label class="form-check-label" for="form2Example33">
        Subscribe to our newsletter
      </label>
    </div>
  
    <!-- Submit button -->
    <a data-mdb-ripple-init type="button" class="btn btn-primary btn-block mb-4" href="/posts">Sign up</a>
  </form>
@endsection