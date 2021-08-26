<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCareerCounsellorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('career__counsellors', function (Blueprint $table) {
            $table->increments('CC_id',20);
            $table->string('f_name',50);
            $table->string('l_name',100);
            $table->string('role',100);
            $table->string('email',100)->unique();
            $table->string('notices',1000);
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
        Schema::dropIfExists('career__counsellors');
    }
}
