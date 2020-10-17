<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMotorbikeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motorbike', function (Blueprint $table) {
            $table->increments('id');

            // many-to-one
            $table->integer('order_id')->unsigned()->nullable();
            $table->foreign('order_id')->references('id')->on('order')
                ->onUpdate('cascade')->onDelete('set null');

            $table->string('image', 64)->nullable();
            $table->decimal('price', 8, 2)->unsigned()->nullable();
            $table->string('code', 32)->unique()->nullable();
            $table->string('vin', 64)->unique()->nullable();
            $table->string('make', 32)->nullable();
            $table->string('model', 32)->nullable();
            $table->string('color', 32)->nullable();
            $table->enum('status', config('enums.INVENTORY_STATUS'))
                ->default(config('enums.INVENTORY_STATUS.IN_STOCK'));
            $table->enum('selected', config('enums.SELECTED'))
                ->default(config('enums.SELECTED.NORMAL'));
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
        Schema::dropIfExists('motorbike');
    }
}
