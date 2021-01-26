<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetectionsSearchplacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detections_searchplaces', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('searchplace_id');
            $table->unsignedBigInteger('detection_id');
            $table->foreign('searchplace_id')
                ->references('id')
                ->on('searchplaces')
                ->onDelete('cascade')
                ->onUpdate('cascade');
                $table->foreign('detection_id')
                ->references('id')
                ->on('detections')
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
        Schema::dropIfExists('detections_searchplaces');
    }
}
