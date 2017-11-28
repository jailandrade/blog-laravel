@extends ('layout.master')

@section ('content')
  <div>
    <h1>{{ $post->title }}</h1>
  
    {{ $post->body }}
  </div>
@endsection
