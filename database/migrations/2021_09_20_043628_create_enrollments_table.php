<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnrollmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrollments', function (Blueprint $table) {
            $table->id();
            $table->integer('P_id',false)->nullable();
            $table->string('St_id',20)->nullable();
            $table->timestamps();
            $table->foreign('St_id')->references('St_id')->on('students')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('P_id')->references('P_id')->on('programmes')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enrollments');
    }
}
