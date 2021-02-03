<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTitleDetailToPartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('part', function (Blueprint $table) {
            //
            $table->string('title', 32)->nullable();
            $table->text('detail', 102400)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('part', function (Blueprint $table) {
            //
            $table->dropColumn('title');
            $table->dropColumn('detail');
        });
    }
}
