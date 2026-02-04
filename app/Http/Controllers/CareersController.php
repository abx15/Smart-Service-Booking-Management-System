<?php

namespace App\Http\Controllers;

use App\Models\JobApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CareersController extends Controller
{
    /**
     * Display careers page
     */
    public function index()
    {
        return view('pages.careers');
    }

    /**
     * Store job application
     */
    public function store(Request $request)
    {
        // Validate form data
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'position' => 'required|string|max:255',
            'experience_years' => 'nullable|integer|min:0|max:50',
            'resume' => 'nullable|file|mimes:pdf,doc,docx|max:5120', // 5MB max
            'cover_letter' => 'nullable|string|max:5000',
        ]);

        // Handle resume upload
        $resumePath = null;
        if ($request->hasFile('resume')) {
            $resumePath = $request->file('resume')->store('resumes', 'public');
        }

        // Create job application
        JobApplication::create([
            'full_name' => $validated['full_name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'position' => $validated['position'],
            'experience_years' => $validated['experience_years'] ?? null,
            'resume_path' => $resumePath,
            'cover_letter' => $validated['cover_letter'] ?? null,
            'status' => 'pending',
        ]);

        // Send success message
        return redirect()->route('careers.index')
            ->with('success', 'Your application has been submitted successfully! We will review it and get back to you soon.');
    }
}
