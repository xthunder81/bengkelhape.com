<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Title --}}
    <title> @yield('titlePage')BengkelHape.com</title>

    {{-- CSS Script --}}
    <!-- Font Awesome -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset ('fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset ('css/owl.carousel.min.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset ('css/adminlte.min.css') }}">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset ('css/style.css') }}">

</head>

    <body>

        <div class="d-lg-flex half">
            <div class="bg order-1 order-md-2" style="background-image: url('images/bg_login.png');background-size: cover;" ></div>

            <div class="contents order-2 order-md-1">

                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-7">
                            @if(Session::has('pesan'))
                            <p class="alert alert-{{ Session::get('jenis') }}">{{ Session::get('pesan') }}</p>
                            @endif
                            <h3>Login to <strong>Admin</strong></h3>
                            <p></p>
                            <form action="{{ route ('admin.prosesLogin') }}" method="post">
                                @csrf
                                <div class="form-group first">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" placeholder="Username" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                                </div>
                                <div class="form-group last mb-3">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" placeholder="Password" name="password" required autocomplete="password" autofocus>
                                </div>

                                <div class="d-flex mb-5 align-items-center">
                                    <label class="control control--checkbox mb-0" for="remember"><span class="caption">Remember me</span>
                                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}/>
                                        <div class="control__indicator"></div>
                                    </label>
                                    <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>
                                </div>

                                <input type="submit" value="Log In" class="btn btn-block btn-primary">

                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>


        {{-- JS Script --}}
        <!-- Bootstrap 4 -->
        <script src="{{ asset ('js/jquery-3.3.1.min.js') }}"></script>
        {{-- <script src="{{ asset ('js/popper.min.js') }}"></script> --}}
        <script src="{{ asset ('js/adminlte.js') }}"></script>
        <script src="{{ asset ('js/main.js') }}"></script>

    </body>

</head>
</html>
