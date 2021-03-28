@extends('admin.layouts.master')
@section('content')
    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    @include('admin.layouts.includes.breadcrumb',['base'=>'municipality','title'=>'municipality','panel'=>'municipality'])
                    <div class="ibox-content">
                    {!! Form::model($data['municipality'], ['route' => [$base['base_route'].'.update',$data['municipality']->id ],
                             'method' => 'put']) !!}
                         {!! Form::hidden('id', $data['municipality']->id) !!}
                        @includeIf($base['partial'].'.form')
                     {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('admin.layouts.includes.copyright-section')
@endsection

@push('js')
    @include('admin.layouts.includes.formValidation')
    @include('admin.population.includes.script')
@endpush
