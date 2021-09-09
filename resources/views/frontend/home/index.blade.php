@extends('layouts.app')

@push('css')
    <link href="{{asset('assets/admin/css/style.css')}}" rel="stylesheet">
@endpush
@section('content')

    @if(app()->environment('local') && $errors->any())
        <br>
        <pre style="color: red;">{!! implode('', $errors->all('<code>:message</code> <br>')) !!}</pre>
    @endif

    <center>
              <h1> Welcome to the E-तथ्यांक</h1>
          </center>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-6">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Job Status By Provinces</h5>
                    </div>
                    <div class="ibox-content">
                        <div>
                            <canvas id="barChart" height="140"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Overall Education Level</h5>

                    </div>
                    <div class="ibox-content">
                        <div>
                            <canvas id="doughnutChart" height="140"></canvas>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@push('js')
    <script src="{{asset('assets/admin/js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{ asset('assets/admin/js/demo/chart.min.js') }}"></script>
    <script>
        var barData = {
            labels: ["Province-1", "Province-2", "Province-3", "Province-4", "Province-5", "Province-6"],
            datasets: [
                {
                    label: "Employment",
                    backgroundColor: 'rgba(220, 220, 220, 0.5)',
                    pointBorderColor: "#fff",
                    data: [
                        @foreach($data['employment'] as $employment)
                            {{ $employment."," }}
                            @endforeach
                    ]
                },
                {
                    label: "Unemployment",
                    backgroundColor: 'rgba(26,179,148,0.5)',
                    borderColor: "rgba(26,179,148,0.7)",
                    pointBackgroundColor: "rgba(26,179,148,1)",
                    pointBorderColor: "#fff",
                    data: [
                        @foreach($data['unemployment'] as $unemployment)
                            {{ $unemployment."," }}
                            @endforeach
                    ]
                }
            ]
        };

        var barOptions = {
            responsive: true
        };

        var ctx2 = document.getElementById("barChart").getContext("2d");
        new Chart(ctx2, {type: 'bar', data: barData, options:barOptions});

        var doughnutData = {
            labels: ["Primary","Lower","Secondary","HSEB", "Bachelor", "Master", "PHD" ],
            datasets: [{
                data: [
                    @foreach($data['education_level'] as $education)
                        {{ $education."," }}
                        @endforeach
                ],
                backgroundColor: ["#80e5d0","#d36868","#b5b8cf", "#165373", "#0943FF", "#3592FD", "#73333F"]
            }]
        } ;


        var doughnutOptions = {
            responsive: true
        };


        var ctx4 = document.getElementById("doughnutChart").getContext("2d");
        new Chart(ctx4, {type: 'doughnut', data: doughnutData, options:doughnutOptions});
    </script>
@endpush
