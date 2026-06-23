<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class RequestController extends Controller
{
    /**
     * Show the form for creating a new request.
     */
    public function create(): View
    {
        return view('request');
    }

    /**
     * Store a newly created request in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // Add your request storage logic here
        
        return redirect()->route('request.create')->with('success', 'Request submitted successfully!');
    }
}
