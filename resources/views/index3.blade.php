@extends('layouts.front')

@section('content')
    <div class="text-center mt-sm-5">
             <h2>Autores</h2>
            
     </div>

<br>
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
                                 <p class="card-text ">{!!substr($author->bio, 0,150)!!}...</p>
                            </div>
                            <div class="card-footer text-center">
                                <a href="{{route('sauthor',$author->id)}}" class="btn btn-author"><i class="fas fa-book-reader"></i> Más información</a>
                            </div>
                        </div>
                    </div>

               @endforeach
	

     	</div>
         {{ $authors->links() }}
     </div>
  <br>

@endsection
