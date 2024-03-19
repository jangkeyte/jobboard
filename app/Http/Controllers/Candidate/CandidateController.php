<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Candidate;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CandidateController extends Controller
{
    public function dashboard()
    {
        return view('candidate.dashboard');
    }
    
    public function edit_profile()
    {
        return view('candidate.edit_profile');
    }

    public function edit_profile_update(Request $request)
    {
        $obj = Candidate::where('id', Auth::guard('candidate')->user()->id)->first();
        $request->validate([
            'name' => 'required',
            'username' => ['required', 'alpha_dash', Rule::unique('candidates')->ignore(Auth::guard('candidate')->user()->id)],
            'email' => ['required', 'email', Rule::unique('candidates')->ignore(Auth::guard('candidate')->user()->id)],

        ]);

        if($request->hasFile('photo')) {
            $request->validate([
                'photo' => 'image|mimes:jpg,jpeg,png,gif',
            ]);

            if(Auth::guard('candidate')->user()->photo != '') {
                if(file_exists(public_path('uploads/' . $obj->photo))) {
                    unlink(public_path('uploads/' . $obj->photo));
                }
            }           

            $ext = $request->file('photo')->extension();
            $final_name = 'candidate_photo_' . time() . '.' . $ext;

            $request->file('photo')->move(public_path('uploads/'), $final_name);

            $obj->photo = $final_name;
        }

        $obj->name = $request->name;
        $obj->designation = $request->designation;
        $obj->username = $request->username;
        $obj->email = $request->email;
        $obj->phone = $request->phone;
        $obj->biography = $request->biography;
        $obj->phone = $request->phone;
        $obj->country = $request->country;
        $obj->address = $request->address;
        $obj->state = $request->state;
        $obj->city = $request->city;
        $obj->zip_code = $request->zip_code;
        $obj->gender = $request->gender;
        $obj->marital_status = $request->marital_status;
        $obj->date_of_birth = $request->date_of_birth;
        $obj->website = $request->website;
        $obj->update();

        return redirect()->back()->with('success', 'Profile is updated successfully.');
    }

    public function edit_password()
    {
        return view('candidate.edit_password');
    }
    public function edit_password_update(Request $request)
    {   
        $obj = Candidate::where('email', Auth::guard('candidate')->user()->email)->first();            
        $request->validate([
            'password' => 'required',
            'retype_password' => 'required|same:password'
        ]);
        $obj->password = Hash::make($request->password);
        $obj->update();
        return redirect()->route('candidate_logout')->with('success', 'Password has changed successfully. Please relogin with your new password.');
    }

}
