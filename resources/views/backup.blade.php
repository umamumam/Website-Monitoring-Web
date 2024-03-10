
@extends('layouts.app')
  
@section('title', 'Dashboard - KP MIFTACHUL UMAM')
  
@section('contents')
  <div class="row">
    Dashboard
    <div class="d-grid gap-2 col-6 mx-auto">
  
  
</div>
    <div class="d-grid gap-2 col-6 mx-auto"><a href="{{ route('layanandaninfos.index') }}" class="btn btn-info">Web Layanan dan Info</a></div>
    <div class="d-grid gap-2 col-6 mx-auto"><a href="{{ route('opdpemkots.index') }}" class="btn btn-info">Web OPD Pemkot</a></div>
    <div class="d-grid gap-2 col-6 mx-auto"><a href="{{ route('kecamatans.index') }}" class="btn btn-info">Web Kecamatan</a></div>
    <div class="d-grid gap-2 col-6 mx-auto"><a href="{{ route('kelurahans.index') }}" class="btn btn-info">Web Kelurahan</a></div>
    <div class="d-grid gap-2 col-6 mx-auto"><a href="{{ route('smps.index') }}" class="btn btn-info">Web SMP</a></div>
    <div class="d-grid gap-2 col-6 mx-auto"><a href="{{ route('sds.index') }}" class="btn btn-info">Web SD</a></div>
  </div>
  <div class="col-xl-4 col-lg-5">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Data WEB</h6>
          <div class="dropdown no-arrow">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
              <div class="dropdown-header">Dropdown Header:</div>
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div>
        </div>


        <div class="card-body">
          <div class="chart-pie pt-4 pb-2">
          
            <h3><a href="{{ route('layanandaninfos.index') }}" ># Web Layanan & Info</a></h3>
            <h3><a href="{{ route('opdpemkots.index') }}"># Web OPD Pemkot</a></h3>
            <h3><a href="{{ route('kecamatans.index') }}"># Web Kecamatan</a></h3>
            <h3><a href="{{ route('kelurahans.index') }}"># Web Kelurahan</a></h3>
            <h3><a href="{{ route('smps.index') }}"> # Web SMP</a></h3>
            <h3><a href="{{ route('sds.index') }}"># Web SD</a></h3>
            <canvas id="myPieChart">
            </canvas>
          </div>
          
        </div>
      </div>
    </div>
  </div>
  <p>http://infokegiatan.semarangkota.go.id</p>

<p>http://ppid.semarangkota.go.id

disdik.semarangkota.go.id/v15/main/jurnal

http://uhc.semarangkota.go.id

http://gebersepti.semarangkota.go.id

http://dpu.semarangkota.go.id

http://transsemarang.semarangkota.go.id

http://wissemar.semarangkota.go.id

sekolahberkarakter.semarangkota.go.id

http://rdrm.semarangkota.go.id

http://apbs.semarangkota.go.id

http://infoukm.semarangkota.go.id

http://infowisata.semarangkota.go.id

http://infowisata.ukm.semarangkota.go.id

http://jadwalpip.semarangkota.go.id

http://kreditwibawa.semarangkota.go.id

http://laporhendi.semarangkota.go.id

http://pip.semarangkota.go.id

http://wifipublik.semarangkota.go.id

http://analitik.semarangkota.go.id

http://e-radio.semarangkota.go.id

http://jalanpu.semarangkota.go.id

http://jdihukum.semarangkota.go.id

http://p3m.semarangkota.go.id

http://silaga.semarangkota.go.id/

</p>

<br>
<div class="card text-center">
  <div class="card-header">
    Kategori WEB
  </div>
  <div class="card-body">
	
  <a href="#" class="btn btn-primary">Layanan & Info</a>
  <a href="#" class="btn btn-primary">OPD Pemkot</a>
  <a href="#" class="btn btn-primary">Kecamatan</a>
  <a href="#" class="btn btn-primary">Kelurahan</a>
  <a href="#" class="btn btn-primary">SMP</a>
  <a href="#" class="btn btn-primary">SD</a>
  <br>
  
  </div>
</div>


