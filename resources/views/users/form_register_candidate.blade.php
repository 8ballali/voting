<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <title>Register Candidate</title>
</head>

<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                Register Candidate
            </div>
            <div class="card-body">
                <a href="/e-vote/user/candidate" class="btn btn-primary">Back</a>
                <br />

                <form method="post" action="/e-vote/user/candidate/store">

                    {{ csrf_field() }}

                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="name" class="form-control" placeholder="Nama Kandidat">

                        @if($errors->has('name'))
                        <div class="text-danger">
                            {{ $errors->first('name')}}
                        </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Visi</label>
                        <textarea name="visi" class="form-control" placeholder="Visi Anda"></textarea>

                        @if($errors->has('visi'))
                        <div class="text-danger">
                            {{ $errors->first('visi')}}
                        </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Misi</label>
                        <textarea name="misi" class="form-control" placeholder="Misi Anda"></textarea>

                        @if($errors->has('misi'))
                        <div class="text-danger">
                            {{ $errors->first('misi')}}
                        </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" class="form-control" placeholder="Alamat Anda"></textarea>

                        @if($errors->has('alamat'))
                        <div class="text-danger">
                            {{ $errors->first('alamat')}}
                        </div>
                        @endif

                    </div>
                    <div class="form-group">
                        <label>Tempat & Tanggal Lahir</label>
                        <textarea name="ttl" class="form-control" placeholder="TTL Anda"></textarea>

                        @if($errors->has('ttl'))
                        <div class="text-danger">
                            {{ $errors->first('ttl')}}
                        </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <textarea name="gender" class="form-control" placeholder="jenis Kelamin"></textarea>

                        @if($errors->has('gender'))
                        <div class="text-danger">
                            {{ $errors->first('gender')}}
                        </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Nomor Telepon</label>
                        <textarea name="user_phone" class="form-control" placeholder="Nomor Telepon"></textarea>

                        @if($errors->has('user_phone'))
                        <div class="text-danger">
                            {{ $errors->first('user_phone')}}
                        </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Nomor Urut</label>
                        <textarea name="user_id" class="form-control" placeholder="Nomor Urut"></textarea>

                        @if($errors->has('user_id'))
                        <div class="text-danger">
                            {{ $errors->first('user_id')}}
                        </div>
                        @endif

                    </div>

                    <form action="/e-vote/user/candidate/store" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <b>File Persyaratan</b><br />
                            <input type="file" name="file">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>

                    </form>

            </div>
        </div>
    </div>
</body>

</html>
