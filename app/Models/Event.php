<?php

   namespace App\Models;

   use Illuminate\Database\Eloquent\Factories\HasFactory;
   use Illuminate\Database\Eloquent\Model;

   class Event extends Model
   {
       use HasFactory;

       protected $fillable = ['title', 'image_id', 'date', 'address'];

       public function image()
       {
           return $this->belongsTo(Image::class);
       }
   }