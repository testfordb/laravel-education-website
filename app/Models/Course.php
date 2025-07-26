<?php

   namespace App\Models;

   use Illuminate\Database\Eloquent\Factories\HasFactory;
   use Illuminate\Database\Eloquent\Model;

   class Course extends Model
   {
       use HasFactory;

       protected $fillable = [
           'title', 'image_id', 'category_id', 'level', 'lessons', 'duration', 'price', 'original_price', 'students', 'reviews'
       ];

       public function image()
       {
           return $this->belongsTo(Image::class);
       }

       public function category()
       {
           return $this->belongsTo(Category::class);
       }
   }