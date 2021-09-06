<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registrasi</title>
    <link rel="shortcut icon" href="{{url('assets/images/site-removebg.png')}}" type="image/png">
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

    <div id="body">
        <div class="container">
            <div class="section-title" style="padding-top: 150px">
                <h2>Registrasi</h2>
            </div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="content">
                <form action="{{url('e-vote/user/candidate/store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="user-details">
                        <div class="input-box">
                            <span class="details">Nama Lengkap</span>
                            <input type="text" name="name" id="name" placeholder="Enter your name" required
                                oninvalid="this.setCustomValidity('data tidak boleh kosong')"
                                oninput="setCustomValidity('')">
                        </div>
                        <div class="input-box">
                            <span class="details">Asal Klub</span>
                            <div class="custom_select">
                                <select id="select-state" name="community_id">
                                    <option value="">Select a Club</option>
                                    @foreach (\DB::table ('community')->get() as $c )
                                    <option value="{{$c->id}}">{{$c->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="input-box">
                            <span class="details">Tempat lahir</span>
                            <input type="text" id="place" name="tempatlahir" placeholder="Enter your birthplace"
                                required oninvalid="this.setCustomValidity('data tidak boleh kosong')"
                                oninput="setCustomValidity('')">
                        </div>
                        <div class="input-box">
                            <span class="details">Tanggal Lahir</span>
                            <input type="date" id="date" min="1971-01-01" max="2000-12-31" name="tanggallahir"
                                placeholder="Enter your birthdate" required
                                oninvalid="this.setCustomValidity('data tidak boleh kosong')"
                                oninput="setCustomValidity('')">
                        </div>
                        <div class="input-box">
                            <span class="details">Telepon</span>
                            <input type="text" id="telephone"
                                onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"
                                name="user_phone" placeholder="Enter your telephone" required
                                oninvalid="this.setCustomValidity('data tidak boleh kosong')"
                                oninput="setCustomValidity('')">
                        </div>
                        <div class="input-box">
                            <span class="details">Alamat</span>
                            <input type="text" id="address" name="alamat" placeholder="Enter your address" required
                                oninvalid="this.setCustomValidity('data tidak boleh kosong')"
                                oninput="setCustomValidity('')">
                        </div>
                        <div class="input-box" style="visibility: hidden; margin-top:-200px">
                            <span class="details">Jenis Pemilihan</span>
                            <div class="custom_select">
                                <select id="select-state" name="poling_id">
                                    @foreach (\DB::table ('poling')->get() as $c )
                                    <option value="{{$c->id}}">{{$c->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="gender-details">
                        <input type="radio" name="gender" id="dot-1" value="laki-laki">
                        <input type="radio" name="gender" id="dot-2" value="perempuan">
                        <span class="gender-title">Jenis Kelamin</span>
                        <div class="category">
                            <label for="dot-1">
                                <span class="dot one"></span>
                                <span class="gender">Laki-Laki</span>
                            </label>
                            <label for="dot-2">
                                <span class="dot two"></span>
                                <span class="gender">Perempuan</span>
                            </label>
                        </div>
                    </div>
                    <div class="input-box">
                        <span class="details">Visi</span>
                        <textarea class="textarea" id="visi" name="visi" required
                            oninvalid="this.setCustomValidity('data tidak boleh kosong')"
                            oninput="setCustomValidity('')"></textarea>
                    </div>
                    <div class="input-box">
                        <span class="details">Misi</span>
                        <textarea class="textarea" id="misi" name="misi" required
                            oninvalid="this.setCustomValidity('data tidak boleh kosong')"
                            oninput="setCustomValidity('')"></textarea>
                    </div>
                    <center>
                        <div>
                            <input type="checkbox">
                            <label for=""><a href="{{url('e-vote/user/syarat')}}" target="_blank"
                                    style="text-decoration: none;">
                                    <p>Syarat-Syarat Kandidat</p>
                                </a></label>
                        </div>
                    </center>
                    <center>
                        <div class="container">
                            <div class="custom-file-upload">
                                <label for="file" class="mt-5">Surat Rekomendasi dari Club</label>
                                <input type="file" id="file" name="file" multiple />
                            </div>
                    </center>
                    <center>
                        <label for="file" class="mt-5">Profil Foto </label>
                        <img id="image-preview" alt="image preview" />
                        <br />
                        <input type="file" id="image-source" name="avatar" onchange="previewImage();" />
                    </center>
            </div>
            <center>
                <input type="submit" name="submit" value="Registrasi" id="submit"
                    class="btn btn-outline-warning mt-5 mb-5" style="color:white; background-color: orangered;">
            </center>
            </form>
        </div>
    </div>
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


    <script src="{{url('assets/js/script.js')}}"></script>
    <script src="{{url('assets/js/owl.carousel.min.js')}}"></script>
</body>

</html>
