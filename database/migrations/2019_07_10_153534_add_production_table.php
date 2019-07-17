<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProductionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('shift', ['1', '2']);
            $table->enum('divisi', ['Bollmill', 'Oven Tunnel', 'Coating', 'Boiler', 'Permen']);
            $table->time('start');
            $table->time('finish');
            $table->tinyInteger('batch')->unsigned();
            $table->float('wip')->unsigned();
            $table->float('bs')->unsigned();
            $table->float('gas')->unsigned();
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
        Schema::dropIfExists('productions');
    }
}
