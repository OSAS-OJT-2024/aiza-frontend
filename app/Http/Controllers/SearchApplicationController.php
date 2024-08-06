<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchApplicationController extends Controller
{
    // Show the search form
    public function showSearchForm()
    {
        return view('search-application');
    }

    // Handle the search request and show the results
    public function searchApplication(Request $request)
    {
        $applicationNumber = $request->input('application_number');

        // Mock data for testing
        if ($applicationNumber === '0000-0000-0000') {
            $results = [
                'organization_name' => 'OSAS INTERNS SAMPLE ORG',
                'request_type' => 'RE-ACCREDITATION',
                'status' => 'Returned',  
                'timestamp' => '07/17/2024 9:30 AM',
                'representative_name' => 'John Doe',
                'representative_email' => 'john.doe@example.com',
                'contact_number' => '+63 912 345 6789',
            ];

            return view('search-application-result', compact('applicationNumber', 'results'));
        } else {
            // Redirect back to the search form with an error message if the application number doesn't exist
            return redirect()->route('search.application')->with('error', 'Application number does not exist.');
        }
    }

    // Handle the confirmation page route
    public function showConfirmation(Request $request)
{
    $applicationNumber = $request->input('applicationNumber');
    $organization_name = $request->input('organization_name');
    $request_type = $request->input('request_type');
    $status = $request->input('status');
    $timestamp = $request->input('timestamp');
    $representative_name = $request->input('representative_name');
    $representative_email = $request->input('representative_email');
    $contact_number = $request->input('contact_number');

    return view('reaccreditation-confirmation', compact(
        'applicationNumber',
        'organization_name',
        'request_type',
        'status',
        'timestamp',
        'representative_name',
        'representative_email',
        'contact_number'
    ));
}

    
}
