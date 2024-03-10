@extends('layouts.app')
  

@section('contents')
<h2 class="text-center my-4">Data Web Bidang Layanan & Info</h2>

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

			</tr>
		</thead>
		<thead>
			<tr>
				<th>{{ $layanandaninfo->id }}</th>
				<th>{{ $layanandaninfo->namaweb }}</th>
				<th><a href="{{ $layanandaninfo->linkweb }}">{{ $layanandaninfo->linkweb }}</a></th>
				<th>{{ $layanandaninfo->deskripsi }}</th>
				<th>{{ $layanandaninfo->status }}</th>
				<th>{{ $layanandaninfo->haripemantauan }}</th>
				<th>{{ $layanandaninfo->keterangan }}</th>


			</tr>
		</thead>
</table>
<table class="table table-bordered">
	<h4 class="text-center my-4">Monitoring</h4>
		<thead>
			<tr>
				<th>Prosentase Update Berita</th>
				<th>Logo</th>
				<th>Tampilan UI</th>
				<th>Responsif Button</th>

			</tr>
		</thead>
		<thead>
			<tr>
				<th><select class="form-select" aria-label="Default select example">
			<option selected><b>Presentase Update Berita</b></option>
			<option value="1">Update setiap bulan 100%</option>
			<option value="2">Update tahun ini 70%</option>
			<option value="3">Update maksimal tahun kemarin 50 %</option>
			<option value="3">Update 2 tahun lalu 30%</option>
			<option value="3">Tidak ada / Suspende 0%</option>
			
		</select></th>
		<th><div class="form-check form-check-inline">
		<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
		<label class="form-check-label" for="inlineRadio1">Yes</label>
		</div>
		<div class="form-check form-check-inline">
		<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
		<label class="form-check-label" for="inlineRadio2">NO</label>
		</div></th>
		<th><select class="form-select" aria-label="Default select example">
			<option selected><b>Tampilan UI</b></option>
			<option value="1">Tampilan Menarik: 100%</option>
			<option value="2">Tampilan sama seperti web lain: 60%</option>
			<option value="3">Tidak ada / Suspende 0%</option>
			
		</select></th>
		<th><select class="form-select" aria-label="Default select example">
			<option selected><b>Responsif Button</b></option>
			<option value="1">Responsif semua: 100%</option>
			<option value="2">Responsif lebih banyak : 70%</option>
			<option value="3">Banyak yang error : 50%</option>
			<option value="4">Tidak ada / Suspende 0%</option>
		</select></th>

</tr>
</table>
<table class="table table-bordered">
		<thead>
			<tr>
				<th>CMS</th>
				<th>Bahasa Pemrograman</th>
				<th>Framework</th>
				<th>Web Server</th>
				<th>Tanggal Update Berita Terbaru</th>
				<th>Tanggal Terakhir Update Berita</th>

			</tr>
		</thead>
		<thead>
		
		<th><p>Memakai CMS</p>
		<div class="form-check form-check-inline">
		<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
		<label class="form-check-label" for="inlineCheckbox1">Yes</label>
		</div>
		<div class="form-check form-check-inline">
		<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		<label class="form-check-label" for="inlineCheckbox2">No</label>
		</div>
		<select class="form-select" aria-label="Default select example">
			<option selected><b>Jenis CMS</b></option>
			<option value="1">WordPress</option>
			<option value="2">October CMS</option>
			<option value="3">Other</option>
			<option value="4">Tidak</option>
		</select>
	</th>
	<th><select class="form-select" aria-label="Default select example">
			<option selected><b>Bahasa Pemrograman</b></option>
			<option value="1">PHP</option>
			<option value="2">HTML</option>
			<option value="3">Python</option>
			<option value="4">Other</option>
		</select></th>
		<th>
		<p>Framework</p>
		<div class="form-check form-check-inline">
		<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
		<label class="form-check-label" for="inlineCheckbox1">Yes</label>
		</div>
		<div class="form-check form-check-inline">
		<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		<label class="form-check-label" for="inlineCheckbox2">No</label>
		</div>
			<select class="form-select" aria-label="Default select example">
			<option selected><b>Framework</b></option>
			<option value="1">Laravel</option>
			<option value="2">React</option>
			<option value="3">CodeIgniter</option>
			<option value="4">Angular</option>
			<option value="4">Other</option>
			<option value="4">Tidak</option>
		</select></th>
		<th><p>Webserver</p>
		<div class="form-check form-check-inline">
		<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
		<label class="form-check-label" for="inlineCheckbox1">Yes</label>
		</div>
		<div class="form-check form-check-inline">
		<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		<label class="form-check-label" for="inlineCheckbox2">No</label>
		</div>
		<select class="form-select" aria-label="Default select example">
			<option selected><b>Jenis WebServer</b></option>
			<option value="1">Apache Web Server</option>
			<option value="2">Nginx</option>
			<option value="3">Apache Tomcat</option>
			<option value="4">Xitami Web Server</option>
			<option value="5">Other</option>
			<option value="6">Tidak</option>
		</select>
	</th>
	<th>
	<input type="date" name="tanggal">
	</th>
	<th>
	<input type="date" name="tanggal">
	</th>
		</thead>
</table>
<br>
<p>Lihat Semua Data Yang Tersimpan</p>
<a href="{{ route('monitoringsistems.index') }}" class="btn btn-info">Lihat Monitoring data Sistem</a>
<a href="{{ route('monitorings.index') }}" class="btn btn-primary">Lihat Monitoring Update Berita</a>


@endsection