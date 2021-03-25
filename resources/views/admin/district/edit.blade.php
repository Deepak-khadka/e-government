@extends('admin.layouts.master')
@section('content')
    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    @include('admin.layouts.includes.breadcrumb',['base'=>'district','title'=>'district','panel'=>'district','id'=>$data['district']->id])
                    <div class="ibox-content">
                    {!! Form::model($data['district'], ['route' => ['admin.district.update',$data['district']->id ],
                             'method' => 'put']) !!}
                         {!! Form::hidden('id', $data['district']->id) !!}
                        @includeIf('admin.district.includes.form')
                     {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('admin.layouts.includes.copyright-section')
@endsection
