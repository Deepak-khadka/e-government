@extends('layouts.app')

@section('content')

    @if(app()->environment('local') && $errors->any())
        <br>
        <pre style="color: red;">{!! implode('', $errors->all('<code>:message</code> <br>')) !!}</pre>
    @endif

    <center>
              <h1> Welcome to the E-तथ्यांक</h1>
          </center>

    @livewire('comment-form')

@endsection
