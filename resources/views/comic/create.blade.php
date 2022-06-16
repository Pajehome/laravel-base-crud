@extends('layout.base')
@section('pageTitle','DC Comics  - Book')

@section('mainContent')

<h1 class="text-center">Crea nuovo fumetto</h1>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 d-flex flex-column">

                <form action="{{ route('comic.store') }}" method="POST">
                    @csrf
                    <div class="mb-3 row justify-content-center">
                        <label for="title" class="col-sm-8 col-form-label">Title</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="title" placeholder="Inserisci un titolo" name="title">
                        </div>

                        <div class="col-sm-8">
                            <label for="description" class="col-sm-4 col-form-label">Description</label>
                            <textarea name="description" type="text" cols="50" rows="10" class="form-control" id="description" placeholder="Inserisci un titolo">
                        </textarea>
                        </div>


                        <div class="col-sm-8">
                            <label for="type" class="col-sm-4 col-form-label">Select type: </label>
                            <select type="select" class="form-control" id="type" name="type">
                                <option value="comic book">Comic Book</option>
                                <option value="graphic novel">Graphic Novel</option>
                            </select>

                        </div>

                        <div class="col-sm-8">
                            <label for="thumb" class="col-sm-4 col-form-label">Image: </label>
                            <input type="text" class="form-control" id="thumb" name="thumb">
                        </div>
                          <div class="col-sm-8">
                            <label for="price" class="col-sm-4 col-form-label">Price: </label>
                            <input type="text" class="form-control" id="price" name="price">
                        </div>
                           <div class="col-sm-8">
                            <label for="sales_date" class="col-sm-4 col-form-label">Sale_Date: </label>
                            <input type="text" class="form-control" id="sales_date" name="sales_date">
                        </div>
                    </div>
                    <button class="btn btn-warning"><strong>Save</strong></button>
                </form>
            </div>
        </div>
    </div>
@endsection