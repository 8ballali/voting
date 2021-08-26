<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/awesome.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}" />
    <script src="{{url('assets/js/jquery-3.5.1.js')}}"></script>
    <script src="{{url('assets/js/owl.carousel.min.js')}}"></script>
    <link rel="stylesheet" href="{{url('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">
</head>

<body>
    <!-- navigasi -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{url('e-vote/user')}}"><img src="{{url('assets/images/kosmos.png')}}"
                    width="80" height="60" alt=""></a>
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
                        <a class="nav-link" href="{{url('e-vote/user/quick')}}">Quick</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('e-vote/user/syarat')}}">Syarat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('e-vote/user/registrasi')}}">Registrasi</a>
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
        <div class="container-fluid banner">
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
        <section>
            <div class="brand-carousel section-padding owl-carousel mt-5 pt-5">
                <div class="single-logo">
                    <img src="{{url('assets/images/whatsapp.png')}}" width="50" height="80" alt=""
                        style="border-radius: 50%;">
                </div>
                <div class="single-logo">
                    <img src="{{url('assets/images/instagram.png')}}" width="50" height="80" style="border-radius: 50%;"
                        alt="">
                </div>
                <div class="single-logo">
                    <img src="{{url('assets/images/line.png')}}" width="50" height="80" style="border-radius: 50%;"
                        alt="">
                </div>
                <div class="single-logo">
                    <img src="{{url('assets/images/skype.png')}}" width="50" height="80" style="border-radius: 50%;"
                        alt="">
                </div>
                <div class="single-logo">
                    <img src="{{url('assets/images/telegram.png')}}" width="50" height="80" style="border-radius: 50%;"
                        alt="">
                </div>
            </div>
        </section>
    </div>

    @foreach ($poling as $p)
    <section>
        <div class="section-title">
            <h2 class="">{{$p->title}}</h2>
            <p id="demo"></p>

            <script>
                // Set the date we're counting down to
                var countDownDate = new Date("Aug 26, 2021 00:00:00").getTime();

                // Update the count down every 1 second
                var x = setInterval(function () {

                    // Get today's date and time
                    var now = new Date().getTime();

                    // Find the distance between now and the count down date
                    var distance = countDownDate - now;

                    // Time calculations for days, hours, minutes and seconds

                    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                    // Display the result in the element with id="demo"
                    document.getElementById("demo").innerHTML = hours + "h " +
                        minutes + "m " + seconds + "s ";

                    // If the count down is finished, write some text
                    if (distance < 0) {
                        clearInterval(x);
                        document.getElementById("demo").innerHTML = "EXPIRED";
                    }
                }, 1000);

            </script>
        </div>
        <div class="slider owl-carousel mt-5 pt-5">
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
    <section>
        <div class="section-title mt-5">
            <h2 class="mt-5">Partisipan</h2>
        </div>
        <div class="brand-carousel section-padding owl-carousel mt-5">
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
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 footer-about wow fadeInUp">
                        <img class="logo-footer" src="{{url('assets/images/logo-can.png')}}" alt="logo-footer"
                            data-at2x="assets/img/logo.png">
                        <p>
                            We always looking for new and creative ideas to help you with our products in your everyday
                            work.
                        </p>
                    </div>
                    <div class="col-md-4 offset-md-1 footer-contact wow fadeInDown">
                        <h3>Contact</h3>
                        <p><i class="fas fa-map-marker-alt"></i> Jl. Sentyaki Raya No.7 Bulu Lor, Semarang</p>
                        <p><i class="fas fa-phone"></i> 0822-2332-6818</p>
                        <p><i class="fas fa-envelope"></i> hallo@can.co.id</p>
                    </div>
                    <div class="col-md-4 footer-links wow fadeInUp">
                        <div class="row">
                            <div class="col">
                                <h3>Links</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p><a class="a" href="#top-content">Home</a></p>
                                <p><a class="a" href="#">Syarat</a></p>
                            </div>
                            <div class="col-md-6">
                                <p><a class="a" href="#">Quick</a></p>
                                <p><a class="a" href="#">Registrasi</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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

    <script src="{{url('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('assets/js/script.js')}}"></script>
</body>

</html>
