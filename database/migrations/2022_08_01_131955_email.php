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
        Schema::create('Email_Feedbacks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('email');
            $table->text('feedback');
            $table->integer('date');
            });
           
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Email_Feedbacks');
    }
};
