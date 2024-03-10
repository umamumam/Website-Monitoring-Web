<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateDataweb1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dataweb1s', function (Blueprint $table) {
            $table->id();
			$table->string('kategori');
			$table->integer('weblayananinfo');
			$table->integer('webopdpemkot');
			$table->integer('webkecamatan');
			$table->integer('webkelurahan');
			$table->integer('websmp');
			$table->integer('websd');
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
        Schema::dropIfExists('dataweb1s');
    }
}
