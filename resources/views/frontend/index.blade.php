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
            <div class="brand-carousel section-padding owl-carousel mt-5 pt-5">
                <div class="iklan">
                    <img src="{{url('assets/images/sponsor.png')}}">
                </div>
                <div class="iklan">
                    <img src="{{url('assets/images/sponsor.png')}}">
                </div>
                <div class="iklan">
                    <img src="{{url('assets/images/sponsor.png')}}">
                </div>
                <div class="iklan">
                    <img src="{{url('assets/images/sponsor.png')}}">
                </div>
                <div class="iklan">
                    <img src="{{url('assets/images/sponsor.png')}}">
                </div>
            </div>
        </section>
    </div>

    @foreach ($poling as $p)
    <section style="margin-top: -80px">
        <div class="section-title">
            <h2 class="">{{$p->title}}</h2>
            <div class="countdown">
                <!-- Days -->
                <div class="bloc-time days" data-init-value="7">
                    <span class="count-title">Days</span>

                    <div class="figure days days-1">
                        <span class="top">0</span>
                        <span class="top-back">
                            <span>0</span>
                        </span>
                        <span class="bottom">0</span>
                        <span class="bottom-back">
                            <span>0</span>
                        </span>
                    </div>

                    <div class="figure days days-2">
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
                <!-- Hours -->
                <div class="bloc-time hours" data-init-value="24">
                    <span class="count-title">Hours</span>

                    <div class="figure hours hours-1">
                        <span class="top">0</span>
                        <span class="top-back">
                            <span>0</span>
                        </span>
                        <span class="bottom">0</span>
                        <span class="bottom-back">
                            <span>0</span>
                        </span>
                    </div>

                    <div class="figure hours hours-2">
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
                <!-- Minutes -->
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
                <!-- Second -->
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

    @foreach ($poling as $p)
    <script>
        var Countdown = {

            // Backbone-like structure
            $el: $('.countdown'),

            // Params
            countdown_interval: null,
            total_seconds: 0,

            // Initialize the countdown  
            init: function () {
                var Today = new Date();
                var Todayday = Today
                    .getDate(); // getDay() is an integer corresponding to the day of the week: 0 for Sunday, 1 for Monday, 2 for Tuesday, and so on.
                var Todayhours = Today.getHours();
                var Todayminutes = Today.getMinutes();
                var Todayseconds = Today.getSeconds();

                var DeadLine = new Date();
                var DeadLineday = DeadLine.getDate();
                var DeadLinehours = DeadLine.getHours(); // I'm not sure why getHours() here is "loaded jangá"
                var DeadLineminutes = DeadLine.getMinutes();
                var DeadLineseconds = DeadLine.getSeconds();

                // DOM
                this.$ = {
                    days: this.$el.find('.bloc-time.days .figure'),
                    hours: this.$el.find('.bloc-time.hours .figure'),
                    minutes: this.$el.find('.bloc-time.min .figure'),
                    seconds: this.$el.find('.bloc-time.sec .figure')
                };

                // Init countdown values
                this.values = {
                    days: DeadLineday - Todayday,
                    hours: DeadLinehours - Todayhours,
                    minutes: DeadLineminutes - Todayminutes,
                    seconds: DeadLineseconds - Todayseconds
                };

                // Initialize total seconds
                // this.total_seconds = ((this.values.days * 24) + (this.values.hours * 60 * 60 + (this.values.minutes * 60))) + this.values.seconds;
                this.total_seconds = this.values.seconds + (this.values.minutes * 60) + (this.values.hours *
                    60 * 60) + (this.values.days * 24 * 60 * 60);

                // Animate countdown to the end 
                this.count();
            },

            count: function () {

                var that = this,
                    $day_1 = this.$.days.eq(0),
                    $day_2 = this.$.days.eq(1),
                    $hour_1 = this.$.hours.eq(0),
                    $hour_2 = this.$.hours.eq(1),
                    $min_1 = this.$.minutes.eq(0),
                    $min_2 = this.$.minutes.eq(1),
                    $sec_1 = this.$.seconds.eq(0),
                    $sec_2 = this.$.seconds.eq(1);

                this.countdown_interval = setInterval(function () {

                    if (that.total_seconds > 0) {

                        --that.values.seconds;

                        if (that.values.minutes >= 0 && that.values.seconds <= 0) {

                            that.values.seconds = 59;
                            --that.values.minutes;
                        } // end if

                        if (that.values.hours >= 0 && that.values.minutes <= 0) {

                            that.values.minutes = 59;
                            --that.values.hours;
                        } // end if

                        if (that.values.days >= 0 && that.values.hours <= 0) {

                            that.values.hours = 24;
                            --that.values.days;
                        } // end if

                        if (that.values.days <= 0 && that.values.hours >= 0) {

                        that.values.hours = 0;
                        that.values.days= 0;
                        }

                        // Update DOM values
                        // Days
                        that.checkDay(that.values.days, $day_1, $day_2);

                        // Hours
                        that.checkDay(that.values.hours, $hour_1, $hour_2);

                        // Minutes
                        that.checkDay(that.values.minutes, $min_1, $min_2);

                        // Seconds
                        that.checkDay(that.values.seconds, $sec_1, $sec_2);

                        --that.total_seconds;
                    } // end if(that.total_seconds > 0)
                    else {
                        clearInterval(that.countdown_interval);
                    }
                }, 1000);
            },

            animateFigure: function ($el, value) {

                var that = this,
                    $top = $el.find('.top'),
                    $bottom = $el.find('.bottom'),
                    $back_top = $el.find('.top-back'),
                    $back_bottom = $el.find('.bottom-back');

                // Before we begin, change the back value
                $back_top.find('span').html(value);

                // Also change the back bottom value
                $back_bottom.find('span').html(value);

                // Then animate
                TweenMax.to($top, 0.8, {
                    rotationX: '-180deg',
                    transformPerspective: 300,
                    ease: Quart.easeOut,
                    onComplete: function () {

                        $top.html(value);

                        $bottom.html(value);

                        TweenMax.set($top, {
                            rotationX: 0
                        });
                    }
                });

                TweenMax.to($back_top, 0.8, {
                    rotationX: 0,
                    transformPerspective: 300,
                    ease: Quart.easeOut,
                    clearProps: 'all'
                });
            },

            checkDay: function (value, $el_1, $el_2) {

                var val_1 = value.toString().charAt(0),
                    val_2 = value.toString().charAt(1),
                    fig_1_value = $el_1.find('.top').html(),
                    fig_2_value = $el_2.find('.top').html();

                if (value >= 10) {

                    // Animate only if the figure has changed
                    if (fig_1_value !== val_1) this.animateFigure($el_1, val_1);
                    if (fig_2_value !== val_2) this.animateFigure($el_2, val_2);
                } else {

                    // If we are under 10, replace first figure with 0
                    if (fig_1_value !== '0') this.animateFigure($el_1, 0);
                    if (fig_2_value !== val_1) this.animateFigure($el_2, val_1);
                }
            }
        };
        // Let's go !
        Countdown.init();

    </script>
    @endforeach
    <script src="{{url('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('assets/js/script.js')}}"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js'></script>
    <script src="./script.js"></script>
</body>

</html>
