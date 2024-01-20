<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Custom\Enum\AccountType;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $companies = \App\Models\Company::all();
        return Inertia::render('Companies/Index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $user = $request->user();
        $user->company()->create([
            'name' => $request->name,
            'address1' => $request->address1 ?? '',
            'address2' => $request->address2 ?? '',
            'city' => $request->city ?? '',
            'contact_name' => $request->contact_name ?? '',
            'contact_phone' => $request->contact_phone ?? '',
            'contact_email' => $request->contact_email ?? '',
            'contact_position' => $request->contact_position ?? '',
            'account_type' => AccountType::FREE->value,
            'subscribe' => false,
            'country' => $request->country ?? '',
            'website' => $request->website ?? '',
            'logo' => $request->logo ?? '',
        ]);

        return redirect()->route('companies');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
