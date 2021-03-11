@extends('admin.layouts.master')
@section('content')
    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    @include('admin.layouts.includes.breadcrumb',['base'=>'hospital','title'=>'hospital','panel'=>'hospital'])
                    <div class="ibox-content">
                         {!! Form::open(['route' => 'admin.hospital.store', 'method' => 'post']) !!}
                            @includeIf('admin.hospital.includes.form')
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('admin.layouts.includes.copyright-section')
@endsection
