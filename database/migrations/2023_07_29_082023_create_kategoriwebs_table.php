<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateKategoriwebsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategoriwebs', function (Blueprint $table) {
            $table->id();
			$table->string('weblayanandaninfo');
			$table->string('webopdpemkot');
			$table->string('webkecamatan');
			$table->string('webkelurahan');
			$table->string('websmp');
			$table->string('websd');
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
        Schema::dropIfExists('kategoriwebs');
    }
}
