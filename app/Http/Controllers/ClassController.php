<?php

namespace App\Http\Controllers;

use App\Models\ClassModel;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    /**
     * Display the classes page.
     */
    public function index()
    {
        return view('classes');
    }

    /**
     * Display the instructors page.
     */
    public function instructors()
    {
        return view('instructors');
    }

    /**
     * Display the testimonials page.
     */
    public function testimonials()
    {
        return view('testimonials');
    }

    /**
     * Display the user schedule page with database data.
     */
    public function schedule()
    {
        $classes = ClassModel::with('instructor')
            ->where('status', 'available')
            ->orderBy('date', 'asc')
            ->orderBy('start_time', 'asc')
            ->get();
            
        return view('user.schedule', compact('classes'));
    }
}
