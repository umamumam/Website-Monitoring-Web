@extends('layouts.app')
  

@section('contents')
<h2 class="text-center my-4">Data Web Kelurahan</h2>
	<div class="d-flex justify-content-end mb-3"><a href="{{ route('kelurahans.create') }}" class="btn btn-info">Create</a></div>

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
			@foreach($kelurahans as $kelurahan)

				<tr>
					<td>{{ $kelurahan->id }}</td>
					<td>{{ $kelurahan->namaweb }}</td>
					<td><a href="{{ $kelurahan->linkweb }}">{{ $kelurahan->linkweb }}</a></td>
					<td>{{ $kelurahan->deskripsi }}</td>
					<td>{{ $kelurahan->status }}</td>
					<td>{{ $kelurahan->haripemantauan }}</td>
					<td>{{ $kelurahan->keterangan }}</td>

					<td>
						<div class="d-flex gap-2">
                            <a href="{{ route('kelurahans.show', [$kelurahan->id]) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('kelurahans.edit', [$kelurahan->id]) }}" class="btn btn-primary">Edit</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['kelurahans.destroy', $kelurahan->id]]) !!}
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
	<p>Yang Bertanggung Jawab Atas Data Masing-Masing Kelurahan Adalah Beberapa Kecamatan Pada Kelurahan Tersebut Dan Untuk Contac Person Masing-Masing Kelurahan Bisa Menghubungi Dari Kecamatan Terkait:</p>
	<a href="https://p2k.stekom.ac.id/ensiklopedia/Daftar_kecamatan_dan_kelurahan_di_Kota_Semarang" class="btn btn-primary">Lihat Data Kelurahan</a>
	<p></p>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>Nama Kecamatan</th>
				<th>Contac Person Masing- Masing Kecamatan</th>
				
			</tr>
		</thead>
		<thead>
		
		<th>
		<select class="form-select" aria-label="Default select example">
			<option selected><b>Nama Kecamatan</b></option>
			<option value="1">Kecamatan Banyumanik</option>
			<option value="2">Kecamatan Gajah Mungkur</option>
			<option value="3">Kecamatan Semarang Barat</option>
			<option value="4">Kecamatan Semarang Selatan</option>
			<option value="5">Kecamatan Semarang Timur</option>
			<option value="6">Kecamatan Candisari</option>
			<option value="7">Kecamatan Tugu</option>
			<option value="8">Kecamatan Gayamsari</option>
			<option value="9">Kecamatan Ngaliyan</option>
			<option value="10">Kecamatan Tembalang</option>
			<option value="11">Kecamatan Semarang Tengah</option>
			<option value="12">Kecamatan Semarang Utara</option>
			<option value="13">Kecamatan Mijen</option>
			<option value="14">Kecamatan Pedurungan</option>
			<option value="15">Kecamatan Gunungpati</option>
			<option value="16">Kecamatan Genuk</option>			
		</select>
	</th>
	<th><select class="form-select" aria-label="Default select example">
			<option selected><b>Contac Person Masing-Masing Kecamatan</b></option>
			<option value="1">kecbanyumanik@semarangkota.go.id</option>
			<option value="2">gajahmungkur@semarangkota.go.id</option>
			<option value="3">kecamatansmgbrt13@gmail.com</option>
			<option value="4">kec.smgsel@gmail.com</option>
			<option value="5">kecsemarangtimur@semarangkota.go.id</option>
			<option value="6">kecamatan.candisari@yahoo.co.id</option>
			<option value="7">kectugu@gmail.com</option>
			<option value="8">kecamatangayamsari@gmail.com</option>
			<option value="9">kecamatanngaliyan@gmail.com</option>
			<option value="10">kecamatantembalang@gmail.com</option>
			<option value="11">kecsmgtgh@gmail.com</option>
			<option value="12">kecsmgutara@gmail.com</option>
			<option value="13">kecmijen@semarangkota.go.id</option>
			<option value="14">kecpedurungan@semarangkota.go.id</option>
			<option value="15">gunungpatikecamatan@gmail.com</option>
			<option value="16">kecgenuk@gmail.com</option>
		</select></th>
		
		</thead>
</table>
</div>
</div>
<br>
	@endsection
