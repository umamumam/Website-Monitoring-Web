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

	{!! Form::open(['route' => 'monitorings.store']) !!}

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
            <option value="layanandaninfo">layanandaninfo</option>
            <option value="opdpemkot">opdpemkot</option>
            <option value="kecamatan">kecamatan</option>
            <option value="kelurahan">kelurahan</option>
            <option value="smp">smp</option>
            <option value="sd">sd</option>
        	</select>
			
		</div>
		<div class="mb-3">
			{{ Form::label('status', 'Status', ['class'=>'form-label']) }}
			<select name="status" id="status" required>
            <option value="active">Active</option>
            <option value="inactive">Suspend</option>
        </select>
		</div>
		<div class="mb-3">
			{{ Form::label('logo', 'Logo', ['class'=>'form-label']) }}
			<input type="checkbox" name="logo" id="logo">
		</div>
		<div class="mb-3">
			{{ Form::label('presentaseupdateberita', 'Presentaseupdateberita', ['class'=>'form-label']) }}
			<select name="presentaseupdateberita" id="presentaseupdateberita" required>
            <option value="Update_setiap_bulan_100">Update setiap bulan 100%</option>
            <option value="Update_tahun_ini_70">Update_tahun_ini_70</option>
            <option value="Update_maksimal_tahun_kemarin_50">Update_maksimal_tahun_kemarin_50</option>
            <option value="Update_2_tahun_lalu_30">Update_2_tahun_lalu_30</option>
            <option value="Tidak_ada_Suspende_0">Tidak_ada_Suspende_0</option>
        	</select>
		</div>
		<div class="mb-3">
			{{ Form::label('tanggalupdateterbaru', 'Tanggalupdateterbaru', ['class'=>'form-label']) }}
			{{ Form::date('tanggalupdateterbaru', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('terakhirupdate', 'Terakhirupdate', ['class'=>'form-label']) }}
			{{ Form::date('terakhirupdate', null, array('class' => 'form-control')) }}
		</div>


		{{ Form::submit('Create', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}


	@endsection