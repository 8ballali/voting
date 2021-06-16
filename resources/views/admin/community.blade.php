<!DOCTYPE html>
<html>
<head>
	<title>Data Community</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

</head>
<body>

	<div class="container">

		<div class="card mt-5">
			<div class="card-header text-center">
				Data Community 
			</div>
			<div class="card-body center">

				<a href="/e-vote/admin/community/add" class="btn btn-success">Add Community</a>
				

				<br/>
				<br/>

				<table class="table table-bordered">
					<thead>
						<tr>
                            <th>ID</th>
							<th>Nama Komunitas</th>
							<th>Deskripsi</th>
							<th>Nomor telepon</th>
                            <th>Created At</th>
                            <th>Updated at</th>
                            <th>Option</th>
					</thead>
					<tbody>
						@foreach($community as $co)
						<tr>
							<td>{{ $co->id }}</td>
							<td>{{ $co->name }}</td>
							<td>{{ $co->description }}</td>
							<td>{{ $co->phone }}</td>
							<td>{{ $co->created_at }}</td>
							<td>{{ $co->updated_at }}</td>
							
							
                            <td>
							    <a href="/e-vote/admin/community/delete/{{ $co->id }}" class="btn btn-danger btn-sm">Hapus</a>
                                <a href="/e-vote/admin/community/edit/{{ $co->id }}" class="btn btn-warning">Edit</a>
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