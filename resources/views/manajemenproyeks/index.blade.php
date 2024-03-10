@extends('layouts.app')
  

@section('contents')
<h2 class="text-center my-4">Manajemen Proyek IT</h2>
	<div class="d-flex justify-content-end mb-3"><a href="{{ route('manajemenproyeks.create') }}" class="btn btn-info">Create</a></div>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>id</th>
				<th>Nama Web</th>
				<th>Link Web</th>
				<th>Kategori</th>
				<th>Tanggal Dibuat</th>
				<th>Tanggal Selesai</th>
				<th>Dana Pembuatan</th>

				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($manajemenproyeks as $manajemenproyek)

				<tr>
					<td>{{ $manajemenproyek->id }}</td>
					<td>{{ $manajemenproyek->namaweb }}</td>
					<td><a href="{{ $manajemenproyek->linkweb }}">{{ $manajemenproyek->linkweb }}</a></td>
					<td>{{ $manajemenproyek->kategori }}</td>
					<td>{{ $manajemenproyek->tanggaldibuat }}</td>
					<td>{{ $manajemenproyek->tanggalselesai }}</td>
					<td>{{ $manajemenproyek->danapembuatan }}</td>

					<td>
						<div class="d-flex gap-2">
                            <a href="{{ route('manajemenproyeks.show', [$manajemenproyek->id]) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('manajemenproyeks.edit', [$manajemenproyek->id]) }}" class="btn btn-primary">Edit</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['manajemenproyeks.destroy', $manajemenproyek->id]]) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </div>
					</td>
				</tr>

			@endforeach
		</tbody>
	</table>
	 <h2 class="text-center my-4">Manajemen Sumber Daya Manusia</h2>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>id</th>
				<th>Programer</th>
				<th>Sistem Analist</th>
				<th>Desainer</th>
				<th>Tester</th>
				<th>Administrator</th>

				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($manajemenproyeks as $manajemenproyek)

				<tr>
					<td>{{ $manajemenproyek->id }}</td>
					<td>{{ $manajemenproyek->programer }}</td>
					<td>{{ $manajemenproyek->sistemanalist }}</td>
					<td>{{ $manajemenproyek->desainer }}</td>
					<td>{{ $manajemenproyek->tester }}</td>
					<td>{{ $manajemenproyek->administrator }}</td>

					<td>
						<div class="d-flex gap-2">
                            <a href="{{ route('manajemenproyeks.show', [$manajemenproyek->id]) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('manajemenproyeks.edit', [$manajemenproyek->id]) }}" class="btn btn-primary">Edit</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['manajemenproyeks.destroy', $manajemenproyek->id]]) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </div>
					</td>
				</tr>

			@endforeach
		</tbody>
	</table>
	@endsection
