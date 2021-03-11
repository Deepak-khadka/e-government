@extends('admin.layouts.master')
<link rel="stylesheet" href="{{ asset('path/to/intlTelInput.css') }}">
@section('content')
    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    @include('admin.layouts.includes.breadcrumb',['base'=>'population','title'=>'population','panel'=>'population'])
                    <div class="ibox-content">
                         {!! Form::open(['route' => 'admin.population.store', 'method' => 'post','enctype'=>'multipart/form-data','id'=>'form-validation']) !!}
                            @includeIf('admin.population.includes.form')
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('admin.layouts.includes.copyright-section')
    @include('admin.layouts.includes.dropify')

@endsection

@push('js')
    @include('admin.layouts.includes.formValidation')
    @include('admin.population.includes.script')
@endpush
