<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateDatawebsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datawebs', function (Blueprint $table) {
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
        Schema::dropIfExists('datawebs');
    }
}
