<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_teachers', function (Blueprint $table) {
            $table->id('idTeacher')->autoIncrement();
            $table->string('teaFirstName', 50);
            $table->string('teaLastName', 50);
            $table->char('teaGender', 1);
            $table->string('teaSurname', 255);
            $table->string('teaOrigin', 510);
            $table->unsignedBigInteger('fkSection');
            $table->foreign('fkSection')->references('idSection')->on('t_sections');
            $table->nullableTimestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_teachers');
    }
};
