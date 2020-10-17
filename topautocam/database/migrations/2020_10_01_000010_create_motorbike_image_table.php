<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMotorbikeImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motorbike_image', function (Blueprint $table) {
            $table->increments('id');

            // many-to-one
            $table->integer('motorbike_id')->unsigned()->nullable();
            $table->foreign('motorbike_id')->references('id')->on('motorbike')
                ->onUpdate('cascade')->onDelete('set null');

            $table->string('name', 64);

            $table->softDeletes();
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
        Schema::dropIfExists('motorbike_image');
    }
}
