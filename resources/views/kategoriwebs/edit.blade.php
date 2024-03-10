@extends('layouts.app')

@section('contents')
<h2 class="text-center my-4">Edit Data</h2>
	@if($errors->any())
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
				{{ $error }} <br>
			@endforeach
		</div>
	@endif

	{{ Form::model($kategoriweb, array('route' => array('kategoriwebs.update', $kategoriweb->id), 'method' => 'PUT')) }}

		<div class="mb-3">
			{{ Form::label('weblayanandaninfo', 'Weblayanandaninfo', ['class'=>'form-label']) }}
			{{ Form::text('weblayanandaninfo', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('webopdpemkot', 'Webopdpemkot', ['class'=>'form-label']) }}
			{{ Form::text('webopdpemkot', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('webkecamatan', 'Webkecamatan', ['class'=>'form-label']) }}
			{{ Form::text('webkecamatan', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('webkelurahan', 'Webkelurahan', ['class'=>'form-label']) }}
			{{ Form::text('webkelurahan', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('websmp', 'Websmp', ['class'=>'form-label']) }}
			{{ Form::text('websmp', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('websd', 'Websd', ['class'=>'form-label']) }}
			{{ Form::text('websd', null, array('class' => 'form-control')) }}
		</div>

		{{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}
	@endsection