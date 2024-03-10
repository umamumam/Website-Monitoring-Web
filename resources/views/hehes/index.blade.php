@extends('default')

@section('content')

	<div class="d-flex justify-content-end mb-3"><a href="{{ route('hehes.create') }}" class="btn btn-info">Create</a></div>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>id</th>
				<th>namaweb</th>
				<th>linkweb</th>
				<th>deskripsi</th>
				<th>status</th>
				<th>haripemantauan</th>
				<th>keterangan</th>

				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($hehes as $hehe)

				<tr>
					<td>{{ $hehe->id }}</td>
					<td>{{ $hehe->namaweb }}</td>
					<td>{{ $hehe->linkweb }}</td>
					<td>{{ $hehe->deskripsi }}</td>
					<td>{{ $hehe->status }}</td>
					<td>{{ $hehe->haripemantauan }}</td>
					<td>{{ $hehe->keterangan }}</td>

					<td>
						<div class="d-flex gap-2">
                            <a href="{{ route('hehes.show', [$hehe->id]) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('hehes.edit', [$hehe->id]) }}" class="btn btn-primary">Edit</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['hehes.destroy', $hehe->id]]) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </div>
					</td>
				</tr>

			@endforeach
		</tbody>
	</table>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>id</th>
				<th>namaweb</th>
				<th>linkweb</th>
				<th>deskripsi</th>
				<th>status</th>
				<th>haripemantauan</th>
				<th>keterangan</th>

				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($hehes as $hehe)

				<tr>
					<td>{{ $hehe->id }}</td>
					<td>{{ $hehe->namaweb }}</td>
					<td>{{ $hehe->linkweb }}</td>
					<td>{{ $hehe->deskripsi }}</td>
					<td>{{ $hehe->status }}</td>
					<td>{{ $hehe->haripemantauan }}</td>
					<td>{{ $hehe->keterangan }}</td>

					<td>
						<div class="d-flex gap-2">
                            <a href="{{ route('hehes.show', [$hehe->id]) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('hehes.edit', [$hehe->id]) }}" class="btn btn-primary">Edit</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['hehes.destroy', $hehe->id]]) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </div>
					</td>
				</tr>

			@endforeach
		</tbody>
	</table>
@stop
