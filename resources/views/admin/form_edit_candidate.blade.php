<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <title>Data Kandidat</title>
</head>

<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                <strong>Kandidat</strong>
            </div>
            <div class="card-body">
                <a href="/e-vote/admin/candidate" class="btn btn-primary">Back</a>
                <br />
                <br />


                <form method="post" action="/e-vote/admin/candidate/update/{{ $candidate->id }}">

                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Nama Kandidat"
                            value=" {{ $candidate->name }}">

                        @if($errors->has('name'))
                        <div class="text-danger">
                            {{ $errors->first('name')}}
                        </div>
                        @endif

                    </div>
                    <div class="form-group">
                        <label>Visi</label>
                        <textarea name="visi" class="form-control"
                            placeholder="Visi Kandiat"> {{ $candidate->visi }} </textarea>

                        @if($errors->has('visi'))
                        <div class="text-danger">
                            {{ $errors->first('visi')}}
                        </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Misi</label>
                        <textarea name="misi" class="form-control"
                            placeholder="Misi Kandiat"> {{ $candidate->misi }} </textarea>

                        @if($errors->has('misi'))
                        <div class="text-danger">
                            {{ $errors->first('misi')}}
                        </div>
                        @endif

                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" class="form-control"
                            placeholder="Alamat Kandidat"> {{ $candidate->alamat }} </textarea>

                        @if($errors->has('alamat'))
                        <div class="text-danger">
                            {{ $errors->first('alamat')}}
                        </div>
                        @endif

                    </div>
                    <div class="form-group">
                        <label>TTL</label>
                        <textarea name="ttl" class="form-control" placeholder="TTL"> {{ $candidate->ttl }} </textarea>

                        @if($errors->has('ttl'))
                        <div class="text-danger">
                            {{ $errors->first('ttl')}}
                        </div>
                        @endif

                    </div>
                    <div class="form-group">
                        <label>Gender</label>
                        <textarea name="gender" class="form-control"
                            placeholder="Jenis Kelamin"> {{ $candidate->gender }} </textarea>

                        @if($errors->has('gender'))
                        <div class="text-danger">
                            {{ $errors->first('gender')}}
                        </div>
                        @endif

                    </div>
                    <div class="form-group">
                        <label>User Phone</label>
                        <textarea name="user_phone" class="form-control"
                            placeholder="Nomor HP"> {{ $candidate->user_phone }} </textarea>

                        @if($errors->has('user_phone'))
                        <div class="text-danger">
                            {{ $errors->first('user_phone')}}
                        </div>
                        @endif

                    </div>
                    <div class="form-group">
                        <label>User ID</label>
                        <textarea name="user_id" class="form-control"
                            placeholder="ID"> {{ $candidate->user_id }} </textarea>

                        @if($errors->has('user_id'))
                        <div class="text-danger">
                            {{ $errors->first('user_id')}}
                        </div>
                        @endif

                    </div>
                    <div class="form-group">
                        <label>File Syarat</label>
                        <textarea name="file" class="form-control"
                            placeholder="File Syarat"> {{ $candidate->file }} </textarea>

                        @if($errors->has('file'))
                        <div class="text-danger">
                            {{ $errors->first('file')}}
                        </div>
                        @endif

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
