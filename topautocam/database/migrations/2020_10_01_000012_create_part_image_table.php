<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('part_image', function (Blueprint $table) {
            $table->increments('id');
            // many-to-one
            $table->integer('part_id')->unsigned()->nullable();
            $table->foreign('part_id')->references('id')->on('part')
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
        Schema::dropIfExists('part_image');
    }
}
