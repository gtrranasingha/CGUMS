<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgrammesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programmes', function (Blueprint $table) {
            $table->increments('id',10);
            $table->string('St_id',20)->nullable();
            $table->string('P_type',50);
            $table->string('P_name',100);
            $table->string('P_details',500);
            $table->string('P_resourceperson',30);
            $table->date('P_deadline');
            $table->string('capacity',50);
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
        Schema::dropIfExists('programmes');
    }
}
