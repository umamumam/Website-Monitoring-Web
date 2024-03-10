@extends('layouts.app')
  

@section('contents')
<h2 class="text-center my-4">Monitoring Update Berita</h2>
<div class="d-flex justify-content-end mb-3"><a href="{{ route('monitorings.create') }}" class="btn btn-info">Create</a></div>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>id</th>
				<th>Nama WEB</th>
				<th>Link WEB</th>
				<th>Kategori WEB</th>
				<th>Status</th>
				<th>Logo</th>
				<th>Presentase Update Berita</th>
				<th>Tanggal Update Terbaru</th>
				<th>Terakhir Update</th>

			</tr>
		</thead>
		<tbody>
			@foreach($monitorings as $monitoring)

				<tr>
					<td>{{ $monitoring->id }}</td>
					<td>{{ $monitoring->namaweb }}</td>
					<td><a href="{{ $monitoring->linkweb }}">{{ $monitoring->linkweb }}</td>
					<td>{{ $monitoring->kategori }}</td>
					<td>{{ $monitoring->status }}</td>
					<td>{{ $monitoring->logo }}</td>
					<td>{{ $monitoring->presentaseupdateberita }}%</td>
					<td>{{ $monitoring->tanggalupdateterbaru }}</td>
					<td>{{ $monitoring->terakhirupdate }}</td>

					
				</tr>

			@endforeach
		</tbody>
	</table>

	@endsection