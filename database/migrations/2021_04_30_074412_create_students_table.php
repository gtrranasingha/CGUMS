<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('St_id',20)->unique();
            $table->string('f_name',50);
            $table->string('l_name',100);
            $table->string('personal_email',100);
            $table->string('uni_email',100)->unique();
            $table->string('mobile',20);
            $table->string('per_address',200);
            $table->string('mob_address',200);
            $table->string('nic',20)->unique();
            $table->string('faculty',10);
            $table->string('degree',10);
            $table->string('gpa',10);
            $table->string('cv',100)->nullable();
            $table->string('image',100)->nullable();
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
        Schema::dropIfExists('students');
    }
}
