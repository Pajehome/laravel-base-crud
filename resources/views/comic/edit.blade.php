@extends('layouts.default')
@section('pageTitle', 'Crea fumetto')


@section('mainContent')
    <h1 class="text-center">Crea nuovo fumetto</h1>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 d-flex flex-column">

                <form action="{{ route('comic.update', $comic->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3 row justify-content-center">
                        <label for="title" class="col-sm-8 col-form-label">Title</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}">
                        </div>

                        <div class="col-sm-8">
                            <label for="description" class="col-sm-4">Description</label>
                            <textarea name="description" cols="50" rows="10" type="text" class="form-control" id="description" value="{{$comic->description}}">{{$comic->description}}
                        </textarea>
                        </div>

                        <div class="col-sm-8">
                            <label for="type" class="col-sm-4 col-form-label">Select type: </label>
                            <select type="select" class="form-control" id="type" name="type">
                                <option value="comic book" {{$comic->title == 'comic book' ? 'selected' : '' }}>Comic Book</option>
                                <option value="graphic novel" {{$comic->title == 'graphic novel' ? 'selected' : '' }}>Graphic Novel</option>
                            </select>

                        </div>

                        <div class="col-sm-8">
                            <label for="thumb" class="col-sm-4 col-form-label">Image: </label>
                            <input type="text" class="form-control" id="thumb" name="thumb" value="{{$comic->thumb}}">
                        </div>
                          <div class="col-sm-8">
                            <label for="price" class="col-sm-4 col-form-label">Price: </label>
                            <input type="text" class="form-control" id="price" name="price" value="{{$comic->price}}">
                        </div>
                           <div class="col-sm-8">
                            <label for="sales_date" class="col-sm-4 col-form-label">Sale_Date: </label>
                            <input type="text" class="form-control" id="sales_date" name="sales_date" value="{{$comic->sale_date}}">
                        </div>
                    </div>
                    <button class="btn btn-warning"><strong>Modifica</strong></button>
                </form>

            </div>
        </div>
    </div>
@endsection