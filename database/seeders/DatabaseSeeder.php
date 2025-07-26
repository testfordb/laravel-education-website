<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Category;
use App\Models\Course;
use App\Models\Event;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Images
        $images = [
            Image::create(['path' => 'assets/images/hero-banner.png']),
            Image::create(['path' => 'assets/images/hero-abs-1.png']),
            Image::create(['path' => 'assets/images/hero-abs-2.png']),
            Image::create(['path' => 'assets/images/about-banner.jpg']),
            Image::create(['path' => 'assets/images/about-abs-1.jpg']),
            Image::create(['path' => 'assets/images/about-abs-2.jpg']),
            Image::create(['path' => 'assets/images/course-1.jpg']),
            Image::create(['path' => 'assets/images/course-2.jpg']),
            Image::create(['path' => 'assets/images/course-3.jpg']),
            Image::create(['path' => 'assets/images/course-4.jpg']),
            Image::create(['path' => 'assets/images/course-5.jpg']),
            Image::create(['path' => 'assets/images/course-6.jpg']),
            Image::create(['path' => 'assets/images/cta-banner.jpg']),
            Image::create(['path' => 'assets/images/event-1.jpg']),
            Image::create(['path' => 'assets/images/event-2.jpg']),
            Image::create(['path' => 'assets/images/event-3.jpg']),
        ];

        // Categories
        $categories = [
            Category::create(['name' => 'Personal Development', 'course_count' => 39]),
            Category::create(['name' => 'Human Research', 'course_count' => 24]),
            Category::create(['name' => 'Art & Design', 'course_count' => 39]),
            Category::create(['name' => 'Business Management', 'course_count' => 39]),
            Category::create(['name' => 'Web Development', 'course_count' => 39]),
            Category::create(['name' => 'Lifestyle', 'course_count' => 39]),
            Category::create(['name' => 'Digital Marketing', 'course_count' => 39]),
            Category::create(['name' => 'Data Sciences', 'course_count' => 39]),
            Category::create(['name' => 'Health & Fitness', 'course_count' => 39]),
        ];

        // Courses
        Course::create([
            'title' => 'Competitive Strategy law for all students',
            'image_id' => $images[6]->id,
            'category_id' => $categories[0]->id,
            'level' => 'Intermediate',
            'lessons' => 35,
            'duration' => '18h 15m 44s',
            'price' => 29.00,
            'original_price' => 39.00,
            'students' => 47,
            'reviews' => 18,
        ]);
        Course::create([
            'title' => 'Machine Learning A-Z: Hands-On Python and java',
            'image_id' => $images[7]->id,
            'category_id' => $categories[4]->id,
            'level' => 'Advanced',
            'lessons' => 48,
            'duration' => '18h 15m 44s',
            'price' => 0.00,
            'original_price' => null,
            'students' => 65,
            'reviews' => 18,
        ]);
        Course::create([
            'title' => 'Achieving Advanced in Insights with Big',
            'image_id' => $images[8]->id,
            'category_id' => $categories[7]->id,
            'level' => 'Basic',
            'lessons' => 80,
            'duration' => '18h 15m 44s',
            'price' => 59.00,
            'original_price' => 69.00,
            'students' => 42,
            'reviews' => 18,
        ]);
        Course::create([
            'title' => 'Education Makes A Person A Responsible Citizen',
            'image_id' => $images[9]->id,
            'category_id' => $categories[0]->id,
            'level' => 'Intermediate',
            'lessons' => 31,
            'duration' => '18h 15m 44s',
            'price' => 49.00,
            'original_price' => 59.00,
            'students' => 46,
            'reviews' => 18,
        ]);
        Course::create([
            'title' => 'Building A Better World One Student At A Time',
            'image_id' => $images[10]->id,
            'category_id' => $categories[0]->id,
            'level' => 'Advanced',
            'lessons' => 36,
            'duration' => '18h 15m 44s',
            'price' => 29.00,
            'original_price' => 39.00,
            'students' => 91,
            'reviews' => 18,
        ]);
        Course::create([
            'title' => 'Education is About Forming Faithful Disciples',
            'image_id' => $images[11]->id,
            'category_id' => $categories[0]->id,
            'level' => 'Basic',
            'lessons' => 21,
            'duration' => '18h 15m 44s',
            'price' => 79.00,
            'original_price' => 89.00,
            'students' => 22,
            'reviews' => 18,
        ]);

        // Events
        Event::create([
            'title' => 'Innovation & Technological Entrepreneurship Team',
            'image_id' => $images[13]->id,
            'date' => '2023-12-04',
            'address' => 'Alpaca Way Anaheim, CA 92805',
        ]);
        Event::create([
            'title' => 'Virtual Spring Part-time Jobs Fair for Student',
            'image_id' => $images[14]->id,
            'date' => '2023-12-04',
            'address' => 'Ritter Avenue Detroit, MI 48226',
        ]);
        Event::create([
            'title' => 'Explorations of Regional Chief Executive Network',
            'image_id' => $images[15]->id,
            'date' => '2023-09-18',
            'address' => 'Stout Street York, PA 17401',
        ]);
    }
}