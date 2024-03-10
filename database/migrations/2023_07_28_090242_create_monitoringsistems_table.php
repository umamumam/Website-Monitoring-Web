<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateMonitoringsistemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monitoringsistems', function (Blueprint $table) {
            $table->id();
			$table->string('namaweb');
			$table->string('linkweb');
			$table->enum('kategori', ['layanandaninfo', 'opdpemkot', 'kecamatan', 'kelurahan', 'smp', 'sd'])->default('layanandaninfo');
			$table->enum('tampilanui', ['tampilan_menarik_100', 'tampilan_sama_seperti_web_lain_60', 'tidak_ada_suspende_0'])->default('tampilan_sama_seperti_web_lain_60');
			$table->enum('responsifbutton', ['responsif_semua_100', 'responsif_lebih_banyak_70', 'banyak_yang_error_50', 'tidak_ada_suspende_0'])->default('responsif_lebih_banyak_70');
			$table->boolean('cms')->default(false);
			$table->enum('jeniscms', ['wordPress', 'october_cms', 'other', 'tidak'])->default('tidak');
			$table->enum('bahasapemrograman', ['php', 'html', 'python', 'other'])->default('php');
			$table->boolean('framework')->default(false);
			$table->enum('jenisframework', ['Laravel', 'React', 'CodeIgniter', 'Angular', 'Other', 'tidak'])->default('tidak');
			$table->boolean('webserver')->default(false);
			$table->enum('jeniswebserver', ['Apache Web Server', 'Nginx', 'Apache Tomcat', 'Xitami Web Server', 'Other', 'tidak'])->default('tidak');
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
        Schema::dropIfExists('monitoringsistems');
    }
}
