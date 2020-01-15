<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQueuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('queues', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('encasher_id');
            $table->unsignedBigInteger('bureau_de_change_id');
            $table->bigInteger('queue_no');
            $table->boolean('is_active');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('encasher_id')->references('id')->on('encashers');
            $table->foreign('bureau_de_change_id')->references('id')->on('bureau_de_changes');
            // $table->index(['encasher_id','bdc_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('queues');
    }
}
