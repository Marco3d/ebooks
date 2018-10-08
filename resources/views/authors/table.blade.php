<table class="table table-responsive" id="authors-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Bio</th>
        <th>Image</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($authors as $author)
        <tr>
            <td>{!! $author->name !!}</td>
            <td>{!!substr($author->bio, 0,350) !!}</td>
            <td><img src="{!! $author->image !!}" class="img-responsive" width="150" height="150"></td>
            <td>
                {!! Form::open(['route' => ['authors.destroy', $author->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('authors.show', [$author->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('authors.edit', [$author->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
{{ $authors->links() }}