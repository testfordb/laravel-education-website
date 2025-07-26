<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Event;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $courses = Course::with('image', 'category')->get();
        $events = Event::with('image')->get();
        return view('home', compact('categories', 'courses', 'events'));
    }
}