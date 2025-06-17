@extends('layouts.admin')


@section('content')
  <h4 class="p-3">Posts index page</h4>

  <div class="row">
    <div class="card mb-4">
      <div class="card-header">
        <i class="fas fa-table me-1"></i>
        DataTable Example
      </div>
      <div class="card-body">
        {{-- @dd($posts) --}}
        <table id="datatablesSimple">
          <thead>
            <tr>
              <th>Id</th>
              <th>User name</th>
              <th>Title</th>
              <th>Comment</th>
              <th>Created at</th>
              <th>Updated at</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Id</th>
              <th>User name</th>
              <th>Title</th>
              <th>Comment</th>
              <th>Created at</th>
              <th>Updated at</th>
            </tr>
          </tfoot>
          <tbody>
            @foreach ($posts as $post)
              <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->user->name }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ count($post->comments) . ' Comments' }}</td>
                <td>{{ Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</td>
                <td>{{ Carbon\Carbon::parse($post->updated_at)->diffForHumans() }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
