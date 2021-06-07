<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Data Calon</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <strong>Community</strong>
                </div>
                <div class="card-body">
                    <a href="/e-vote/admin/community" class="btn btn-primary">Back</a>
                    <br/>
                    <br/>
                    

                    <form method="post" action="/e-vote/admin/community/update/{{ $community->id }}">

                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Nama Komunitas" value=" {{ $community->name }}">

                            @if($errors->has('name'))
                                <div class="text-danger">
                                    {{ $errors->first('name')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" class="form-control" placeholder="Deskripsi Komunitas"> {{ $community->description }} </textarea>

                             @if($errors->has('description'))
                                <div class="text-danger">
                                    {{ $errors->first('description')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Phone Number</label>
                            <textarea name="phone" class="form-control" placeholder="Nomor Telepon"> {{ $community->phone }} </textarea>

                             @if($errors->has('phone'))
                                <div class="text-danger">
                                    {{ $errors->first('phone')}}
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