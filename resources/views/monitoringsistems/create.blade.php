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

	{!! Form::open(['route' => 'monitoringsistems.store']) !!}

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
			{{ Form::label('tampilanui', 'Tampilanui', ['class'=>'form-label']) }}
			<select name="tampilanui" id="tampilanui" required>
            <option value="tampilan_menarik_100">tampilan_menarik_100</option>
            <option value="tampilan_sama_seperti_web_lain_60">tampilan_sama_seperti_web_lain_60</option>
            <option value="tidak_ada_suspende_0">tidak_ada_suspende_0</option>
        	</select>
		</div>
		<div class="mb-3">
			{{ Form::label('responsifbutton', 'Responsifbutton', ['class'=>'form-label']) }}
			<select name="responsifbutton" id="responsifbutton" required>
            <option value="responsif_semua_100">responsif_semua_100</option>
            <option value="responsif_lebih_banyak_70">responsif_lebih_banyak_70</option>
            <option value="banyak_yang_error_50">banyak_yang_error_50</option>
            <option value="tidak_ada_suspende_0">tidak_ada_suspende_0</option>
        	</select>
		</div>
		<div class="mb-3">
			{{ Form::label('cms', 'Cms', ['class'=>'form-label']) }}
			<input type="checkbox" name="cms" id="cms">
		</div>
		<div class="mb-3">
			{{ Form::label('jeniscms', 'Jeniscms', ['class'=>'form-label']) }}
			<select name="jeniscms" id="jeniscms" required>
            <option value="wordPress">wordPress</option>
            <option value="october_cms">october_cms</option>
            <option value="other">other</option>
            <option value="tidak">tidak</option>
        	</select>
		</div>
		<div class="mb-3">
			{{ Form::label('bahasapemrograman', 'Bahasapemrograman', ['class'=>'form-label']) }}
			<select name="bahasapemrograman" id="bahasapemrograman" required>
            <option value="php">php</option>
            <option value="html">html</option>
            <option value="python">python</option>
            <option value="other">other</option>
        	</select>
		</div>
		<div class="mb-3">
			{{ Form::label('franework', 'Franework', ['class'=>'form-label']) }}
			<input type="checkbox" name="franework" id="franework">
		</div>
		<div class="mb-3">
			{{ Form::label('jenisframework', 'Jenisframework', ['class'=>'form-label']) }}
			<select name="jenisframework" id="jenisframework" required>
            <option value="Laravel">Laravel</option>
            <option value="React">React</option>
            <option value="CodeIgniter">CodeIgniter</option>
			<option value="Angular">Angular</option>
            <option value="other">other</option>
			<option value="tidak">tidak</option>
        	</select>
		</div>
		<div class="mb-3">
			{{ Form::label('webserver', 'Webserver', ['class'=>'form-label']) }}
			<input type="checkbox" name="webserver" id="webserver">
		</div>
		<div class="mb-3">
			{{ Form::label('jeniswebserver', 'Jeniswebserver', ['class'=>'form-label']) }}
			<select name="jeniswebserver" id="jeniswebserver" required>
            <option value="Apache Web Server">Apache Web Server</option>
            <option value="Nginx">Nginx</option>
            <option value="Apache Tomcat">Apache Tomcat</option>
			<option value="Xitami Web Server">Xitami Web Server</option>
            <option value="other">other</option>
			<option value="tidak">tidak</option>
        	</select>
		</div>


		{{ Form::submit('Create', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}


	@endsection