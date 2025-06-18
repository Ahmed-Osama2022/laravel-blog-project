@extends('layouts.front')

@section('content')
  {{ $post === null ? '' : '' }}

  @if ($post === null)
    {{-- <h1 class="text-danger border-left border-danger">Post not found</h1> --}}
    <h1 class="text-danger">404
      <span class="text-danger border-left border-danger px-2"></span>
      <span class="text-danger">
        Post not found
      </span>
    </h1>
  @else
    <div class="post-heading">
      <h1>{{ $post->title ?? 'Not Found' }}</h1>
      <h2 class="subheading">{{ $post->title ?? 'Not Found' }}</h2>
      <span class="meta">Posted by
        <a href="#">{{ $post->user->name ?? 'Error' }}</a>
        on August 24, 2019</span>
    </div>
  @endif
@endsection
