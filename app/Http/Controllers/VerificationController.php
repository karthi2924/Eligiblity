<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Verification;
use App\Exports\VerificationsExport;
use Maatwebsite\Excel\Facades\Excel;

class VerificationController extends Controller
{

    public function create()
    {
        $verifications = Verification::all();
        return view('eligibility.create', compact('verifications'));
    }

     public function store(Request $request)
    {
        
        $validated = $request->validate([
            'date'           => 'required|date',
            'appt_id'            => 'required|string|max:255',
            'details'            => 'required|string|max:255',
            'insurance'            => 'required|string|max:255',
            'plan'            => 'required|string|max:255',
            'status'            => 'required|string|max:255',
            'action'            => 'required|string|max:255',
            'comments'            => 'required|string|max:255',
        ]);
         Verification::create($validated);

        return redirect()->route('eligibility.create')->with('success', 'BGV verification submitted successfully.');
    }

<<<<<<< HEAD
    public function export()
{
    return Excel::download(new VerificationsExport, 'verifications.xlsx');
=======
    public function edit($id)
{
    $verification = Verification::findOrFail($id);
    return view('eligibility.edit', compact('verification'));
}

public function update(Request $request, $id)
{
    $validated = $request->validate([
        'date'      => 'required|date',
        'appt_id'   => 'required|string|max:255',
        'details'   => 'required|string|max:255',
        'insurance' => 'required|string|max:255',
        'plan'      => 'required|string|max:255',
        'status'    => 'required|string|max:255',
        'action'    => 'required|string|max:255',
        'comments'  => 'required|string',
    ]);

    $verification = Verification::findOrFail($id);
    $verification->update($validated);

    return redirect()->route('eligibility.create')
                     ->with('showDashboard', true)
                     ->with('success', 'Record updated successfully.');
>>>>>>> 8fc095cec82ef28ce87123fd5e7658fccaf472f3
}

}
