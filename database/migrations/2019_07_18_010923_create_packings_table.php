<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('shift', ['1', '2']);
            $table->enum('machine', ['Manual', 'Horizontal', 'Vertikal']);
            $table->time('start');
            $table->time('finish');
            $table->tinyInteger('carton')->unsigned();
            $table->tinyInteger('person')->unsigned();
            $table->text('description');
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
        Schema::dropIfExists('packings');
    }
}
