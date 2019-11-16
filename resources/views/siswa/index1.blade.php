<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />

	<title>Data Siswa</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h1>DATA SISWA</h1>
				{{-- {{ dd($data_siswa) }} --}}
				<!-- Button trigger modal -->
			</div>
			<div class="col-md-6">
				<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
					Tambah Data Siswa
				</button>
				<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								...
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="button" class="btn btn-primary">Save changes</button>
							</div>
						</div>
					</div>
				</div>				
			</div>
			<table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>NAMA DEPAN</th>
						<th>NAMA BELAKANG</th>
						<th>JENIS KELAMIN</th>
						<th>AGAMA</th>
						<th>ALAMAT</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>NAMA DEPAN</th>
						<th>NAMA BELAKANG</th>
						<th>JENIS KELAMIN</th>
						<th>AGAMA</th>
						<th>ALAMAT</th>
					</tr>
				</tfoot>	
				<tbody>
					@foreach($data_siswa as $siswa)
					<tr>
						<td>{{$siswa->nama_depan}}</td>
						<td>{{$siswa->nama_belakang}}</td>
						<td>{{$siswa->jenis_kelamin}}</td>
						<td>{{$siswa->agama}}</td>
						<td>{{$siswa->alamat}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script>
	$(document).ready(function(){
		$('#tabel-data').DataTable();
	});
</script>
</body>
</html>
