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

	{!! Form::open(['route' => 'manajemenproyeks.store']) !!}

		<div class="mb-3">
			{{ Form::label('namaweb', 'Nama web', ['class'=>'form-label']) }}
			{{ Form::text('namaweb', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('linkweb', 'Linkweb', ['class'=>'form-label']) }}
			{{ Form::text('linkweb', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('kategori', 'Kategori', ['class'=>'form-label']) }}
			<select name="kategori" id="kategori" required>
            <option value="layanandaninfo">layanandaninfo</option>
            <option value="opdpemkot">opdpemkot</option>
            <option value="kecamatan">kecamatan</option>
            <option value="kelurahan">kelurahan</option>
            <option value="smp">smp</option>
            <option value="sd">sd</option>
        	</select>
		</div>
		<div class="mb-3">
			{{ Form::label('tanggaldibuat', 'Tanggaldibuat', ['class'=>'form-label']) }}
			{{ Form::Date('tanggaldibuat', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('tanggalselesai', 'Tanggalselesai', ['class'=>'form-label']) }}
			{{ Form::Date('tanggalselesai', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('danapembuatan', 'Danapembuatan', ['class'=>'form-label']) }}
			<select name="danapembuatan" id="danapembuatan" required>
            <option value="1jt">1jt</option>
            <option value="1,5jt-4jt">1,5jt-4jt</option>
            <option value="4jt-6jt">4jt-6jt</option>
            <option value="diatas 6jt">diatas 6jt</option>
        	</select>
		</div>
		<div class="mb-3">
			{{ Form::label('programer', 'Programer', ['class'=>'form-label']) }}
			{{ Form::text('programer', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('sistemanalist', 'Sistemanalist', ['class'=>'form-label']) }}
			{{ Form::text('sistemanalist', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('desainer', 'Desainer', ['class'=>'form-label']) }}
			{{ Form::text('desainer', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('tester', 'Tester', ['class'=>'form-label']) }}
			{{ Form::text('tester', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('administrator', 'Administrator', ['class'=>'form-label']) }}
			{{ Form::text('administrator', null, array('class' => 'form-control')) }}
		</div>


		{{ Form::submit('Create', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}


	@endsection