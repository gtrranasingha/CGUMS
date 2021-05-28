<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

class CreateCGUDirectorUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c_g_u__director_users', function (Blueprint $table) {
            $table->id();
            $table->string('name',20)->unique();
           // $table->primary('name');
            $table->string('nic',12)->unique();
            $table->string('dir_name',200)->unique();
            $table->string('password',225);
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
        Schema::dropIfExists('c_g_u__director_users');
    }
}
