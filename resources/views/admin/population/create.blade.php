@extends('admin.layouts.master')
@section('content')
    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    @include('admin.layouts.includes.breadcrumb',['base'=>'population','title'=>'population','panel'=>'population'])
                    <div class="ibox-content">
                         {!! Form::open(['route' => 'admin.population.store', 'method' => 'post']) !!}
                            @includeIf('admin.population.includes.form')
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('admin.layouts.includes.copyright-section')
@endsection
