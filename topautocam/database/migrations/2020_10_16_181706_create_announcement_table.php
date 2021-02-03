<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnouncementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('announcement', function (Blueprint $table) {
            $table->increments('id');

            $table->string('top_title_en', 32)->unique();
            $table->string('top_title_kh', 64)->unique();

            $table->string('title_en', 64)->unique();
            $table->string('title_kh', 128)->unique();

            $table->string('bottom_title_en', 32)->unique();
            $table->string('bottom_title_kh', 64)->unique();
            
            $table->string('image', 64);
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
        Schema::dropIfExists('announcement');
    }
}
