@extends('layouts.front')

@section('content')
<br>
    <div class="text-center mt-sm-5">
             <h2>Biblioteca</h2>
            
     </div>


     <div class="container">
     	<div class="row">
  
     	@foreach($books as $book)
                         
              <div class="col-md-4">
                  
                <div class="card">
                     @if ($book->cover==null)
                        <img class="card-img-top" src="{{ asset('images/book.jpg') }}" width="100" height="300" >
                     @else
                      <img class="card-img-top " src="{{ $book->cover}}" alt="{{ $book->title }}" width="100" height="300" >
                     @endif
              
                  
                  
                  
                  <div class="card-body">
                    <h5 class="card-title">{{ $book->title }}</h5>
                          <p class="card-text">{!!substr($book->review, 0,150)!!}...</p>

                          <a href="{{  route('sbook',$book->id) }} " class="btn btn-primary"><i class="fas fa-book-reader"></i> Más información</a>
                    
                  </div>
                </div>

              </div>
                   
              @endforeach
        
	

     	</div>
         {{ $books->links() }}
     </div>
  <br>

@endsection
