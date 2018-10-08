<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Review Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('review', 'Review:') !!}
    {!! Form::textarea('review', null, ['class' => 'form-control','id' => 'editor']) !!}
</div>

<!-- Cover Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cover', 'Cover:') !!}
    {!! Form::file('cover') !!}
</div>
<div class="clearfix"></div>

<!-- Author Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('author_id', 'Seleccione el autor:') !!}
    {!! Form::select('author_id',$authors, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('books.index') !!}" class="btn btn-primary">Cancel</a>
</div>
