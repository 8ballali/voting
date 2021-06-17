<!DOCTYPE html>
<html>

<head>
    <title>Data Community</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

</head>

<body>

    <div class="container">

        <div class="card mt-5">
            <div class="card-header text-center">
                Data Kandidat
            </div>
            <div class="card-body center">
                <br />
                <br />

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Kandidat</th>
                            <th>Visi Kandidat</th>
                            <th>Misi Kandidat</th>
                            <th>Alamat </th>
                            <th>TTL</th>
                            <th>Gender</th>
                            <th>User_phone</th>
                            <th>User_id</th>
                            <th>file Syarat</th>
                            <th>OPSI</th>
                    </thead>
                    <tbody>
                        @foreach($candidate as $ca)
                        <tr>
                            <td>{{ $ca->id }}</td>
                            <td>{{ $ca->name }}</td>
                            <td>{{ $ca->visi }}</td>
                            <td>{{ $ca->misi }}</td>
                            <td>{{ $ca->alamat }}</td>
                            <td>{{ $ca->ttl }}</td>
                            <td>{{ $ca->gender }}</td>
                            <td>{{ $ca->user_phone }}</td>
                            <td>{{ $ca->user_id }}</td>
                            <td>{{ $ca->file }}</td>


                            <td>
                                <a href="/e-vote/admin/candidate/delete/{{ $ca->id }}"
                                    class="btn btn-danger btn-sm">Hapus</a>
                                <a href="/e-vote/admin/candidate/edit/{{ $ca->id }}" class="btn btn-warning">Edit</a>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>
