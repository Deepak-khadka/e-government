@extends('admin.layouts.master')
@section('content')
    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    @include('admin.layouts.includes.breadcrumb',['base'=>'municipality','title'=>'municipality','panel'=>'municipality'])
                    <div class="ibox-content">
                         {!! Form::open(['route' => 'admin.municipality.store', 'method' => 'post']) !!}
                            @includeIf('admin.municipality.includes.form')
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('admin.layouts.includes.copyright-section')
@endsection
