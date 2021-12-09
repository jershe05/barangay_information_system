<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHearingSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hearing_sessions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('case_id')->nullable();
            $table->date('date')->nullable();
            $table->time('time')->nullable();
            $table->text('description')->nullable();
            $table->integer('result')->unsigned()->nullable()->default(12)->default('1');
            $table->bigInteger('official')->nullable();
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
        Schema::dropIfExists('hearing_sessions');
    }
}
