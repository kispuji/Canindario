<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObediencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obediences', function (Blueprint $table) {
            $table->id();
            $table->time('time')->nullable();
            $table->integer('positives');
            $table->integer('negatives');
            $table->integer('failures');
            $table->unsignedBigInteger('dog_id');
            $table->unsignedBigInteger('training_id');
            $table->foreign('dog_id')
                ->references('id')
                ->on('dogs')
                ->onDelete('cascade')
                ->onUpdate('cascade');
             $table->foreign('training_id')
                ->references('id')
                ->on('trainings')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
        Schema::dropIfExists('obediences');
    }
}
