<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->increments('s_no',20);
            $table->string('St_id',20)->nullable();
            $table->string('s_type',50);
            $table->string('s_date');
            $table->string('s_time');
            $table->boolean('confirmed')->default(false);
            $table->timestamps();

            $table->foreign('St_id')->references('St_id')->on('students')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sessions');
    }
}
