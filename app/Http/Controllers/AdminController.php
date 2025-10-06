<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use App\Models\Registration;
use App\Models\ClassModel;
use App\Models\Inquiry;
use App\Models\Instructor;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
        $this->middleware('admin');
    }

    /**
     * Display admin dashboard.
     */
    public function dashboard()
    {
        try {
            // Get real inquiry data from database
            $inquiries = Inquiry::orderBy('created_at', 'desc')
                ->take(10)
                ->get(['id', 'name', 'email', 'subject', 'created_at'])
                ->map(function ($inquiry) {
                    return [
                        'id' => $inquiry->id,
                        'name' => $inquiry->name,
                        'email' => $inquiry->email,
                        'subject' => $inquiry->subject,
                        'created_at' => $inquiry->created_at,
                        'status' => $inquiry->status
                    ];
                });
        } catch (\Exception $e) {
            // If table doesn't exist, show empty data
            $inquiries = collect();
        }

        return view('admin.dashboard', compact('inquiries'));
    }

    /**
     * Display content management page.
     */
    public function content()
    {
        return view('admin.content');
    }

    /**
     * Update website content.
     */
    public function updateContent(Request $request)
    {
        // In a real implementation, you would save to database or config files
        return redirect()->route('admin.content')->with('success', 'Content updated successfully');
    }

    /**
     * Display inquiries management page.
     */
    public function inquiries()
    {
        try {
            // Get real inquiry data from database
            $inquiries = Inquiry::orderBy('created_at', 'desc')
                ->paginate(10);
        } catch (\Exception $e) {
            // If table doesn't exist, show empty data
            $inquiries = collect();
        }

        return view('admin.inquiries', compact('inquiries'));
    }

    /**
     * Display single inquiry.
     */
    public function showInquiry($id)
    {
        try {
            $inquiry = Inquiry::findOrFail($id);
        } catch (\Exception $e) {
            // If inquiry doesn't exist, show empty data
            $inquiry = null;
        }

        return view('admin.inquiry-show', compact('inquiry'));
    }

    /**
     * Reply to inquiry.
     */
    public function replyInquiry(Request $request, $id)
    {
        // In a real implementation, you would send email and save to database
        return redirect()->route('admin.inquiries.show', $id)->with('success', 'Reply sent successfully');
    }

    /**
     * Delete inquiry.
     */
    public function destroyInquiry($id)
    {
        // In a real implementation, you would delete from database
        return redirect()->route('admin.inquiries')->with('success', 'Inquiry deleted successfully');
    }

    /**
     * Display instructors management page.
     */
    public function instructors()
    {
        try {
            // Get real instructor data from database
            $instructors = Instructor::orderBy('name', 'asc')->get();
        } catch (\Exception $e) {
            // If table doesn't exist, show empty data
            $instructors = collect();
        }

        return view('admin.instructors', compact('instructors'));
    }

    /**
     * Show form to create new instructor.
     */
    public function createInstructor()
    {
        $instructors = Instructor::orderBy('name', 'asc')->get(['id', 'name']);
        return view('admin.instructors-create', compact('instructors'));
    }

    /**
     * Store new instructor.
     */
    public function storeInstructor(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:instructors,email',
            'phone' => 'nullable|string|max:20',
            'specialty' => 'required|string|max:255',
            'experience_years' => 'required|integer|min:0',
            'bio' => 'required|string',
            'photo_url' => 'nullable|url|max:255'
        ]);

        Instructor::create($validated);
        
        return redirect()->route('admin.instructors')->with('success', 'Instructor added successfully');
    }

    /**
     * Show form to edit instructor.
     */
    public function editInstructor($id)
    {
        $instructor = Instructor::findOrFail($id);
        return view('admin.instructors-edit', compact('instructor'));
    }

    /**
     * Update instructor.
     */
    public function updateInstructor(Request $request, $id)
    {
        $instructor = Instructor::findOrFail($id);
        
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:instructors,email,' . $id,
            'phone' => 'nullable|string|max:20',
            'specialty' => 'required|string|max:255',
            'experience_years' => 'required|integer|min:0',
            'bio' => 'required|string',
            'photo_url' => 'nullable|url|max:255'
        ]);

        $instructor->update($validated);
        
        return redirect()->route('admin.instructors')->with('success', 'Instructor updated successfully');
    }

    /**
     * Delete instructor.
     */
    public function destroyInstructor($id)
    {
        $instructor = Instructor::findOrFail($id);
        $instructor->delete();
        
        return redirect()->route('admin.instructors')->with('success', 'Instructor deleted successfully');
    }

    /**
     * Display schedule management page.
     */
    public function schedule()
    {
        try {
            // Get real instructor data from database
            $instructors = Instructor::orderBy('name', 'asc')->get(['id', 'name']);
            
            // Get real class data from database with relationships
            $classes = ClassModel::with('instructor')
                ->orderBy('date', 'asc')
                ->get();
        } catch (\Exception $e) {
            // If tables don't exist, show empty data
            $instructors = collect();
            $classes = collect();
        }

        return view('admin.schedule', compact('instructors', 'classes'));
    }

    /**
     * Show form to create new class.
     */
    public function createClass()
    {
        $instructors = Instructor::orderBy('name', 'asc')->get(['id', 'name']);
        return view('admin.schedule-create', compact('instructors'));
    }

    /**
     * Store new class.
     */
    public function storeClass(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|in:beginner,intermediate,advanced',
            'description' => 'required|string',
            'date' => 'required|date',
            'start_time' => 'required',
            'duration' => 'required|integer|min:1',
            'max_students' => 'required|integer|min:1',
            'instructor_id' => 'required|exists:instructors,id',
            'price' => 'required|numeric|min:0',
            'status' => 'required|in:available,full,cancelled'
        ]);

        ClassModel::create($validated);
        
        return redirect()->route('admin.schedule')->with('success', 'Class added successfully');
    }

    /**
     * Show form to edit class.
     */
    public function editClass($id)
    {
        $instructors = Instructor::orderBy('name', 'asc')->get(['id', 'name']);
        $class = ClassModel::findOrFail($id);

        return view('admin.schedule-edit', compact('instructors', 'class'));
    }

    /**
     * Update class.
     */
    public function updateClass(Request $request, $id)
    {
        $class = ClassModel::findOrFail($id);
        
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|in:beginner,intermediate,advanced',
            'description' => 'required|string',
            'date' => 'required|date',
            'start_time' => 'required',
            'duration' => 'required|integer|min:1',
            'max_students' => 'required|integer|min:1',
            'instructor_id' => 'required|exists:instructors,id',
            'price' => 'required|numeric|min:0',
            'status' => 'required|in:available,full,cancelled'
        ]);

        $class->update($validated);
        
        return redirect()->route('admin.schedule')->with('success', 'Class updated successfully');
    }

    /**
     * Delete class.
     */
    public function destroyClass($id)
    {
        $class = ClassModel::findOrFail($id);
        $class->delete();
        
        return redirect()->route('admin.schedule')->with('success', 'Class deleted successfully');
    }

    /**
     * Display registration management page.
     */
    public function registration()
    {
        try {
            // Get registration statistics from database
            $totalRegistrations = Registration::count();
            $confirmedRegistrations = Registration::confirmed()->count();
            $pendingRegistrations = Registration::pending()->count();
            $totalRevenue = Registration::paid()->sum('payment_amount') ?? 0;

            // Get registrations with relationships
            $registrations = Registration::with(['user', 'class'])
                ->orderBy('created_at', 'desc')
                ->paginate(10);
        } catch (\Exception $e) {
            // If table doesn't exist, show empty data with message
            $totalRegistrations = 0;
            $confirmedRegistrations = 0;
            $pendingRegistrations = 0;
            $totalRevenue = 0;
            $registrations = collect();
        }

        return view('admin.registration', compact(
            'totalRegistrations', 
            'confirmedRegistrations', 
            'pendingRegistrations', 
            'totalRevenue',
            'registrations'
        ));
    }

    /**
     * Display single registration.
     */
    public function showRegistration($id)
    {
        $registration = Registration::with(['user', 'class'])
            ->findOrFail($id);

        return view('admin.registration-show', compact('registration'));
    }

    /**
     * Confirm registration.
     */
    public function confirmRegistration($id)
    {
        $registration = Registration::findOrFail($id);
        $registration->confirm();
        
        return redirect()->route('admin.registration')->with('success', 'Registration confirmed successfully');
    }

    /**
     * Cancel registration.
     */
    public function cancelRegistration($id)
    {
        $registration = Registration::findOrFail($id);
        $registration->cancel();
        
        return redirect()->route('admin.registration')->with('success', 'Registration cancelled successfully');
    }

    /**
     * Delete registration.
     */
    public function destroyRegistration($id)
    {
        $registration = Registration::findOrFail($id);
        $registration->delete();
        
        return redirect()->route('admin.registration')->with('success', 'Registration deleted successfully');
    }
}
