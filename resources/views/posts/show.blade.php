@extends ('layout.master')

@section ('content')
  <div>
    <h1>{{ $post->title }}</h1>
  
    {{ $post->body }}

    <div class="comments">
      <ul class="list-group">
        @foreach ($post->comments as $comment)
          <li class="list-group-item">
            <strong>{{ $comment->created_at->diffForHumans() }}: &nbsp;</strong
            {{ $comment->body }}
          </li>
        @endforeach
      </ul>
    </div>

    <hr>

    <div class="card">
      <div class="card-block">
        <form method="POST" action="/posts/{{$post->id}}/comments">
          {{ csrf_field() }}
          <div class="form-group">
            <textarea name="body" placeholder="Your comment here..."></textarea>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Comment</button>
          </div>
        </form>

        @include ('layout.errors')
      </div>
    </div>
  </div>
@endsection
