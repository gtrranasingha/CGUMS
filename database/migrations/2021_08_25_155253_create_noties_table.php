<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noties', function (Blueprint $table) {
            $table->id();
            $table->string('title',50);
            $table->string('note',225);
            $table->string('date',20);
            $table->string('time',10);
            $table->string('link1',225)->nullable();
            $table->string('link2',225)->nullable();
            $table->string('attachment',100)->nullable();
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
        Schema::dropIfExists('noties');
    }
}
