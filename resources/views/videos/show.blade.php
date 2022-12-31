@extends('layout')
@section('content')



<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID:</th>
      <td scope="col">{{$video->id}}</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Title:</th>
      <td>{{$video->title}}</td>
    </tr>
    <tr>
      <th scope="row">Description:</th>
      <td>{{$video->description}}</td>
    </tr>
    <tr>
      <th scope="row">Duration:</th>
      <td>{{$video->duration}}</td>
    </tr>
    <tr>
      <th scope="row">Created at:</th>
      <td>{{$video->created_at}}</td>
    </tr>
    <tr>
      <th scope="row">Updated at:</th>
      <td>{{$video->updated_at}}</td>
    </tr>
    <tr>
      <th scope="row">Uploader:</th>
      <td>{{$video->user->name}}</td>
    </tr>
    <tr>
      <th scope="row">Likes:</th>
      <td>{{ $video->likes()->count() }}</td>
    </tr>
    <tr>
      <th scope="row">Comments:</th>
      <td>{{ $video->comments()->count() }}</td>
    </tr>
    <tr>
      <th scope="row">URL:</th>
      <td>{{$video->path}}</td>
    </tr>
    <tr>
      <th scope="row">Thumbnail:</th>
      <td>{{$video->thumbnail}}</td>
    </tr>
  </tbody>
</table>



@endsection