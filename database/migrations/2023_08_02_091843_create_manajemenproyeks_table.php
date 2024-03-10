<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateManajemenproyeksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manajemenproyeks', function (Blueprint $table) {
            $table->id();
			$table->string('namaweb');
			$table->string('linkweb');
			$table->enum('kategori', ['layanandaninfo', 'opdpemkot', 'kecamatan', 'kelurahan', 'smp', 'sd'])->default('layanandaninfo');
			$table->date('tanggaldibuat');
			$table->date('tanggalselesai');
			$table->enum('danapembuatan', ['1jt', '1,5jt-4jt', '4jt-6jt', 'diatas 6jt'])->default('1,5jt-4jt');
			$table->string('programer');
			$table->string('sistemanalist');
			$table->string('desainer');
			$table->string('tester');
			$table->string('administrator');
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
        Schema::dropIfExists('manajemenproyeks');
    }
}
