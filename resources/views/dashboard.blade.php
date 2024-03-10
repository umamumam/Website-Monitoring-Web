@extends('layouts.app')

@section('title', 'Dashboard')

@section('contents')
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                Data Web Yang Terdaftar sesuai Kategori</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">6 Web</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-calendar fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                Total Semua Web</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">638 web</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks
              </div>
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">80%</div>
                </div>
                <div class="col">
                  <div class="progress progress-sm mr-2">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                Admin</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">5</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-comments fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="card text-center">
  <div class="card-header">
    Grafik Data Web
  </div>
  <div class="card-body">
  <html>
<head>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div style="width: 80%; margin: auto;">
        <canvas id="chart1"></canvas>
        <canvas id="chart2"></canvas>
    </div>

    <script>
        // Data awal untuk diagram 1
        var dataChart1 = [25, 44, 16, 177, 44, 332];
        var labelsChart1 = ["Data web Layanan & Info", "Data web OPD Pemkot", "Data web Kecamatan", "Data web Kelurahan", "Data Web SMP", "Data Web SD"];

        // Data awal untuk diagram 2
        var dataChart2 = [4, 5, 5, 1, 1, 1];
        var labelsChart2 = ["Data web Layanan & Info", "Data web OPD Pemkot", "Data web Kecamatan", "Data web Kelurahan", "Data Web SMP", "Data Web SD"];

        // Fungsi untuk mengupdate diagram
        function updateChart(canvasId, data, labels, label) {
            var ctx = document.getElementById(canvasId).getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: label,
                        data: data,
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        }

        // Fungsi untuk menambahkan data baru ke dalam diagram
        function addDataToChart(chartNumber) {
            var inputNumber;
            var data;
            var labels;
            var canvasId;

            if (chartNumber === 1) {
                inputNumber = parseInt(document.getElementById('inputNumber1').value);
                data = dataChart1;
                labels = labelsChart1;
                canvasId = 'chart1';
            } else if (chartNumber === 2) {
                inputNumber = parseInt(document.getElementById('inputNumber2').value);
                data = dataChart2;
                labels = labelsChart2;
                canvasId = 'chart2';
            } else {
                alert('Nomor diagram tidak valid!');
                return;
            }

            // Cek apakah inputNumber adalah angka yang valid
            if (!isNaN(inputNumber)) {
                data.push(inputNumber);
                labels.push("Data " + (data.length));

                // Perbarui diagram dengan data baru
                updateChart(canvasId, data, labels, 'Diagram ' + chartNumber);
            } else {
                alert('Masukkan angka yang valid!');
            }
        }

        // Panggil fungsi untuk membuat diagram awal saat halaman dimuat
        updateChart('chart1', dataChart1, labelsChart1, 'Data Web Keseluruhan');
        updateChart('chart2', dataChart2, labelsChart2, 'Data Web yang Sudah Dimonitoring');
    </script>
</body>
</html>
</div>
  </div>
<br>

  <div class="row">
  <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Perolehan Data</h6>
        </div>
        <div class="card-body">
          <div class="text-center">
            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 100rem;" src="https://diskominfo.semarangkota.go.id/uploads/sliders/20230728191500-2023-07-28sliders191453.jpg" alt="...">
          </div>
          <p>Data Laporan Kerja Praktek Miftachul Umam diperoleh dari Diskominfo Kota Semarang Adapun Link nya adalah sebagai berikut!</p>
          <a target="_blank" rel="nofollow" href="https://docs.google.com/spreadsheets/d/1P0spHiPkj7jfg_yW0_9vPskWqbWD3ARZ/edit?usp=sharing&ouid=118009222441034751890&rtpof=true&sd=true">Data Monitoring WEB Diskominfo Semarang &rarr;</a>
        </div>
      </div>
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Gambaran Umum Diskominfo Semarang</h6>
        </div>
        <div class="card-body">
          <p>Berdasarkan Peraturan Walikota Nomor 76 Tahun 2016, Dinas Komunikasi, Informatika, Statistik dan Persandian Kota Semarang atau disebut DISKOMINFO Kota Semarang merupakan unsur pelaksana urusan pemerintahan yang dipimpin oleh seorang Kepala Dinas dan ditugaskan membantu Walikota Semarang melaksanakan urusan pemerintahan dalam bidang Komunikasi, Informatika, Statistik Dan Persandian yang menjadi kewenangan daerah dan tugas pembantuan yang ditugaskan kepada daerah.</p>
          <p>Tugas pembantuan DISKOMINFO yang dimaksudkan diatas adalah penugasan dari Pemerintah Pusat kepada Daerah, untuk melaksanakan sebagian urusan pemerintahan, yang menjadi kewenangan Pemerintah Pusat atau dari Pemerintah Daerah Provinsi kepada Daerah, untuk melaksanakan sebagian urusan pemerintahan yang menjadi kewenangan Daerah Provinsi.</p>
        </div>
      </div>

    
 
  
@endsection