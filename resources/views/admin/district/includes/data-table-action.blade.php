<ul class="normal-actions" style="display: flex">
{{--    @can("admin.{$model}.edit")--}}
        <li>
            <a href="{{ route("admin.{$model}.edit", $data->id) }}" title="Edit"><i
                    class="fa fa-edit btn btn-primary btn-xs"></i> </a>
        </li>
{{--    @endcan--}}
{{--    @can("admin.{$model}.show")--}}
        <li>
            <a href="{{ route("admin.{$model}.show", $data->id) }}" title="Show"> <i
                    class="fa fa-eye btn btn-success btn-xs"></i> </a>
        </li>
{{--    @endcan--}}
{{--    @can("admin.{$model}.destroy")--}}
{{--        @if($data->deletable())--}}
            <li>
                <a href="javascript:void(0);" title="Delete" class="confirm-delete-row bulk_list">
                    <i class="fa fa-trash btn btn-xs btn-danger "></i>
                </a>
                {!! Form::open(['url' => route("admin.{$model}.destroy", $data->id), 'method' => 'delete']) !!}
                {!! Form::close() !!}
            </li>
{{--        @endif--}}
{{--    @endcan--}}
</ul>

