@extends('layouts.app')
@section('title')
    <title>Category Directory</title>
@endsection
@section('content')
    <h1 class='text-center my-5'> Category Directory </h1>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card card-default">
          <div class="card-header">
            Categories
          </div>
          <div class="card-body">
            <ul class="list-group">
              @foreach($categories as $category)
                <li class="list-group-item"><a href="/categories/{{$category->id}}">{{ $category->name }}</a></td>
                <a class="btn btn-info" href="/categories/{{$category->id}}/edit">Edit<a>
                <a class="btn btn-danger" href="/categories/{{$category->id}}/delete">Delete<a>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
@endsection