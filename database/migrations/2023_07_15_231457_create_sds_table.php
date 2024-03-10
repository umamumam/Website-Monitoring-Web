<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateSdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sds', function (Blueprint $table) {
            $table->id();
			$table->string('namaweb');
			$table->string('linkweb');
			$table->string('deskripsi');
			$table->string('status');
			$table->string('haripemantauan');
			$table->text('keterangan');
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
        Schema::dropIfExists('sds');
    }
}
