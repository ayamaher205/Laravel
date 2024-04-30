@extends('Layouts.app')

@Section('body')
<a href="/posts/create" class="btn btn-info">Add Post</a>
<table class="table align-middle mb-0 bg-white">
    <thead class="bg-light">
      <tr>
        <th>image</th>
        <th>Title</th>
        <th>body</th>
        <th>Creator</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)        
        <tr>
          <td>
            <div class="d-flex align-items-center">
              <img
                  src="{{asset('images/posts/'.$post->image)}}"
                  alt=""
                  style="width: 45px; height: 45px"
                  class="rounded-circle"
                  />
            </div>
          </td>
          <td><p class="fw-bold mb-1">{{$post->title}} </p></td>
          <td>
            <p class="fw-normal mb-1">{{$post->body}}</p>
          </td>
          <td>
            <p class="text-muted mb-0">{{$post->creator}}</span>
          </td>
          <td>
           <form action="{{route('posts.destroy',$post->id)}}" method="post" class="d-inline">
            @csrf
            @method('delete')
             <button rel='tooltip' class='btn btn-danger btn-just-icon btn-sm' data-original-title='' title='' type="submit">
                 <i class='material-icons'>delete</i>
             </button>
            
          </form> 
          <a rel='tooltip' class='btn btn-success btn-just-icon btn-sm' data-original-title='' title='' href="/posts/{{$post->id}}/edit">
              <i class='material-icons'>edit</i>
          </a>
          <a rel='tooltip' class='btn btn-secondary btn-just-icon btn-sm' data-original-title='' title='' href="/posts/{{$post->id}}"
          {{-- {{route('posts.show',$user['id'])}} --}}>
            <i class='material-icons'>visibility</i>
        </a>
          </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  <div class="d-flex justify-content-center">
    {!! $posts->links() !!}
</div>

@endsection