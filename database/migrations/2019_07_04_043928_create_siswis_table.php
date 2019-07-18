<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('umur');
            $table->text('alamat');
            $table->string('no-hp');
            $table->string('golongan-darah');
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
        Schema::dropIfExists('siswis');
    }
}
