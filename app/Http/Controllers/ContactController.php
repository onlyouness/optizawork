<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function store(Request $request){
        $validated = $request->validate([
            'email' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|min:5',
        
        ]);    
        Contact::create($validated);

        return redirect()->route('contactus')->with('success', 'Contact added successfully!');
    }
}
