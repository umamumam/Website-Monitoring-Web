@extends('default')

@section('content')

	@if($errors->any())
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
				{{ $error }} <br>
			@endforeach
		</div>
	@endif

	{{ Form::model($monitoring, array('route' => array('monitorings.update', $monitoring->id), 'method' => 'PUT')) }}

		<div class="mb-3">
			{{ Form::label('namaweb', 'Namaweb', ['class'=>'form-label']) }}
			{{ Form::text('namaweb', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('linkweb', 'Linkweb', ['class'=>'form-label']) }}
			{{ Form::text('linkweb', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('kategori', 'Kategori', ['class'=>'form-label']) }}
			{{ Form::string('kategori', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('status', 'Status', ['class'=>'form-label']) }}
			{{ Form::string('status', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('logo', 'Logo', ['class'=>'form-label']) }}
			{{ Form::string('logo', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('presentaseupdateberita', 'Presentaseupdateberita', ['class'=>'form-label']) }}
			{{ Form::string('presentaseupdateberita', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('tanggalupdateterbaru', 'Tanggalupdateterbaru', ['class'=>'form-label']) }}
			{{ Form::string('tanggalupdateterbaru', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('terakhirupdate', 'Terakhirupdate', ['class'=>'form-label']) }}
			{{ Form::string('terakhirupdate', null, array('class' => 'form-control')) }}
		</div>

		{{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}
@stop
