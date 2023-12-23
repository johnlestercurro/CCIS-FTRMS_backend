<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('_faculty', function (Blueprint $table) {
            $table->id('faculty_id');
            $table->string('faculty_name');
            $table->integer('contact_number');
            $table->string('email');
            $table->date('date_hired');
            $table->timestamps();
        });
        Schema::table('_faculty', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
         
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_faculty');
    }
};
