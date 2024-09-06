<?php

namespace App\Http\Controllers;

use App\Models\CompanyProfile;
use Illuminate\Http\Request;

class CompanyProfileController extends Controller
{
    public function index()
    {
        return CompanyProfile::all();
    }

    public function show(CompanyProfile $companyProfile)
    {
        return $companyProfile;
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'company_name' => 'required|string|max:255',
            'description' => 'required|string',
            'website' => 'required|url',
            'contact_email' => 'required|email',
            'contact_phone' => 'required|string',
            'logo' => 'nullable|string',
        ]);

        $companyProfile = CompanyProfile::create($validated);

        return response()->json($companyProfile, 201);
    }

    public function update(Request $request, CompanyProfile $companyProfile)
    {
        $validated = $request->validate([
            'company_name' => 'sometimes|string|max:255',
            'description' => 'sometimes|string',
            'website' => 'sometimes|url',
            'contact_email' => 'sometimes|email',
            'contact_phone' => 'sometimes|string',
            'logo' => 'nullable|string',
        ]);

        $companyProfile->update($validated);

        return response()->json($companyProfile);
    }

    public function destroy(CompanyProfile $companyProfile)
    {
        $companyProfile->delete();
        return response()->json(null, 204);
    }
}
