@extends('admin.layouts.master')
@section('content')
    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    @include('admin.layouts.includes.breadcrumb',['base'=>'population','title'=>'population','panel'=>'population'])
                    <div class="ibox-content">
                    {!! Form::model($data['population'], ['route' => [$base['base_route'].'.update',$data['population']->id ],
                             'method' => 'put']) !!}
                         {!! Form::hidden('id', $data['population']->id) !!}
                        @includeIf($base['partial'].'.form')
                     {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('admin.layouts.includes.copyright-section')
@endsection
