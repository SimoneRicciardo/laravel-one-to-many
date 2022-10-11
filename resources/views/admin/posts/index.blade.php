@extends('layouts.app')

@section('content')

    <div class="container">
        <a href="{{route('admin.posts.create')}}" class="btn btn-primary">Create new post</a>
        <table class="table table-striped">
            <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Title</th>
                  <th scope="col">Slug</th>
                  <th scope="col">Action</th>
                  <th scope="col">Category</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{$post->id}}</th>
                        <td>{{$post->title}}</td>
                        <td>{{$post->slug}}</td>
                        <td>
                            <a href="{{route('admin.posts.show', $post->id)}}" class="btn btn-primary">Show</a>
                            <a href="{{route('admin.posts.edit', $post->id)}}" class="btn btn-warning">Edit</a>
                            <form action="{{route('admin.posts.destroy', ['post'=>$post])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">DELETE</button>
                              </form>
                        </td>
                        <td> {{($post->category)?$post->category->name: '-'}}</td>
                    </tr>
                @endforeach
              </tbody>
        </table>
    </div>

@endsection
