@extends('layout2')

@section('content2')
<table class="table table-striped table-bordered" id="siswa-table">
    <thead>
        <tr>
           <th>Id</th>
           <th>Nama Depan</th>
           <th>Nama Belakang</th>
           <th>Jenis Kelamin</th>
           <th>Agama</th>
           <th>Alamat</th>
           <th>Created At</th>
           <th>Updated At</th>
       </tr>
   </thead>
</table>
@stop

@push('scripts')
<script>
    $(function() {
        $('#siswa-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: 'siswa/data',
            columns: [
            { data: 'id', name: 'id' },
            { data: 'nama_depan', name: 'nama_depan' },
            { data: 'nama_belakang', name: 'nama_belakang' },
            { data: 'jenis_kelamin', name: 'jenis_kelamin' },
            { data: 'agama', name: 'agama' },
            { data: 'alamat', name: 'alamat' },
            { data: 'created_at', name: 'created_at' },
            { data: 'updated_at', name: 'updated_at' }
            ]
        });
    });
</script>
@endpush