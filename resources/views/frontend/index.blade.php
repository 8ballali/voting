<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="shortcut icon" href="{{url('assets/images/site-removebg.png')}}" type="image/png">
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/awesome.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}" />
    <script src="{{url('assets/js/jquery-3.5.1.js')}}"></script>
    <script src="{{url('assets/js/owl.carousel.min.js')}}"></script>
    <link rel="stylesheet" href="{{url('assets/css/owl.carousel.min.css')}}">

</head>

<body>
    <!-- navigasi -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top"
        style="padding-bottom:0px; padding-top:0px">
        <div class="container">
            <a class="navbar-brand" href="{{url('e-vote/user')}}"><img src="{{url('assets/images/kosmos.png')}}"
                    width="100" height="100" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-right" id="navbarText">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <!-- Display the countdown timer in an element -->

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/e-vote/user/')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('e-vote/user/quick')}}">Quick Count</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('e-vote/user/syarat')}}">Syarat</a>
                    </li>
                    <li class="nav-item">
                        {{-- <a class="nav-link" href="{{url('e-vote/user/registrasi')}}">Registrasi</a> --}}
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">
                            {{ __('Login') }}
                        </a>
                    </li>
                    @auth

                    <li class="nav-item">
                        <div class=" " aria-labelledby="navbarDropdown">
                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <!--Kandidat Kosong-->
        @if(!@$poling[0]->candidate->isNotEmpty())
        <div class="container-fluid banner" style="margin-top:50px ">
            <div class="container text-center">
                <h4 class="display-4 mt-5 pt-5">Selamat Datang</h4>
                <h4 class="display-8">Pemilu Ketua Kosmos</h4>
                <a href="{{url('e-vote/user/registrasi')}}">
                    <button type="button" class="btn btn-danger btn-lg mt-2">
                        Registrasi
                    </button>
                </a>
            </div>
        </div>
        @endif
        <!--Kandidat-->
        <!--Iklan-->
        <section style="padding-top: 50px">
            <div class="brand-carousel owl-carousel mt-5 pt-5">
                @foreach ($sponsor as $s)
                <div class="img">
                    <img value="{{$s->id}}" src="{{ url('storage').'/'.$s->file }}"alt="">
                </div>
                @endforeach
            </div>
    </div>
    </div>
    </section>
    @foreach ($poling as $p)
    <section style="margin-top: -80px">
        <div class="section-title">
            <h2 class="">{{$p->title}}</h2>
            <div class="countdown">
                <div id="countdown"></div>
            </div>
    </section>
    <section style="margin-top: -80px">
        <div class="slider owl-carousel">
            @foreach ($p->candidate as $c)
            <div class="card">
                <div class="img">
                    <a href="{{url('e-vote/user/candidate/').'/'.$c->id}}"><img
                            src="{{ url('storage').'/'.$c->avatar }}" alt=""></a>
                </div>
                <div class="content">
                    <div class="title">
                        {{$c->name}}
                    </div>
                    <div class="sub-title">
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    @endforeach

    <!--Logo-->
    <section style="padding-bottom: 30px">
        <div class="section-title" style="margin-top: -50px">
            <h2>Partisipan</h2>
        </div>
        <div class="brand-carousel section-padding owl-carousel" style="margin-top: -10px">
            <div class="single-logo">
                <img src="{{url('assets/images/logo1-removebg-preview.png')}}" width="100" height="110"
                    style="border-radius: 50%;" alt="">
            </div>
            <div class="single-logo">
                <img src="{{url('assets/images/logo2.jpg')}}" width="100" height="110" style="border-radius: 50%;"
                    alt="">
            </div>
            <div class="single-logo">
                <img src="{{url('assets/images/logo4-removebg-preview.png')}}" width="100" height="110"
                    style="border-radius: 50%;" alt="">
            </div>
            <div class="single-logo">
                <img src="{{url('assets/images/logo5-removebg-preview.png')}}" width="100" height="110"
                    style="border-radius: 50%;" alt="">
            </div>
            <div class="single-logo">
                <img src="{{url('assets/images/logo6-removebg-preview.png')}}" width="100" height="110"
                    style="border-radius: 50%;" alt="">
            </div>
            <div class="single-logo">
                <img src="{{url('assets/images/logo7-removebg-preview.png')}}" width="100" height="110"
                    style="border-radius: 50%;" alt="">
            </div>
        </div>
    </section>
    </div>

    <!-- Footer -->
    <footer>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 footer-copyright">
                        &copy; Copyright 2021 by <a href="https://can.co.id/">Can Creative</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    @foreach ($poling as $p)
    <script>
        // set the date we're counting down to
        var target_date = new Date("{{$p->stop_at}}").getTime();
        var start_date = new Date("{{$p->start_at}}").getTime();
        // variables for time units
        var days, hours, minutes, seconds;

        // get tag element
        var countdown = document.getElementById('countdown');

        // update the tag with id "countdown" every 1 second
        var x = setInterval(function () {

            // find the amount of "seconds" between now and target
            var current_date = new Date().getTime();

            var seconds_left = (target_date - current_date) / 1000;

            // do some time calculations
            days = parseInt(seconds_left / 86400);
            seconds_left = seconds_left % 86400;

            hours = parseInt(seconds_left / 3600);
            seconds_left = seconds_left % 3600;

            minutes = parseInt(seconds_left / 60);
            seconds = parseInt(seconds_left % 60);

            // format countdown string + set tag value
            countdown.innerHTML = '<span class="days">' + days +
                ' <label>Days</label></span> <span class="hours">' + hours +
                ' <label>Hours</label></span> <span class="minutes">' +
                minutes + ' <label>Minutes</label></span> <span class="seconds">' + seconds +
                ' <label>Seconds</label></span>';

                if (current_date <= start_date) {
                clearInterval(x);
                countdown.innerHTML = '<span class="days">' + 0 +
                    ' <label>Days</label></span> <span class="hours">' + 0 +
                    ' <label>Hours</label></span> <span class="minutes">' +
                    0 + ' <label>Minutes</label></span> <span class="seconds">' + 0 +
                    ' <label>Seconds</label></span>';

            }

            if (seconds_left <= 0) {
                clearInterval(x);
                countdown.innerHTML = '<span class="days">' + 0 +
                    ' <label>Days</label></span> <span class="hours">' + 0 +
                    ' <label>Hours</label></span> <span class="minutes">' +
                    0 + ' <label>Minutes</label></span> <span class="seconds">' + 0 +
                    ' <label>Seconds</label></span>';

            }
        }, 1000);

    </script>
    @endforeach
    <script src="{{url('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('assets/js/script.js')}}"></script>
</body>

</html>
