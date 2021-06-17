<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/awesome.css">
    <link rel="stylesheet" href="assets/css/style.css" />
    <script src="assets/js/jquery-3.5.1.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
</head>

<body>
    <!-- navigasi -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/"><img src="images/kosmos.png" width="80" height="60" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-right" id="navbarText">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/syarat">Syarat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/registrasi">Registrasi</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <!--Kandidat-->
        @foreach ($poling as $p)
        <section>
            <div class="section-title mt-5 pt-5">
                <h2 class="mt-5">{{$p->title}}</h2>
            </div>
            <div class="slider owl-carousel mt-5 pt-5">
                @foreach ($p->candidate as $c)
                <div class="card">
                    <div class="img">
                        <a href="{{url('visi1')}}"><img src="images/satu.jpg" alt=""></a>
                    </div>
                    <div class="content">
                        <div class="title">
                            {{$c->name}}
                        </div>
                        <div class="sub-title">
                            {{\DB::table('community')->where('id', \App\User::find($c->user_id)->community_id)->first()->name}}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
        @endforeach

        <!--Logo-->
        <section>
            <div class="section-title mt-5 pt-5">
                <h2 class="mt-5">Partisipan</h2>
            </div>
            <div class="brand-carousel section-padding owl-carousel mt-5">
                <div class="single-logo">
                    <img src="images/logo1-removebg-preview.png" width="100" height="110" style="border-radius: 50%;"
                        alt="">
                </div>
                <div class="single-logo">
                    <img src="images/logo4-removebg-preview.png" width="100" height="110" style="border-radius: 50%;"
                        alt="">
                </div>
                <div class="single-logo">
                    <img src="images/logo5-removebg-preview.png" width="100" height="110" style="border-radius: 50%;"
                        alt="">
                </div>
                <div class="single-logo">
                    <img src="images/logo6-removebg-preview.png" width="100" height="110" style="border-radius: 50%;"
                        alt="">
                </div>
                <div class="single-logo">
                    <img src="images/logo7-removebg-preview.png" width="100" height="110" style="border-radius: 50%;"
                        alt="">
                </div>
                <div class="single-logo">
                    <img src="images/kosmos.png" width="100" height="110" style="border-radius: 50%;" alt="">
                </div>
            </div>
        </section>
    </div>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>
