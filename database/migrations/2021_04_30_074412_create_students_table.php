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
            $table->string('St_id',20);
            $table->primary('St_id');
            $table->string('f_name',50);
            $table->string('l_name',100);
            $table->string('email',100)->unique();
            $table->string('password',50);
            $table->string('mobile',20);
            $table->string('address',200);
            $table->date('dob');
            $table->string('nic',20)->unique();
            $table->string('faculty',100);
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
