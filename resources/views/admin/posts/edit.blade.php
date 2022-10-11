@extends('layouts.app')

@section('content')

<div class="container">
    <form action="{{route('admin.posts.update', ['post'=>$post->id])}}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title')}}" />
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="content" name="content" value="{{old('content')}}" />
            @error('content')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="category_id" class="form-label">category_id</label>
            <select name="category_id" id="category_id" class="form-select @error('category_id') is-invalid @enderror">
                <option value="">Empty</option>
                @foreach ($categories as $category)
                    <option {{(old('category_id', $post->category_id)==$category->id)?'selected':''}} value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
                @error('category_id')
                    <div  class="invalid-feedback">{{$message}}</div>
                @enderror
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>

    </form>
</div>

@endsection