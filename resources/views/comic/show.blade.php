@extends('layout.base')
@section('pageTitle','DC Comics  - Book')

@section('mainContent')
<h1 class="text-center">{{$comic->title}}</h1>
<div class="container justify-content-center">
   <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
   <p>{{$comic->description}}</p>
</div>
@endsection