<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JobApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JobApplicationController extends Controller
{
    /**
     * Display all job applications
     */
    public function index(Request $request)
    {
        $query = JobApplication::query()->latest();

        // Filter by status if provided
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // Search by name or email
        if ($request->filled('search')) {
            $query->where(function ($q) use ($request) {
                $q->where('full_name', 'like', '%' . $request->search . '%')
                    ->orWhere('email', 'like', '%' . $request->search . '%');
            });
        }

        $applications = $query->paginate(15);

        return view('admin.job-applications.index', compact('applications'));
    }

    /**
     * Display single application
     */
    public function show($id)
    {
        $application = JobApplication::findOrFail($id);
        return view('admin.job-applications.show', compact('application'));
    }

    /**
     * Update application status
     */
    public function updateStatus(Request $request, $id)
    {
        $validated = $request->validate([
            'status' => 'required|in:pending,reviewing,interviewed,hired,rejected',
            'admin_notes' => 'nullable|string|max:5000',
        ]);

        $application = JobApplication::findOrFail($id);
        $application->update($validated);

        return redirect()->back()->with('success', 'Application status updated successfully!');
    }

    /**
     * Delete application
     */
    public function destroy($id)
    {
        $application = JobApplication::findOrFail($id);

        // Delete resume file if exists
        if ($application->resume_path) {
            Storage::disk('public')->delete($application->resume_path);
        }

        $application->delete();

        return redirect()->route('admin.job-applications.index')
            ->with('success', 'Application deleted successfully!');
    }
}
