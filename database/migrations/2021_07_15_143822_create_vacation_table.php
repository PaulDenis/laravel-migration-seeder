<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacation', function (Blueprint $table) {
            $table->id();
            $table->char('name', 30);
            $table->char('description', 100);
            $table->boolean('spots_avalable');
            $table->float('cost', 6, 2); // 9999,99
            $table->char('from', 50);
            $table->date('departure');
            $table->char('to', 50);
            $table->date('arrival');
            $table->integer('n_of_persons');
            $table->smallInteger('duration')->unsigned();
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
        Schema::dropIfExists('vacation');
    }
}
