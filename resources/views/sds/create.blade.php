@extends('layouts.app')
  

@section('contents')
<h2 class="text-center my-4">Create Data</h2>
	@if($errors->any())
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
				{{ $error }} <br>
			@endforeach
		</div>
	@endif

	{!! Form::open(['route' => 'sds.store']) !!}

		<div class="mb-3">
			{{ Form::label('namaweb', 'Namaweb', ['class'=>'form-label']) }}
			{{ Form::text('namaweb', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('linkweb', 'Linkweb', ['class'=>'form-label']) }}
			{{ Form::text('linkweb', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('deskripsi', 'Deskripsi', ['class'=>'form-label']) }}
			{{ Form::text('deskripsi', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('status', 'Status', ['class'=>'form-label']) }}
			{{ Form::text('status', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('haripemantauan', 'Haripemantauan', ['class'=>'form-label']) }}
			{{ Form::date('haripemantauan', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('keterangan', 'Keterangan', ['class'=>'form-label']) }}
			{{ Form::textarea('keterangan', null, array('class' => 'form-control')) }}
		</div>


		{{ Form::submit('Create', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}


	@endsection