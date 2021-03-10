@extends('admin.layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">

              @include('admin.layouts.includes.breadcrumb',['base'=>'population','title'=>'population','panel'=>'population'])

                <div class="ibox-content">

                </div>
            </div>
        </div>

         @includeIf($base['partial'].'.show_table')

    </div>
@endsection
@push('js')
@endpush
