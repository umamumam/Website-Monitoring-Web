@extends('default')

@section('content')

	@if($errors->any())
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
				{{ $error }} <br>
			@endforeach
		</div>
	@endif

	{{ Form::model($monitoringsistem, array('route' => array('monitoringsistems.update', $monitoringsistem->id), 'method' => 'PUT')) }}

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
			{{ Form::label('tampilanui', 'Tampilanui', ['class'=>'form-label']) }}
			{{ Form::string('tampilanui', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('responsifbutton', 'Responsifbutton', ['class'=>'form-label']) }}
			{{ Form::string('responsifbutton', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('cms', 'Cms', ['class'=>'form-label']) }}
			{{ Form::string('cms', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('jeniscms', 'Jeniscms', ['class'=>'form-label']) }}
			{{ Form::string('jeniscms', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('bahasapemrograman', 'Bahasapemrograman', ['class'=>'form-label']) }}
			{{ Form::string('bahasapemrograman', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('franework', 'Franework', ['class'=>'form-label']) }}
			{{ Form::string('franework', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('jenisframework', 'Jenisframework', ['class'=>'form-label']) }}
			{{ Form::string('jenisframework', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('webserver', 'Webserver', ['class'=>'form-label']) }}
			{{ Form::string('webserver', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('jeniswebserver', 'Jeniswebserver', ['class'=>'form-label']) }}
			{{ Form::string('jeniswebserver', null, array('class' => 'form-control')) }}
		</div>

		{{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}
@stop
