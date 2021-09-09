

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">


    <!------ Include the above in your HEAD tag ---------->

    <style type="text/css">


        body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
            background: grey !important;
        }
        .user_card {
            height: 460px;
            width: 420px;
            margin-top: auto;
            margin-bottom: auto;
            background: #f39c12;
            position: relative;
            display: flex;
            justify-content: center;
            flex-direction: column;
            padding: 10px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            -moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            border-radius: 5px;

        }
        .brand_logo_container {
            position: absolute;
            height: 170px;
            width: 170px;
            top: -75px;
            border-radius: 50%;
            background: #60a3bc;
            padding: 10px;
            text-align: center;
        }
        .brand_logo {
            height: 150px;
            width: 150px;
            border-radius: 50%;
            border: 2px solid white;
        }
        .form_container {
            margin-top: 100px;
        }
        .login_btn {
            width: 100%;
            background: #c0392b !important;
            color: white !important;
        }
        .login_btn:focus {
            box-shadow: none !important;
            outline: 0px !important;
        }
        .login_container {
            padding: 0 2rem;
        }
        .input-group-text {
            background: #c0392b !important;
            color: white !important;
            border: 0 !important;
            border-radius: 0.25rem 0 0 0.25rem !important;
        }
        .input_user,
        .input_pass:focus {
            box-shadow: none !important;
            outline: 0px !important;
        }
        .custom-checkbox .custom-control-input:checked~.custom-control-label::before {
            background-color: #c0392b !important;
        }










    </style>
</head>
<!--Coded with love by Mutiullah Samim-->
<body>
<div class="container">
    <div class="row">

    </div>
</div>
<div class="container" style="margin-top: 80px">
    <div class="row">
        <div class="container h-100">
            <div class="d-flex justify-content-center h-100">
                <div class="user_card">

                    <div class="d-flex justify-content-center">
                        <div class="brand_logo_container">
                            <img src="{{ asset('assets/admin/images/nepal.png') }}" class="brand_logo" alt="Logo">
                        </div>
                        @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>

                    <div class="d-flex justify-content-center form_container">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="container">
                                <div class="row">
                                    <div class="input-group-append">
                                        @if($setup ?? '' == null)
                                        <center>  <h1>E-तथ्यांक</h1></center>
                                        @else

                                        @endif
                                    </div>
                                </div>
                                <div class="input-group-append">
                                    <h4 style="margin-left: 15px">E-तथ्यांक ब्यवस्थापन प्रणाली</h4>

                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email Here ...">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">

                                <div class="col-md-12">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password ... ">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="d-flex justify-content-center mt-3 login_container">
                                <button type="submit" name="button" class="btn login_btn">Login</button>
                            </div>
                        </form>
                    </div>

                    <div class="mt-4">
                        <div class="d-flex justify-content-center links">
                            <a href="{{ route('reset') }}">If you are new Click Here</a>
                        </div>
                        <div class="d-flex justify-content-center links">
                            <a href="/">Go to Home Page</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-4 offset-4">

        </div>
    </div>
</div>
</body>
</html>
