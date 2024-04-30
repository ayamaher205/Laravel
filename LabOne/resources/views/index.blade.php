@extends('Layouts.app')

@Section('body')
<table class="table align-middle mb-0 bg-white">
    <thead class="bg-light">
      <tr>
        <th>Name</th>
        <th>Title</th>
        <th>Gender</th>
        <th>Address</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)        
        <tr>
          <td>
            <div class="d-flex align-items-center">
              <img
                  src="{{$user['image']}}"
                  alt=""
                  style="width: 45px; height: 45px"
                  class="rounded-circle"
                  />
              <div class="ms-3">
                <p class="fw-bold mb-1">{{$user['firstName']}}&nbsp;&nbsp; {{$user['lastName']}} </p>
                <p class="text-muted mb-0">{{$user['email']}}</p>
              </div>
            </div>
          </td>
          <td>
            <p class="fw-normal mb-1">{{$user['company']['title']}}</p>
            <p class="text-muted mb-0">{{$user['company']['department']}}</p>
          </td>
          <td>
            <p class="text-muted mb-0">{{$user['gender']}}</span>
          </td>
          <td>{{$user['address']['city']}}</td>
          <td>
            <a rel='tooltip' class='btn btn-danger btn-just-icon btn-sm' data-original-title='' title='' href='/posts/{{$user['id']}}'>
              <i class='material-icons'>delete</i>
          </a>
          <a rel='tooltip' class='btn btn-success btn-just-icon btn-sm' data-original-title='' title='' href="/posts/{{$user['id']}}/edit">
              <i class='material-icons'>edit</i>
          </a>
          <a rel='tooltip' class='btn btn-secondary btn-just-icon btn-sm' data-original-title='' title='' href="/posts/{{$user['id']}}"
          {{-- {{route('posts.show',$user['id'])}} --}}>
            <i class='material-icons'>visibility</i>
        </a>
          </td>
        </tr>
        @endforeach
    </tbody>
  </table>
@endsection