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
  {{-- looping over this <div> --}}
  <div class="post-preview">
    <a href="post.html">
      <h2 class="post-title">
        Man must explore, and this is exploration at its greatest
      </h2>
      <h3 class="post-subtitle">
        Problems look mighty small from 150 miles up
      </h3>
    </a>
    <p class="post-meta">Posted by
      <a href="#">Start Bootstrap</a>
      on September 24, 2019
    </p>
  </div>
  <hr>

  {{-- <!-- Pager --> --}}
  <div class="clearfix">
    <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
  </div>
@endsection
