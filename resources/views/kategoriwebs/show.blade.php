@extends('layouts.app')

@section('contents')
<h2 class="text-center my-4">Data Web Sesuai Kategori</h2>
<table class="table table-bordered">
		<thead>
			<tr>
				<th>id</th>
				<th>WEB Layanan & Info</th>
				<th>WEB Kecamatan</th>
				<th>WEB Kelurahan</th>

			</tr>
		</thead>
		
		<thead>
			<tr>
				<th>{{ $kategoriweb->id }}</th>
				<th><a href="{{ $kategoriweb->linkweb }}">{{ $kategoriweb->weblayanandaninfo }}</th>
				<th><a href="{{ $kategoriweb->linkweb }}">{{ $kategoriweb->webkecamatan }}</th>
				<th><a href="{{ $kategoriweb->linkweb }}">{{ $kategoriweb->webkelurahan }}</th>

			</tr>
		</thead>
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
		
		<thead>
			<tr>
				<th>{{ $kategoriweb->id }}</th>
				<th><a href="{{ $kategoriweb->linkweb }}">{{ $kategoriweb->webopdpemkot }}</a></th>
				<th><a href="{{ $kategoriweb->linkweb }}">{{ $kategoriweb->websmp }}</th>
				<th><a href="{{ $kategoriweb->linkweb }}">{{ $kategoriweb->websd }}</th>
			</tr>
		</thead>
</table>
@endsection