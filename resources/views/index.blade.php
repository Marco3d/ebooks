@extends('layouts.front')

@section('content')
<br>

    <div class="text-center mt-sm-5">
             <h2>Últimos Libros</h2>
             <p>La mejor colección literaria de la Red.</p>
     </div>


     <div class="container">
      <div class="row">
  
        @foreach($books as $book)
                   
        <div class="col-md-4">
            
          <div class="card">
               @if ($book->cover==null)
                  <img class="card-img-top" src="{{ asset('images/book.jpg') }}" width="300" height="300" >
               @else
                <img class="card-img-top " src="{{ $book->cover}}" alt="{{ $book->title }}" width="300" height="300" >
               @endif
        
            
            
            
            <div class="card-body">
              <h5 class="card-title">{{ $book->title }}</h5>
                    <p class="card-text">{!!substr($book->review, 0,150)!!}...</p>

                    <a href="{{ route('sbook', $book->id) }}" class="btn btn-primary"><i class="fas fa-book-reader"></i> Más información</a>
              
            </div>
          </div>

        </div>
             
        @endforeach
  

      </div>
         <a href="" class="btn btn-author text-center">MÁS LIBROS</a>
     </div>
  <br>




  <div class="seller">

       <div class="text-center ">
         <br>
          <h2>Últimos autores</h2>
           <p>Grandes escritores de la literatura universal</p>
       </div>
          

   
  <div class="container">
    <div class="row">
     
       
       @foreach ($authors as $author)
        
       
      <div class="col-md-4">
        <div class="card">
          <div class="text-center">
            @if ($author->image==null)
                <img class="avatar" src="{{ asset('images/avatar.png') }}" alt="">
              @else
                <img class="avatar" src="{{ $author->image}}" alt="">
            @endif
          </div>
          <div class="card-body">
           <h5 class="card-title text-danger text-center">{{ $author->name}} </h5>
                   <p class="card-text ">{!!substr($author->bio, 0,150)!!}..</p>
          </div>
          <div class="card-footer text-center">
            <a href="{{ route('sauthor', $author->id) }}" class="btn btn-author"><i class="fas fa-book-reader"></i> Más información</a>
          </div>
        </div>
      </div>

    @endforeach
  
    </div>
     <a href="" class="btn btn-primary text-center">MÁS AUTORES</a>
  </div>
    <br>
@endsection()