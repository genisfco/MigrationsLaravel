<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDentistsTable extends Migration
{
    public function up()
    {
        Schema::create('dentists', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('cro', 12);
            $table->string('rg', 9);
            $table->string('cpf', 11);
            $table->string('specialty_1');
            $table->string('specialty_2')->nullable();
            $table->string('email')->nullable();
            $table->bigInteger('phone')->nullable();
            $table->bigInteger('cellphone');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dentists');
    }
}
