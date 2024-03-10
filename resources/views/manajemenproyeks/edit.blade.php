@extends('layouts.app')
  

@section('contents')

	@if($errors->any())
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
				{{ $error }} <br>
			@endforeach
		</div>
	@endif

	{{ Form::model($manajemenproyek, array('route' => array('manajemenproyeks.update', $manajemenproyek->id), 'method' => 'PUT')) }}

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
			<select name="kategori" id="kategori" required>
            <option value="layanandaninfo"{{ $manajemenproyek->kategori === 'layanandaninfo' ? 'selected' : '' }}>layanandaninfo</option>
            <option value="opdpemkot"{{ $manajemenproyek->kategori === 'opdpemkot' ? 'selected' : '' }}>opdpemkot</option>
            <option value="kecamatan"{{ $manajemenproyek->kategori === 'kecamatan' ? 'selected' : '' }}>kecamatan</option>
            <option value="kelurahan"{{ $manajemenproyek->kategori === 'kelurahan' ? 'selected' : '' }}>kelurahan</option>
            <option value="smp"{{ $manajemenproyek->kategori === 'smp' ? 'selected' : '' }}>smp</option>
            <option value="sd"{{ $manajemenproyek->kategori === 'sd' ? 'selected' : '' }}>sd</option>
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
            <option value="1jt"{{ $manajemenproyek->danapembuatan === '1jt' ? 'selected' : '' }}>1jt</option>
            <option value="1,5jt-4jt"{{ $manajemenproyek->danapembuatan === '1,5jt-4jt' ? 'selected' : '' }}>1,5jt-4jt</option>
            <option value="4jt-6jt"{{ $manajemenproyek->danapembuatan === '4jt-6jt' ? 'selected' : '' }}>4jt-6jt</option>
            <option value="diatas 6jt"{{ $manajemenproyek->danapembuatan === 'diatas 6jt' ? 'selected' : '' }}>diatas 6jt</option>
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

		{{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}
	@endsection
