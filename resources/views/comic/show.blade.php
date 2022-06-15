@extends('layout.base')
@section('pageTitle','DC Comics  - Book')

@section('mainContent')
<h1 class="text-center">{{$book->title}}</h1>
<div class="container justify-content-center">
   <img src="{{$book->thumb}}" alt="{{$book->title}}">
   <p>{{$book->description}}</p>
</div>
@endsection