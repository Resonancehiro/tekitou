<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class T extends Migration
{

    public function up()
    {
        Schema::create('t', function (Blueprint $table) {
            $table->increments('id');
            $table->string('text',500);
            $table->string('explanation',5000);
            $table->string('A',500);
            $table->string('B',500);
            $table->string('C',500);
            $table->string('D',500);
            $table->string('answer',4);
            $table->string('year',3);
            $table->string('season',2);



        });
    }

    public function down()
    {
        Schema::dropIfExists('t');
    }


}
