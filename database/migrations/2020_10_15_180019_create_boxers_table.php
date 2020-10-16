<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoxersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boxers', function (Blueprint $table) {
            $table->id();

            $table->string('name',32);
            $table->string('division',32);
            $table->string('country');
            $table->integer('wins');
            $table->integer('draws');
            $table->integer('losses');
            $table->text('notes')-> nullable();

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
        Schema::dropIfExists('boxers');
    }
}
