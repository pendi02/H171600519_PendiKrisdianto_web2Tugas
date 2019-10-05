@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <center><div class="card-header">Pengumuman</div></center>
                <center>
                <div class="card-body">
                	
                   <table border="1">
                   	    <thead class="btn-lg bg-danger">
                   			<tr>
								<th scope="col"><center>ID</center></th>
								<th scope="col"><center>Judul</center></th>
								<th scope="col"><center>Isi</center></th>
								<th scope="col"><center>Kategori</center></th>
								<th scope="col"><center>Users Id</center></th>
								<th scope="col"><center>Create</center>
								<th scope="col"><center>Aksi</center></th>
							</tr>
                  	 	</thead>


		@foreach($listPengumuman as $item)

		<tr>
			<td><center>{!! $item->id !!}</center></td>
			<td><center>{!! $item->judul !!}</center></td>
			<td><center>{!! $item->isi !!}</center></td>
			<td><center>{!! $item->kategori_pengumuman_id !!}</center></td> 
			<td><center>{!! $item->users_id !!}</center></td>
			<td><center>{!! $item->created_at->format('d/m/Y H:i:s') !!}</center></td>
						<td>
				<a href=" {!! route('Pengumuman.show',[$item->id]) !!}" class="btn btn-lg btn-warning">Lihat</a>
			</td>
		</tr>

		@endforeach
	</table>
</center>
	<a href="{!! route('pengumuman.create') !!}" class="btn btn-success">Tambah Data</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
