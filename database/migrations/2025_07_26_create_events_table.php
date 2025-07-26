<?php

   use Illuminate\Database\Migrations\Migration;
   use Illuminate\Database\Schema\Blueprint;
   use Illuminate\Support\Facades\Schema;

   return new class extends Migration
   {
       public function up()
       {
           Schema::create('events', function (Blueprint $table) {
               $table->id();
               $table->string('title');
               $table->foreignId('image_id')->constrained()->onDelete('cascade');
               $table->date('date');
               $table->string('address');
               $table->timestamps();
           });
       }

       public function down()
       {
           Schema::dropIfExists('events');
       }
   };