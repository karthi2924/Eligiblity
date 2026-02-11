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

    public function export()
{
    return Excel::download(new VerificationsExport, 'verifications.xlsx');
}

}
