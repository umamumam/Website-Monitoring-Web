@extends('layouts.app')
  

@section('contents')

<h2 class="text-center my-4">Data Web OPD Pemkot</h2>
	<div class="d-flex justify-content-end mb-3"><a href="{{ route('opdpemkots.create') }}" class="btn btn-info">Create</a></div>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>id</th>
				<th>Nama Web</th>
				<th>Link Web</th>
				<th>Deskripsi</th>
				<th>Status</th>
				<th>Tanggal Pemantauan</th>
				<th>Keterangan</th>

				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($opdpemkots as $opdpemkot)

				<tr>
					<td>{{ $opdpemkot->id }}</td>
					<td>{{ $opdpemkot->namaweb }}</td>
					<td><a href="{{ $opdpemkot->linkweb }}">{{ $opdpemkot->linkweb }}</a></td>
					<td>{{ $opdpemkot->deskripsi }}</td>
					<td>{{ $opdpemkot->status }}</td>
					<td>{{ $opdpemkot->haripemantauan }}</td>
					<td>{{ $opdpemkot->keterangan }}</td>

					<td>
						<div class="d-flex gap-2">
                            <a href="{{ route('opdpemkots.show', [$opdpemkot->id]) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('opdpemkots.edit', [$opdpemkot->id]) }}" class="btn btn-primary">Edit</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['opdpemkots.destroy', $opdpemkot->id]]) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </div>
					</td>
				</tr>

			@endforeach
		</tbody>
	</table>
	<div class="card text-center">
  <div class="card-header">
  Contac Person
  </div>
  <div class="card-body">
  <table class="table table-bordered">
		<thead>
			<tr>
				<th>Nama Bidang</th>
				<th>Alamat</th>
				<th>Email / WA Contac Person Masing- Masing Bidang</th>
				
			</tr>
		</thead>
		<thead>
		<tr>
		<td>Bidang Pemerintahan</td>
		<td>Sekayu, Kec. Semarang Tengah, Kota Semarang, Jawa Tengah 50132</td>
	<td><a href=diskominfo@semarangkota.go.id>diskominfo@semarangkota.go.id</a></td>
	</tr>
	<tr>
	<td>Bidang Pendidikan</td>
		<td>Jl. Dr. Wahidin 118 Semarang Telp. 024-8412180, Fax. 024-8317752,  Web:http://disdik.semarangkota.go.id/</td>
	<td><a href=disdik.semarangkota@gmail.com>disdik.semarangkota@gmail.com</a></td>
	</tr>
	<tr>
	<td>Bidang Kesehatan</td>
		<td>Jl. Pandanaran No 79 Semarang Lt. 8 s.d 10</td>
	<td><a href=dkksemarang@gmail.com>dkksemarang@gmail.com</a></td>
	</tr>
	<tr>
	<td>Bidang Kependudukan</td>
		<td>Jl. Kanguru Raya No. 3 Semarang - 50161 - Jawa Tengah </td>
	<td><a href=Whatsapp 085641604903 >Whatsapp 085641604903 </a></td>
	</tr>
	<tr>
	<td>Bidang Penanggulangan Bencana</td>
		<td>Jalan Brigjend. Sudiarto KM. 11 (Kompleks Terminal Penggaron) Semarang </td>
	<td><a href=bpbd@semarangkota.go.id >bpbd@semarangkota.go.id </a></td>
	</tr>		
</thead>
</table>
</div>
</div>
<br>
	@endsection
