<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBackingtracks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('backingtracks', function (Blueprint $table) {
            $table->increments('id_backingtracks');
            $table->string('artist');
            $table->string('song');
            $table->string('playmusic');
            $table->string('presetguitar');
			$table->string('software');
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
        Schema::dropIfExists('backingtracks');
    }
}
