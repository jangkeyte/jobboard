<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\Company\CreateCompanyRequest;
use Illuminate\Http\Request;
use App\Models\PageOtherItem;
use App\Models\Company;
use App\Models\Candidate;
use App\Mail\Websitemail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class SignupController extends Controller
{
    public function index()
    {
        if(Auth::guard('candidate')->check()) {
            return redirect()->route('candidate_dashboard');
        }
        if(Auth::guard('company')->check()) {
            return redirect()->route('company_dashboard');
        }
        $other_page_item = PageOtherItem::where('id', 1)->first();
        return view('front.signup', compact('other_page_item'));
    }

    public function company_signup_submit(CreateCompanyRequest $request)
    {
        $token = hash('sha256', time());
        
        $obj = new Company();
        
        $obj->company_name = $request->company_name;
        $obj->person_name = $request->person_name;
        $obj->username = $request->username;
        $obj->email = $request->email;
        $obj->password = Hash::make($request->password);
        $obj->token = $token;
        $obj->status = 0;
        $obj->save();

        $verify_link = url('company-signup-verify/' . $token . '/' . $request->email);
        $subject = __('Company Signup Verification');
        $message = __('Please click on the following link:') . '<br>';
        $message .= '<a href="' . $verify_link . '">' . __('Click here') . '</a>';

        Mail::to($request->email)->send(new Websitemail($subject, $message));

        return redirect()->back()->with('success', __('An email is sent to your email adress. You must have to check that and click on the confimation link to validate your signup.'));
    }

    public function company_signup_verify($token, $email)
    {
        $company_data = Company::where('token', $token)->where('email', $email)->first();
        if(!$company_data)
        {
            return redirect()->route('home');
        }

        $company_data->token = '';
        $company_data->status = 1;
        $company_data->update();

        return redirect()->route('home')->with('success', __('Your email is verified successfully. You can now login to the system as company.'));
    }
    
    public function candidate_signup_submit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:candidates',
            'email' => 'required|email|unique:candidates',
            'password' => 'required',
            'retype_password' => 'required|same:password'
        ]);

        $token = hash('sha256', time());
        
        $obj = new Candidate();
        
        $obj->name = $request->name;
        $obj->username = $request->username;
        $obj->email = $request->email;
        $obj->password = Hash::make($request->password);
        $obj->token = $token;
        $obj->status = 0;
        $obj->save();

        $verify_link = url('candidate-signup-verify/' . $token . '/' . $request->email);
        $subject = __('Candidate Signup Verification');
        $message = __('Please click on the following link:') . '<br>';
        $message .= '<a href="' . $verify_link . '">' . __('Click here') . '</a>';

        Mail::to($request->email)->send(new Websitemail($subject, $message));

        return redirect()->back()->with('success', __('An email is sent to your email adress. You must have to check that and click on the confimation link to validate your signup.'));
    }

    public function candidate_signup_verify($token, $email)
    {
        $candidate_data = Candidate::where('token', $token)->where('email', $email)->first();
        if(!$candidate_data)
        {
            return redirect()->route('home');
        }

        $candidate_data->token = '';
        $candidate_data->status = 1;
        $candidate_data->update();

        return redirect()->route('home')->with('success', __('Your email is verified successfully. You can now login to the system as candidate.'));
    }
}
