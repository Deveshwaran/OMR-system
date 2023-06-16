<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\MarriageRegistration;

class MarriageRegistrationController extends Controller
{
  public function showRegistrationForm()
  {
    return view('user.apply');
  }

  public function createMarriageRegistration(Request $request)
  {
    // Validate the request data
    $validatedData = $request->validate([
      'first_name' => ['required', 'string', 'max:255'],
      'last_name' => ['required', 'string', 'max:255'],
      'dob' => ['required'],
      'religion' => ['required', 'string', 'max:255'],
      'permanent_address' => ['required', 'string', 'max:255'],
      'present_address' => ['required', 'string', 'max:255'],
      'nric' => ['required', 'string', 'max:255'],
      'pic' => ['required'],
      'first_name2' => ['required', 'string', 'max:255'],
      'last_name2' => ['required', 'string', 'max:255'],
      'dob2' => ['required'],
      'religion2' => ['required', 'string', 'max:255'],
      'permanent_address2' => ['required', 'string', 'max:255'],
      'present_address2' => ['required', 'string', 'max:255'],
      'nric2' => ['required', 'string', 'max:255'],
      'pic2' => ['required'],
      'name' => ['required', 'string', 'max:255'],
      'address' => ['required', 'string', 'max:255'],
      'name2' => ['required', 'string', 'max:255'],
      'address2' => ['required', 'string', 'max:255'],
      'marriage_date' => ['required']
    ]);

    // Store the pic in the public/uploads directory
    $pic = request('pic')->store('uploads', 'public'); 
    $pic2 = request('pic2')->store('uploads', 'public'); 

    $registration = New MarriageRegistration;

    $registration->first_name = $validatedData['first_name'];
    $registration->last_name = $validatedData['last_name'];
    $registration->dob = $validatedData['dob'];
    $registration->religion = $validatedData['religion'];
    $registration->permanent_address = $validatedData['permanent_address'];
    $registration->present_address = $validatedData['present_address'];
    $registration->nric = $validatedData['nric'];
    $registration->pic = $pic;
    $registration->first_name2 = $validatedData['first_name2'];
    $registration->last_name2 = $validatedData['last_name2'];
    $registration->dob2 = $validatedData['dob2'];
    $registration->religion2 = $validatedData['religion2'];
    $registration->permanent_address2 = $validatedData['permanent_address2'];
    $registration->present_address2 = $validatedData['present_address2'];
    $registration->nric2 = $validatedData['nric2'];
    $registration->pic2 = $pic2;
    $registration->name = $validatedData['name'];
    $registration->address = $validatedData['address'];
    $registration->name2 = $validatedData['name2'];
    $registration->address2 = $validatedData['address2'];
    $registration->marriage_date = $validatedData['marriage_date'];

    $registration->save();

    return redirect()->route('showRegisterPage');
  }

  public function showRegisterPage()
  {
    return view('user.register');
  }

  public function showResultPage(Request $request)
  {
    $nric = $request->input('nric');

    $marriage = MarriageRegistration::where('nric', $nric)->first();

    return view('user.result', ['marriage' => $marriage]);
  }

  public function uploadFiles(Request $request, $id)
  {
    // Validate the request data
    $validatedData = $request->validate([
      'file1' => ['required'],
      'file2' => ['required'],
      'file3' => ['required'],
      'file4' => ['required'],
      'file5' => ['required'],
      'file6' => ['required']
    ]);

    // Store the files in the public/uploads directory
    $file1 = $validatedData['file1']->store('uploads', 'public');
    $file2 = $validatedData['file2']->store('uploads', 'public');
    $file3 = $validatedData['file3']->store('uploads', 'public');
    $file4 = $validatedData['file4']->store('uploads', 'public');
    $file5 = $validatedData['file5']->store('uploads', 'public');
    $file6 = $validatedData['file6']->store('uploads', 'public');

    $marriage = MarriageRegistration::findOrFail($id);

    $marriage->file1 = $file1;
    $marriage->file2 = $file2;
    $marriage->file3 = $file3;
    $marriage->file4 = $file4;
    $marriage->file5 = $file5;
    $marriage->file6 = $file6;
    $marriage->save();

    return view('user.register');
  }

  public function showCertPage($id)
  {
    $marriage = MarriageRegistration::findOrFail($id);

    return view('user.cert', compact('marriage'));
  }

  public function showDetailsPage()
  {
    $marriages = MarriageRegistration::all();

    return view('staff.details', compact('marriages'));
  }

  public function confirmStatus($id)
  {
    $marriage = MarriageRegistration::findOrFail($id);

    $marriage->status = 'Confirmed';
    $marriage->save();

    return redirect()->back();
  }
}
