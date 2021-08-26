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
            $table->id();
            $table->string('Jv_description',2000);
            $table->string('comp_description',2000);
            $table->string('Jv_respon',2000);
            $table->string('Jv_que',2000);
            $table->string('Jv_addinfo',2000);
            $table->string('Jv_name',100);
            $table->string('comp_name',100);
            $table->string('Jv_type',50);
            $table->string('img_path',200)->nullable();
            $table->date('Jv_essudate');
            $table->string('Jv_deadline');
            $table->boolean('confirmed')->default(false);
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
