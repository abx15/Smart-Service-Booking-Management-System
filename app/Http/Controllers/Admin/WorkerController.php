<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function index()
    {
        $workers = User::whereHas('role', function ($query) {
            $query->where('name', 'provider');
        })->with('providerServices')->paginate(10);
        return view('admin.workers.index', compact('workers'));
    }

    public function create()
    {
        return view('admin.workers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'phone' => 'required|string|max:20',
            'address' => 'required|string',
            'skills' => 'required|string',
            'experience' => 'required|integer|min:0',
            'bio' => 'nullable|string',
        ]);

        $worker = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'phone' => $request->phone,
            'address' => $request->address,
            'role_id' => \App\Models\Role::where('name', 'provider')->first()->id,
            'skills' => $request->skills,
            'experience' => $request->experience,
            'bio' => $request->bio,
            'is_active' => true,
            'email_verified_at' => now(),
        ]);

        return redirect()->route('admin.workers.index')
            ->with('success', 'Worker created successfully.');
    }

    public function edit(User $worker)
    {
        return view('admin.workers.edit', compact('worker'));
    }

    public function update(Request $request, User $worker)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $worker->id,
            'phone' => 'required|string|max:20',
            'address' => 'required|string',
            'skills' => 'required|string',
            'experience' => 'required|integer|min:0',
            'bio' => 'nullable|string',
        ]);

        $worker->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'skills' => $request->skills,
            'experience' => $request->experience,
            'bio' => $request->bio,
        ]);

        return redirect()->route('admin.workers.index')
            ->with('success', 'Worker updated successfully.');
    }

    public function destroy(User $worker)
    {
        $worker->delete();
        return redirect()->route('admin.workers.index')
            ->with('success', 'Worker deleted successfully.');
    }

    public function verify(User $worker)
    {
        $worker->update(['is_active' => true]);
        return redirect()->route('admin.workers.index')
            ->with('success', 'Worker verified successfully.');
    }

    public function unverify(User $worker)
    {
        $worker->update(['is_active' => false]);
        return redirect()->route('admin.workers.index')
            ->with('success', 'Worker unverified successfully.');
    }
}
