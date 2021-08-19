
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profil</title>
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/awesome.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}" />
    <script src="{{url('assets/js/jquery-3.5.1.js')}}"></script>
    <script src="{{url('assets/js/owl.carousel.min.js')}}"></script>
    <link rel="stylesheet" href="{{url('assets/css/owl.carousel.min.css')}}">
    <script src="{{url('assets/js/sweetalert2.js')}}"></script>
    <script src="{{url('assets/js/selectize.min.js')}}"></script>
    <link rel="stylesheet" href="{{url('assets/css/selectize.bootstrap3.min.css')}}" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
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
        <section id="about" class="about">
            <div class="section-title">
                <h2 class="mt-5">Profil</h2>
                <p>Kenali Kandidatmu Sebelum memilih</p>
            </div>

<div class="row">
                <div class="col-lg-4">
                    <img src="{{ url('storage').'/'.$candidate->avatar }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-8 pt-4 pt-lg-0 content">
                    <div class="row">
                        <div class="col-lg-9">
                            <ul>
                                <li style="list-style: disc outside none; display: list-item; margin-left: 1em;">
                                    <strong> Nama Lengkap :</strong>
                                    <span>{{$candidate->name}}</span></li>
                                <li style="list-style: disc outside none; display: list-item; margin-left: 1em;">
                                    <strong> Komunitas :</strong>
                                    <span>{{\DB::table('community')->where('id', $candidate->community_id)->first()->name}}</span>
                                </li>
                                <li style="list-style: disc outside none; display: list-item; margin-left: 1em;">
                                    </i>
                                    <strong> Alamat :</strong>
                                    <span>{{$candidate->alamat}}</span></li>
                                <li style="list-style: disc outside none; display: list-item; margin-left: 1em;">
                                    </i>
                                    <strong>Tempat/Tanggal Lahir :</strong>
                                    <span>{{$candidate->tempatlahir}}, {{$candidate->tanggallahir}}</span></li>
                                <li style="list-style: disc outside none; display: list-item; margin-left: 1em;">
                                    </i>
                                    <strong>Jenis Kelamin :</strong>
                                    <span>{{$candidate->gender}}</span></li>
                                <li style="list-style: disc outside none; display: list-item; margin-left: 1em;">
                                    </i>
                                    <strong>Telepon :</strong>
                                    <span>{{$candidate->user_phone}}</span></li>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="section-title mt-5">
            <h2>Visi</h2>
            <p>{{$candidate->visi}}</p>
        </div>
        
        <div class="section-title mt-5">
            <h2>Misi</h2>
            <p>{{$candidate->misi}}</p>
        </div>


        <center>
            <button id="click" type="button" value="{{$candidate->id}}" class="btn btn-outline-warning mt-5 mb-5"
                style="color:white; background-color: orangered;">Vote</button>
            <input type="hidden" name="candidate_id" id="candidate_id" type="text" value="{{$candidate->id}}">
        </center>
        <script src="{{url('assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{url('assets/js/script.js')}}"></script>
    </div>
</body>

</html>
