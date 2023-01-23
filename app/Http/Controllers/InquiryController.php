<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inquiry;

class InquiryController extends Controller
{
    public function index()
    {
        $inquires = Inquiry::latest()->get();
        return view('inquiry.index-inquiry', compact('inquires'));
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name' => ['required'],
                'email' => ['required', 'email'],
                'subject' => ['required'],
                'message' => ['required'],
            ]);

            Inquiry::create($validatedData);
            return redirect()->back()->with('success', 'Your inquiry has been submitted successfully');
        } catch (\Exception $e) {
            $exception = $e->getMessage();
            return redirect()->back()->with('error', $exception);
        }
    }

    public function show($id){
        $inquiry = Inquiry::find($id);
        return response()->json($inquiry);
    }
}
