@extends('layouts.front')

@section('content')

    <div class="container">
        <br>
        <br>
        <br>
        <div class="row ">
            <div class="col-md-4">
                 @if ($book->cover==null)
                    <img class="card-img-top" src="{{ asset('images/book.jpg') }}" width="100" height="300" >
                 @else
                    <img class="card-img-top img-fluid " src="{{ $book->cover}}" alt="{{ $book->title }}" >
                 @endif
            
             
            </div>
           

            <div class="col-md-8">
                <div class="card mt-2  ">
                  <div class="card-header coltitle">
                   <h1 class="text-center textotitle">{!! $book->title !!}</h1> 
                  </div>
                  <div class="card-body">
                    <blockquote class="blockquote mb-0">
                      <p>{!! $book->review!!}</p>
                      <footer class="blockquote-footer"><cite title="Source Title">{!! $book->author->name !!}</cite></footer>
                    </blockquote>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <br>
@endsection