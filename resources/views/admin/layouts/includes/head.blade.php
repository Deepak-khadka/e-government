<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

{{--    <title>@yield('title') | {{ config('app.name') }}</title>--}}
    @yield('seo_title')
    <link href="{{  asset('assets/admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/font-awesome/css/font-awesome.css' )}}" rel="stylesheet">
    <link href="{{asset('assets/admin/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('assets/admin/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/admin/css/custom.css')}}" rel="stylesheet">
    <link href="{{asset('assets/admin/css/plugins/sweetalert/sweetalert.css')}}" rel="stylesheet">
    <link href="{{asset('assets/admin/css/plugins/iCheck/custom.css')}}" rel="stylesheet">

    <!-- Select2 -->
    <link href="{{asset('assets/admin/css/plugins/select2/select2.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/admin/bootstrap3-editable-1.5.1/bootstrap3-editable/css/bootstrap-editable.css')}}" rel="stylesheet">
    <style>
        input[type="number"]::-webkit-outer-spin-button,
        input[type="number"]::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        input[type="number"] {
            -moz-appearance: textfield;
        }
    </style>

    @stack('css')

</head>