$table->enum('tampilan_ui', ['Tampilan Menarik: 100%', 'Tampilan sama seperti web lain: 60%', 'Tidak ada / Suspende 0%'])->default('Tampilan Menarik: 100%');
            $table->enum('responsif_button', ['Responsif semua: 100%', 'Responsif lebih banyak : 70%', 'Banyak yang error : 50%', 'Tidak ada / Suspende 0%'])->default('Responsif semua: 100%');
            $table->boolean('memakai_cms')->default(false);
            $table->enum('jenis_cms', ['WordPress', 'October CMS', 'Other', 'tidak'])->default('tidak');
            $table->enum('bahas_pemrograman', ['php', 'html', 'Python', 'other'])->default('php');
            $table->boolean('memakai_framework')->default(false);
            $table->enum('jenis_framework', ['Laravel', 'React', 'PytCodeIgniterhon', 'other', 'tidak'])->default('tidak');
            $table->boolean('web_server')->default(false);
            $table->enum('web_server', ['Apache Web Server', 'Nginx', 'Apache Tomcat', 'Xitami Web Server', 'Other', 'tidak'])->default('tidak');


            <div class="card text-center">
  <div class="card-header">
    Daftar Kategori WEB
  </div>
  <div class="card-body">
    <div class="row">
  <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">WEB Layanan & Info</h5>
        <div class="card" style="width: 35rem;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><a href="#">http://infokegiatan.semarangkota.go.id</a></li>
    <li class="list-group-item">http://ppid.semarangkota.go.id</li>
    <li class="list-group-item">disdik.semarangkota.go.id/v15/main/jurnal</li>
    <li class="list-group-item">http://uhc.semarangkota.go.id</li>
    <li class="list-group-item">http://gebersepti.semarangkota.go.id</li>
    <li class="list-group-item">http://dpu.semarangkota.go.id</li>
    <li class="list-group-item">http://transsemarang.semarangkota.go.id</li>
    <li class="list-group-item">http://wissemar.semarangkota.go.id</li>
    <li class="list-group-item">sekolahberkarakter.semarangkota.go.id</li>
    <li class="list-group-item">http://rdrm.semarangkota.go.id</li>
    <li class="list-group-item">http://apbs.semarangkota.go.id</li>
    <li class="list-group-item">http://infoukm.semarangkota.go.id</li>
    <li class="list-group-item">http://infowisata.semarangkota.go.id</li>
    <li class="list-group-item">http://infowisata.ukm.semarangkota.go.id</li>
    <li class="list-group-item">http://jadwalpip.semarangkota.go.id</li>
    <li class="list-group-item">http://kreditwibawa.semarangkota.go.id</li>
    <li class="list-group-item">http://laporhendi.semarangkota.go.id</li>
    <li class="list-group-item">http://pip.semarangkota.go.id</li>
    <li class="list-group-item">http://wifipublik.semarangkota.go.id</li>
    <li class="list-group-item">http://analitik.semarangkota.go.id</li>
    <li class="list-group-item">http://e-radio.semarangkota.go.id</li>
    <li class="list-group-item">http://jalanpu.semarangkota.go.id</li>
    <li class="list-group-item">http://jdihukum.semarangkota.go.id</li>
    <li class="list-group-item">http://p3m.semarangkota.go.id</li>
    <li class="list-group-item">http://silaga.semarangkota.go.id/</li>
    
  </ul>
</div>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">WEB OPD Pemkot</h5>
        inovasi.semarangkota.go.id
baghukum.semarangkota.go.id
dishub.semarangkota.go.id
gebersepti.semarangkota.go.id
humas.semarangkota.go.id
diskominfo.semarangkota.go.id
dprd.semarangkota.go.id
damkar.semarangkota.go.id
dispertan.semarangkota.go.id
bpbd.semarangkota.go.id
bkpp.semarangkota.go.id
dispendukcapil.semarangkota.go.id
dinkes.semarangkota.go.id
dp3a.semarangkota.go.id
inspektorat.semarangkota.go.id
pariwisata.semarangkota.go.id
bagorganisasi.semarangkota.go.id
perikanan.semarangkota.go.id
disperin.semarangkota.go.id
dlh.semarangkota.go.id
rsud.semarangkota.go.id
disdaldukkb.semarangkota.go.id
dispora.semarangkota.go.id
otda.semarangkota.go.id
dpu.semarangkota.go.id
disperkim.semarangkota.go.id
kotasehat.semarangkota.go.id
kesbangpol.semarangkota.go.id
rdrm.semarangkota.go.id
satpolpp.semarangkota.go.id
bagrumahtangga.semarangkota.go.id
bpkad.semarangkota.go.id
bagkesra.semarangkota.go.id
organisasi.semarangkota.go.id
bagperekonomian.semarangkota.go.id
portalsetda.semarangkota.go.id
bagtatausaha.semarangkota.go.id
portalsetda.semarangkota.go.id
dekranasda.semarangkota.go.id
portalkecamatan.semarangkota.go.id
dpmptsp.semarangkota.go.id
portalsmpn.semarangkota.go.id
disperdag.semarangkota.go.id
balapanbaja.semarangkota.go.id
        <div class="card" style="width: 35rem;">
    <ul class="list-group list-group-flush">
    <li class="list-group-item">http://infokegiatan.semarangkota.go.id</li>
    <li class="list-group-item"></li>
  </ul>
</div>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
</div>
  </div>
  </div>
<br>
            @endsection