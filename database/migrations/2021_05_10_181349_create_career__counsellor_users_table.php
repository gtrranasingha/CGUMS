<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCareerCounsellorUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('career__counsellor_users', function (Blueprint $table) {
            $table->id();
            $table->string('name',20)->unique();
            $table->string('coun_name',200)->unique();
            $table->string('password',225);
            $table->string('role',100)->nullable();
            $table->tinyInteger('is_deleted')->default(0);
            $table->rememberToken();
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
        Schema::dropIfExists('career__counsellor_users');
    }
}
