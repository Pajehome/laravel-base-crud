@extends('layout.base')
@section('pageTitle','DC Comics  - Home')

@section('mainContent')
<h1 class="text-center">DC Comics</h1>

<table class="table">
    <thead>
      <tr>
        <th scope="col">Title</th>
        <th scope="col">Type</th>
        <th scope="col">Date</th>
        <th scope="col">Series</th>
        <th scope="col">Price</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($comics as $comic)
      <tr>
        <td><a href="{{route('comic.show', $comic->id)}}">{{$comic->title}}</a></td>
        <td>{{$comic->type}}</td>
        <td>{{$comic->sale_date}}</td>
        <td>{{$comic->series}}</td>
        <td>{{$comic->price}}</td>
      </tr>
       @endforeach
    </tbody>
  </table>
@endsection