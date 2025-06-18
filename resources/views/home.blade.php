{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}


@extends('layouts.front')

@section('content')
  {{-- Looping over this <div> --}}
  {{-- <div class="d-flex justify-content-end">
    {{ $posts->links() }}
  </div> --}}

  @foreach ($posts as $post)
    <div class="post-preview">
      <a href="{{ route('home.post', ['post' => $post->id]) }}">
        <h3 class="post-title">
          {{ $post->title }}
        </h3>
        <h4 class="post-subtitle">
          {{-- {{ $post->body }} --}}
          {{ Illuminate\Support\Str::words($post->body, 2, '...') }}
        </h4>
      </a>
      <p class="post-meta">Posted by
        <a href="#">{{ $post->user->name }}</a>
        {{-- on {{ Carbon\Carbon::parse($post->created_at)->format('m-Y') }} --}}
        on {{ $post->created_at->format('m-Y') }}
      </p>
    </div>
    <hr>
  @endforeach


  <div class="d-flex justify-content-end">
    {{ $posts->links() }}
  </div>
  {{-- <!-- Pager --> --}}
  {{-- {{ gettype($posts->currentPage()) }} --}}

  @if ($posts->currentPage() === 1)
    <div class="clearfix">
      <a class="btn btn-primary float-right" href="{{ $posts->nextPageUrl() }}">Newer Posts &rarr;</a>
      {{-- @elseif (!$posts->hasMorePages()) --}}
    @elseif ($posts->currentPage() === $posts->lastPage())
      <h3>You have reached the maximum pages!</h3>
      <a class="btn btn-primary float-left" href="{{ $posts->previousPageUrl() }}">&larr; Older Posts</a>
    @else
      <a class="btn btn-primary float-left" href="{{ $posts->previousPageUrl() }}">&larr; Older Posts</a>
      <a class="btn btn-primary float-right" href="{{ $posts->nextPageUrl() }}">Newer Posts &rarr;</a>
    </div>
  @endif
@endsection
