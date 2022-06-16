@extends('layout.base')
@section('pageTitle','DC Comics  - Home')

@section('mainContent')
<h1 class="text-center">DC Comics</h1>

  <div class='d-flex justify-content-center'>
     <a class='btn btn-primary' href="{{route('comic.create')}}">Nuovo</a>
  </div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Title</th>
        <th scope="col">Type</th>
        <th scope="col">Date</th>
        <th scope="col">Series</th>
        <th scope="col">Price</th>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
        @foreach ($comics as $comic)
      <tr>
        <td>{{$comic->title}}</td>
        <td>{{$comic->type}}</td>
        <td>{{$comic->sale_date}}</td>
        <td>{{$comic->series}}</td>
        <td>{{$comic->price}}</td>
        <td><a class='btn btn-success' href="{{route('comic.show', $comic->id)}}">Visualizza</a></td>
        <td><a class='btn btn-warning' href="{{route('comic.create', $comic->id)}}">Modifica</a></td>
        <td><a class='btn btn-danger' href="{{route('comic.destroy', $comic->id)}}">Elimina</a></td>
      </tr>
       @endforeach
    </tbody>
  </table>
@endsection