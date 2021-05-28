<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobVacanciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job__vacancies', function (Blueprint $table) {
            $table->string('Jv_id',20);
            $table->primary('Jv_id');
            $table->string('Jv_description',2000);
            $table->string('Jv_name',100);
            $table->string('Jv_type',50);
            $table->string('location',200);
            $table->string('area',100);
            $table->date('Jv_deadline');
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
        Schema::dropIfExists('job__vacancies');
    }
}
