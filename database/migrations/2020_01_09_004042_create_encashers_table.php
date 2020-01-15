<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEncashersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encashers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('bureau_de_change_id');
            $table->unsignedBigInteger('user_id');
            $table->string('biometric_data_left');
            $table->string('biometric_data_right');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('bureau_de_change_id')->references('id')->on('bureau_de_changes');
            $table->foreign('user_id')->references('id')->on('users');
            // $table->index(['bdc_id','user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('encashers');
    }
}
