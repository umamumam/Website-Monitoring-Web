@extends('layouts.app')
  

@section('contents')
<h2 class="text-center my-4">Semua Data Yang Tercatat Monitoring Sistem</h2>
<div class="d-flex justify-content-end mb-3"><a href="{{ route('monitoringsistems.create') }}" class="btn btn-info">Create</a></div>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>Nama WEB</th>
				<th>Link WEB</th>
				<th>Kategori</th>
				<th>Tampilan UI</th>
				<th>Responsif Button</th>
				<th>Jenis CMS</th>
				<th>Bahasa Pemrograman</th>
				<th>Jenis Framework</th>
				<th>Jenis Webserver</th>

			</tr>
		</thead>
		<tbody>
			@foreach($monitoringsistems as $monitoringsistem)

				<tr>

					<td>{{ $monitoringsistem->namaweb }}</td>
					<td><a href="{{ $monitoringsistem->linkweb }}">{{ $monitoringsistem->linkweb }}</td>
					<td>{{ $monitoringsistem->kategori }}</td>
					<td>{{ $monitoringsistem->tampilanui }}%</td>
					<td>{{ $monitoringsistem->responsifbutton }}%</td>
					<td>{{ $monitoringsistem->jeniscms }}</td>
					<td>{{ $monitoringsistem->bahasapemrograman }}</td>
					<td>{{ $monitoringsistem->jenisframework }}</td>
					<td>{{ $monitoringsistem->jeniswebserver }}</td>


				</tr>

			@endforeach
		</tbody>
	</table>

	@endsection
