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
    <script src="{{url('assets/js/sweetalert2.js')}}"></script>
    <script src="{{url('assets/js/selectize.min.js')}}"></script>
    <link rel="stylesheet" href="{{url('assets/css/selectize.bootstrap3.min.css')}}" />
</head>

<body>
    <!-- navigasi -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{url('e-vote/user/')}}"><img src="{{url('assets/images/kosmos.png')}}"
                    width="80" height="60" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-right" id="navbarText">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('e-vote/user/')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('e-vote/user/syarat')}}">Syarat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('e-vote/user/registrasi')}}">Registrasi</a>
                    </li>
                    <li class="nav-item">
                        <div class=" " aria-labelledby="navbarDropdown">
                            <a class="nav-link" href="{{ route('login') }}">
                                {{ __('Login') }}
                            </a>

                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- ======= About Section ======= -->
    <div class="container">
        <div class="section-title mt-5 pt-5">
            <h2>Syarat</h2>
        </div>
        <ul class="list-group">
            <li class="list-group-item">Berketuhanan Yang Maha Esa</li>
            <li class="list-group-item">Warga Negara Indonesia (melampirkan E-KTP)</li>
            <li class="list-group-item">Sehat Jasmani</li>
            <li class="list-group-item">Member Aktif di Club/Komunitasnya. Dibuktikan dengan Member Card / Surat
                Rekomendasi dari Ketua Club/Komunitas. </li>
            <li class="list-group-item">Mengisi dan menyerahkan Formulir Pendaftaran Calon Ketua KOSMOS</li>
            <li class="list-group-item">Berkomitmen untuk memajukan KOSMOS</li>
        </ul>
    </div>
    <script src="{{url('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('assets/js/script.js')}}"></script>
</body>

</html>