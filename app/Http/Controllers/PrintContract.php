<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrintContract extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $contractId = $request->route('id');
        // Logic to retrieve and print the contract based on the provided ID
        // For example, you might fetch the contract from the database and generate a PDF or display it in a view.
        return "Printing contract with ID: " . $contractId;
    }
}
