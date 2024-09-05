<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index()
    {
        return Application::all();
    }

    public function show(Application $application)
    {
        return $application;
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'student_id' => 'required|exists:users,id',
            'job_posting_id' => 'required|exists:posts,id',
            'status' => 'required|in:Applied,Shortlisted,Rejected',
        ]);

        $application = Application::create($validated);

        return response()->json($application, 201);
    }

    public function update(Request $request, Application $application)
    {
        $validated = $request->validate([
            'student_id' => 'sometimes|exists:users,id',
            'job_posting_id' => 'sometimes|exists:posts,id',
            'status' => 'sometimes|in:Applied,Shortlisted,Rejected',
        ]);

        $application->update($validated);

        return response()->json($application);
    }

    public function destroy(Application $application)
    {
        $application->delete();
        return response()->json(null, 204);
    }
}
