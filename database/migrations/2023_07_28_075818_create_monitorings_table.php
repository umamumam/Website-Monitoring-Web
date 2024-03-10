<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateMonitoringsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monitorings', function (Blueprint $table) {
            $table->id();
			$table->string('namaweb');
			$table->string('linkweb');
			$table->enum('kategori', ['layanandaninfo', 'opdpemkot', 'kecamatan', 'kelurahan', 'smp', 'sd'])->default('layanandaninfo');
			$table->enum('status', ['active', 'suspend'])->default('active');
			$table->boolean('logo')->default(false);
			$table->enum('presentaseupdateberita', ['Update_setiap_bulan_100', 'Update_tahun_ini_70', 'Update_maksimal_tahun_kemarin_50', 'Update_2_tahun_lalu_30', 'Tidak_ada_Suspende_0'])->default('Update_setiap_bulan_100');
			$table->date('tanggalupdateterbaru');
			$table->date('terakhirupdate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('monitorings');
    }
}
