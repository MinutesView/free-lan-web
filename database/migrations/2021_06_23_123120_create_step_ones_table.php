<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStepOnesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('step_ones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sellerId');
            $table->string('profilePic');
            $table->text('bio');
            $table->text('gender');
            $table->text('category');
            $table->text('experience');
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
        Schema::dropIfExists('step_ones');
    }
}
