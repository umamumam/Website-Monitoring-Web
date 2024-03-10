@extends('layouts.app')

@section('contents')
<h2 class="text-center my-4">Data Web Sesuai Kategori</h2>
	<div class="d-flex justify-content-end mb-3"><a href="{{ route('kategoriwebs.create') }}" class="btn btn-info">Create</a></div>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>id</th>
				<th>WEB Layanan & Info</th>
				<th>WEB Kecamatan</th>
				<th>WEB Kelurahan</th>
				

				
			</tr>
		</thead>
		
		<tbody>
			@foreach($kategoriwebs as $kategoriweb)

				<tr>
					<td>{{ $kategoriweb->id }}</td>
					<td><a href="{{ $kategoriweb->linkweb }}">{{ $kategoriweb->weblayanandaninfo }}</td>
					
					<td><a href="{{ $kategoriweb->linkweb }}">{{ $kategoriweb->webkecamatan }}</td>
					<td><a href="{{ $kategoriweb->linkweb }}">{{ $kategoriweb->webkelurahan }}</td>
					

					
				</tr>

			@endforeach
		</tbody>
		
	</table>
	<table class="table table-bordered">
	<thead>
			<tr>
				<th>id</th>
				<th>WEB OPD Pemkot</th>
				<th>WEB SMP</th>
				<th>WEB SD</th>
				
			</tr>
		</thead>
		<tbody>
			@foreach($kategoriwebs as $kategoriweb)

				<tr>
					<td>{{ $kategoriweb->id }}</td>
					
					<td><a href="{{ $kategoriweb->linkweb }}">{{ $kategoriweb->webopdpemkot }}</td>
					
					<td><a href="{{ $kategoriweb->linkweb }}">{{ $kategoriweb->websmp }}</td>
					<td><a href="{{ $kategoriweb->linkweb }}">{{ $kategoriweb->websd }}</td>

					
				</tr>

			@endforeach
		</tbody>
		</table>
		@endsection
