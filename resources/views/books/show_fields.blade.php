<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $book->id !!}</p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{!! $book->title !!}</p>
</div>

<!-- Review Field -->
<div class="form-group">
    {!! Form::label('review', 'Review:') !!}
    <p>{!! $book->review !!}</p>
</div>

<!-- Cover Field -->
<div class="form-group">
    {!! Form::label('cover', 'Cover:') !!}
    <p><img src="{!! $book->cover !!}" class="img-responsive"></p>
</div>

<!-- Author Id Field -->
<div class="form-group">
    {!! Form::label('author_id', 'Author Id:') !!}
    <p>{!! $book->author_id !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $book->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $book->updated_at !!}</p>
</div>

