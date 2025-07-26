<?php

   use Illuminate\Database\Migrations\Migration;
   use Illuminate\Database\Schema\Blueprint;
   use Illuminate\Support\Facades\Schema;

   return new class extends Migration
   {
       public function up()
       {
           Schema::create('courses', function (Blueprint $table) {
               $table->id();
               $table->string('title');
               $table->foreignId('image_id')->constrained()->onDelete('cascade');
               $table->foreignId('category_id')->constrained()->onDelete('cascade');
               $table->string('level');
               $table->integer('lessons');
               $table->string('duration');
               $table->decimal('price', 8, 2)->nullable();
               $table->decimal('original_price', 8, 2)->nullable();
               $table->integer('students');
               $table->integer('reviews');
               $table->timestamps();
           });
       }

       public function down()
       {
           Schema::dropIfExists('courses');
       }
   };