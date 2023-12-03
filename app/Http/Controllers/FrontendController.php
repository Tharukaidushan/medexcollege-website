<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Category;
use App\Models\Course;
use App\Models\GeneralSettings;
use App\Models\Syllabus;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        $categories = Category::where('status', 1)->orderBy('order_by', 'asc')->select('name', 'id')->get();
        $courses = Course::where('status', 1)->orderBy('order_by', 'asc')->with(['category', 'teacher'])->get();
        
        return view('pages.home', compact('categories', 'courses'));
    }

    public function about()
    {
        $about = About::where('id', 2)->first();
        return view('pages.about', compact('about'));
    }

    public function contact()
    {
        $general = GeneralSettings::find(1);
        $courses = Course::where('status', 1)->orderBy('order_by', 'asc')->select('id', 'title')->get();
        return view('pages.contact', compact('general', 'courses'));
    }

    public function courseInner($slug)
    {
        $course = Course::where('slug', $slug)->first();
        $contents = Syllabus::where('course_id', $course->id)->first();
        return view('pages.course-inner', compact('course', 'contents'));
    }
}
