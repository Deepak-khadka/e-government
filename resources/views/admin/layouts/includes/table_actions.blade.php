<td>
    @can($base['permission_suffix'].'_index')
    <a href="{{ route($base['base_route'].'.show', $row->id) }}" class="btn btn-xs btn-primary" title="Show">
        <i class="fa fa-eye"></i>
    </a>
    @endcan

    @can($base['permission_suffix'].'_edit')
    <a href="{{ route($base['base_route'].'.edit', $row->id) }}" class="btn btn-xs btn-success" title="Edit">
        <i class="fa fa-edit"></i>
    </a>
    @endcan

    @can($base['permission_suffix'].'_destroy')
    <button class="btn btn-xs btn-danger" title="Delete">
        <i class="fa fa-trash"></i>
    </button>
    @endcan
    {!! Form::open(['url' => route($base['base_route'].'.destroy', $row->id), 'method' => 'delete']) !!}
    {!! Form::close() !!}

</td>

