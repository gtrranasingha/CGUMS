<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplyJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apply_jobs', function (Blueprint $table) {
            $table->id();
            $table->string('comp_name',200)->nullable();
            $table->bigInteger('jv_id')->nullable();
            $table->string('st_uid',20)->nullable();
            $table->string('jv_name',200);
            $table->string('st_name',200);
            $table->string('st_email',200);
            $table->string('st_cv',200);
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
        Schema::dropIfExists('apply_jobs');
    }
}
