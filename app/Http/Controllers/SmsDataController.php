<?php

namespace App\Http\Controllers;
use App\Models\SmsData;

use Illuminate\Http\Request;

class SmsDataController extends Controller
{
    public function store(Request $request)
    {
        //validation of the data
        $data = $request->validate([
            'phoneNumbers' => 'array',
            'phoneNumbers.*' => 'required|string',
            'message' => 'required|string',
        ]);

        foreach ($data['phoneNumbers'] as $phoneNumber) {
            SmsData::create([
                'phone_number' => $phoneNumber,
                'message' => $data['message'],
            ]);
        }

        return redirect()->back()->with('success', 'SMS data saved successfully.');

    }
}
