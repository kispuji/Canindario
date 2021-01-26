<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetectionsSustancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detections_sustances', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sustance_id');
            $table->unsignedBigInteger('detection_id');
            $table->foreign('sustance_id')
                ->references('id')
                ->on('sustances')
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
        Schema::dropIfExists('detections_sustances');
    }
}
