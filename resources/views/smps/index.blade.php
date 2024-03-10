@extends('layouts.app')
  

@section('contents')
<h2 class="text-center my-4">Data Web SMP</h2>
	<div class="d-flex justify-content-end mb-3"><a href="{{ route('smps.create') }}" class="btn btn-info">Create</a></div>

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
			@foreach($smps as $smp)

				<tr>
					<td>{{ $smp->id }}</td>
					<td>{{ $smp->namaweb }}</td>
					<td><a href="{{ $smp->linkweb }}">{{ $smp->linkweb }}</a></td>
					<td>{{ $smp->deskripsi }}</td>
					<td>{{ $smp->status }}</td>
					<td>{{ $smp->haripemantauan }}</td>
					<td>{{ $smp->keterangan }}</td>

					<td>
						<div class="d-flex gap-2">
                            <a href="{{ route('smps.show', [$smp->id]) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('smps.edit', [$smp->id]) }}" class="btn btn-primary">Edit</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['smps.destroy', $smp->id]]) !!}
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
	<p>Semua Web Yang Berhubungan dengan Pendidikan Berada dibawah Koordinasi Oleh Dinas Pendidikan</p>
	<div class="text-left">
	<p><b>Kontak Dinas Pendidikan Kota Semarang</b></p>
	<p></p>
	<p>Jl. Dr. Wahidin 118 Semarang</p>
	<p>Telp. 024-8412180, Fax. 024-8317752,</p>
	<p>Web:http://disdik.semarangkota.go.id/</p>
	<p></p>
	<div>
	<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Facebook &nbsp; : <a href="https://www.facebook.com/groups/127893867721144/?fref=ts">&nbsp;</a><a href="https://www.facebook.com/dinaspendidikan.semarangkota">P</a><a href="https://www.facebook.com/groups/127893867721144/?fref=ts">PID Disdik Kota Semarang</a></span></span></div>
	<p></p>
	<div>
	<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Twiter &nbsp; &nbsp; &nbsp; &nbsp; : &nbsp; <a href=> disdik_kotasmg</a></span></span></div>
	<p></p>
	<div>
	<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Email &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: &nbsp; <a href=> disdik.semarangkota@gmail.com</a></span></span></div>
	<div>
	<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href=> disdik@semarangkota.go.id</a></span></span></div>
</div>
</div>
</div>
<br>
	@endsection
