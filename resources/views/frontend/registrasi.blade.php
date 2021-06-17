<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registrasi</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/awesome.css">
    <link rel="stylesheet" href="assets/css/style.css" />
    <script src="assets/js/jquery-3.5.1.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <script src="assets/js/sweetalert2.js"></script>
    <script src="assets/js/selectize.min.js"></script>
    <link rel="stylesheet" href="assets/css/selectize.bootstrap3.min.css" />
</head>

<body>
    <!-- navigasi -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.html"><img src="images/kosmos.png" width="80" height="60" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-right" id="navbarText">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="syarat.html">Syarat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="registrasi.html">Registrasi</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="section-title mt-5 pt-5">
            <h2>Registrasi</h2>
        </div>
        <div class="content">
            <form action="" method="POST">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Nama Lengkap</span>
                        <input type="text" id="name" placeholder="Enter your name" required
                            oninvalid="this.setCustomValidity('data tidak boleh kosong')"
                            oninput="setCustomValidity('')">
                    </div>
                    <div class="input-box">
                        <span class="details">Asal Klub</span>
                        <div class="custom_select">
                            <select id="select-state">
                                <option value="">Select a Club</option>
                                <option value="SR">Sirion</option>
                                <option value="AY">Ayla</option>
                                <option value="LV">Livina</option>
                            </select>
                        </div>
                    </div>
                    <div class="input-box">
                        <span class="details">Tempat Lahir</span>
                        <input type="text" id="place" placeholder="Enter your birthplace" required
                            oninvalid="this.setCustomValidity('data tidak boleh kosong')"
                            oninput="setCustomValidity('')">
                    </div>
                    <div class="input-box">
                        <span class="details">Tanggal Lahir</span>
                        <input type="date" id="date" placeholder="Enter your birthdate" required
                            oninvalid="this.setCustomValidity('data tidak boleh kosong')"
                            oninput="setCustomValidity('')">
                    </div>
                    <div class="input-box">
                        <span class="details">Telepon</span>
                        <input type="text" id="telephone" placeholder="Enter your telephone" required
                            oninvalid="this.setCustomValidity('data tidak boleh kosong')"
                            oninput="setCustomValidity('')">
                    </div>
                    <div class="input-box">
                        <span class="details">Alamat</span>
                        <input type="text" id="address" placeholder="Enter your address" required
                            oninvalid="this.setCustomValidity('data tidak boleh kosong')"
                            oninput="setCustomValidity('')">
                    </div>
                </div>
                <div class="gender-details">
                    <input type="radio" name="gender" id="dot-1">
                    <input type="radio" name="gender" id="dot-2">
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
                    <textarea class="textarea" id="visi" required
                        oninvalid="this.setCustomValidity('data tidak boleh kosong')"
                        oninput="setCustomValidity('')"></textarea>
                </div>
                <div class="input-box">
                    <span class="details">Misi</span>
                    <textarea class="textarea" id="misi" required
                        oninvalid="this.setCustomValidity('data tidak boleh kosong')"
                        oninput="setCustomValidity('')"></textarea>
                </div>
                <center>
                    <a href="syarat.html" target="_blank">
                        <p>Syarat-Syarat Kandidat</p>
                    </a>
                </center>
                <div class="wrapper" style="color: transparent;">
                    <div class="file-upload-wrapper" data-text="Select your file">
                        <input name="file-upload-field" id="upload" type="file" class="file-upload-field" value=""
                            multiple required oninvalid="this.setCustomValidity('data tidak boleh kosong')"
                            oninput="setCustomValidity('')">
                    </div>
                </div>
                <center>
                    <input type="submit" name="submit" value="Registrasi" id="submit"
                        class="btn btn-outline-warning mt-5 mb-5" style="color:white; background-color: orangered;">
                </center>
            </form>

        </div>
        <script src="assets/js/script.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>
