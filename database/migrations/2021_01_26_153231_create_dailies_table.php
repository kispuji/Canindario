<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDailiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dailies', function (Blueprint $table) {
            $table->id();
            $table->string('type', 45);
            $table->time('duration');
            $table->double('meters');
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
        Schema::dropIfExists('dailies');
    }
}
