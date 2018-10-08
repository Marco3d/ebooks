<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Repositories\BookRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Author;
use App\Models\Book;
use Illuminate\Support\Facades\Storage;

class BookController extends AppBaseController
{
    /** @var  BookRepository */
    private $bookRepository;

    public function __construct(BookRepository $bookRepo)
    {
        $this->bookRepository = $bookRepo;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the Book.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->bookRepository->pushCriteria(new RequestCriteria($request));
        $books = $this->bookRepository->all();
        $books = Book::orderBy('id', 'DESC')->paginate(6);
      /*  dd($books);*/

    
        return view('books.index',compact('books'));
           
    }

    /**
     * Show the form for creating a new Book.
     *
     * @return Response
     */
    public function create()
    {
        
        $authors = Author::pluck('name','id');
        return view('books.create', compact('authors'));
    }

    /**
     * Store a newly created Book in storage.
     *
     * @param CreateBookRequest $request
     *
     * @return Response
     */
    public function store(CreateBookRequest $request)
    {
        $input = $request->all();

        $book = $this->bookRepository->create($input);

        //subir imagen
        
           if($request->file('cover')){

            $path = Storage::disk('public')->put('covers',  $request->file('cover'));
            $book->fill(['cover' => asset($path)])->save();
          }  

        Flash::success('Book saved successfully.');

        return redirect(route('books.index'));
    }

    /**
     * Display the specified Book.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $book = $this->bookRepository->findWithoutFail($id);

        if (empty($book)) {
            Flash::error('Book not found');

            return redirect(route('books.index'));
        }

        return view('books.show')->with('book', $book);
    }

    /**
     * Show the form for editing the specified Book.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
         
        $authors = Author::pluck('name','id');
        $book = $this->bookRepository->findWithoutFail($id);

        if (empty($book)) {
            Flash::error('Book not found');

            return redirect(route('books.index'));
        }
        
       
        return view('books.edit',compact('book','authors'));
    }

    /**
     * Update the specified Book in storage.
     *
     * @param  int              $id
     * @param UpdateBookRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBookRequest $request)
    {
        $book = $this->bookRepository->findWithoutFail($id);

        if (empty($book)) {
            Flash::error('Book not found');

            return redirect(route('books.index'));
        }

        $book = $this->bookRepository->update($request->all(), $id);

        //actualizar imagen
        
           if($request->file('cover')){

            $path = Storage::disk('public')->put('covers',  $request->file('cover'));
            $book->fill(['cover' => asset($path)])->save();
          }  

        Flash::success('Book updated successfully.');

        return redirect(route('books.index'));
    }

    /**
     * Remove the specified Book from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $book = $this->bookRepository->findWithoutFail($id);

        if (empty($book)) {
            Flash::error('Book not found');

            return redirect(route('books.index'));
        }

        $this->bookRepository->delete($id);

        Flash::success('Book deleted successfully.');

        return redirect(route('books.index'));
    }
}
