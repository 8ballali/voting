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
                        <a class="nav-link" href="{{url('e-vote/user/quick')}}">Quick Count</a>
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
        <section style="padding-top: 30px">
            <div class="brand-carousel section-padding owl-carousel mt-5 pt-5">
                <div class="iklan">
                    <img src="{{url('assets/images/whatsapp.png')}}">
                </div>
                <div class="iklan">
                    <img src="{{url('assets/images/instagram.png')}}">
                </div>
                <div class="iklan">
                    <img src="{{url('assets/images/line.png')}}">
                </div>
                <div class="iklan">
                    <img src="{{url('assets/images/skype.png')}}">
                </div>
                <div class="iklan">
                    <img src="{{url('assets/images/telegram.png')}}">
                </div>
            </div>
        </section>
    </div>

    @foreach ($poling as $p)
    <section style="margin-top: -80px">
        <div class="section-title">
            <h2 class="">{{$p->title}}</h2>
            <p id="demo"></p>
                <div class="countdown">
                  <div class="bloc-time hours" data-init-value="23">
                    <span class="count-title">Hours</span>
                    <div class="figure hours hours-1">
                      <span class="top">2</span>
                      <span class="top-back">
                        <span>2</span>
                      </span>
                      <span class="bottom">2</span>
                      <span class="bottom-back">
                        <span>2</span>
                      </span>
                    </div>
              
                    <div class="figure hours hours-2">
                      <span class="top">4</span>
                      <span class="top-back">
                        <span>4</span>
                      </span>
                      <span class="bottom">4</span>
                      <span class="bottom-back">
                        <span>4</span>
                      </span>
                    </div>
                  </div>
              
                  <div class="bloc-time min" data-init-value="0">
                    <span class="count-title">Minutes</span>
              
                    <div class="figure min min-1">
                      <span class="top">0</span>
                      <span class="top-back">
                        <span>0</span>
                      </span>
                      <span class="bottom">0</span>
                      <span class="bottom-back">
                        <span>0</span>
                      </span>        
                    </div>
              
                    <div class="figure min min-2">
                     <span class="top">0</span>
                      <span class="top-back">
                        <span>0</span>
                      </span>
                      <span class="bottom">0</span>
                      <span class="bottom-back">
                        <span>0</span>
                      </span>
                    </div>
                  </div>
              
                  <div class="bloc-time sec" data-init-value="0">
                    <span class="count-title">Seconds</span>
              
                      <div class="figure sec sec-1">
                      <span class="top">0</span>
                      <span class="top-back">
                        <span>0</span>
                      </span>
                      <span class="bottom">0</span>
                      <span class="bottom-back">
                        <span>0</span>
                      </span>          
                    </div>
              
                    <div class="figure sec sec-2">
                      <span class="top">0</span>
                      <span class="top-back">
                        <span>0</span>
                      </span>
                      <span class="bottom">0</span>
                      <span class="bottom-back">
                        <span>0</span>
                      </span>
                    </div>
                  </div>
              </div>
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

    <script src="{{url('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('assets/js/script.js')}}"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js'></script><script  src="./script.js"></script>
</body>

</html>
