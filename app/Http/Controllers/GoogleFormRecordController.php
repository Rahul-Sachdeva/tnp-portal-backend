<?php

namespace App\Http\Controllers;

use App\Models\GoogleFormRecord;
use Illuminate\Http\Request;

class GoogleFormRecordController extends Controller
{
    public function index()
    {
        return GoogleFormRecord::all();
    }

    public function show(GoogleFormRecord $googleFormRecord)
    {
        return $googleFormRecord;
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'form_data' => 'required|json',
            'student_id' => 'required|exists:users,id',
            'is_valid' => 'required|boolean',
        ]);

        $googleFormRecord = GoogleFormRecord::create($validated);

        return response()->json($googleFormRecord, 201);
    }

    public function update(Request $request, GoogleFormRecord $googleFormRecord)
    {
        $validated = $request->validate([
            'form_data' => 'sometimes|json',
            'student_id' => 'sometimes|exists:users,id',
            'is_valid' => 'sometimes|boolean',
        ]);

        $googleFormRecord->update($validated);

        return response()->json($googleFormRecord);
    }

    public function destroy(GoogleFormRecord $googleFormRecord)
    {
        $googleFormRecord->delete();
        return response()->json(null, 204);
    }
}
