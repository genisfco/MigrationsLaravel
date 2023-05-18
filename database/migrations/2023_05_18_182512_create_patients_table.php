<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('rg', 9);
            $table->string('cpf', 11);
            $table->dateTime('birth_date');
            $table->string('gender', 9);
            $table->string('email')->nullable();
            $table->bigInteger('phone')->nullable();
            $table->bigInteger('cellphone');
            $table->string('zip_code', 8)->nullable();
            $table->string('address')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('patients');
    }
}

