@extends('layouts.front')

@section('content')
<br>
    <div class="container">
        <br>
        <br>
        <br>
        <div class="row">
            <div class="col-md-4">
              @if ($author->image ==null)
              <img src="{{ asset('images/avatar.png') }}" class="img-fluid "> 
              @else 
              <img src="{!! $author->image !!}" class="img-fluid "> 
              @endif
               
            </div>
           

            <div class="col-md-8">
                <div class="card mt-2  ">
                  <div class="card-header coltitle">
                   <h1 class="text-center textotitle">{!! $author->name !!}</h1> 
                  </div>
                  <div class="card-body">
                    <blockquote class="blockquote mb-0">
                      <p>{!! $author->bio!!}</p>
                      <footer class="blockquote-footer"><cite title="Source Title">{!! $author->name !!}</cite></footer>
                    </blockquote>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <br>
@endsection