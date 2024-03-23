<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use App\Mail\Websitemail;

class SubscriberController extends Controller
{
    public function send_email(Request $request)
    {
        $validator = \Validator::make($request->all(),[
            'email' => 'required|email'
        ]);

        if(!$validator->passes()){
            return response()->json(['code' => 0, 'error_message' => $validator->errors()->toArray()]);
        } else {
            $check = Subscriber::where('email', $request->email)->where('status', 1)->count();
            if($check > 0) {
                return response()->json(['code' => 0, 'error_message' => 'Subscriber already exists!']);
            } else {
                $token = hash('sha256', time());
                $obj = new Subscriber();
                $obj->email = $request->email;
                $obj->token = $token;
                $obj->status = 0;
                $obj->save();
    
                $verify_link = url('subscriber/verify/' . $request->email . '/' . $token);
                $subject = 'Subscriber Verification';
                $message = 'Please click on the link below to confirm subscription: <br>';
                $message .= '<a href="' . $verify_link . '">Click here</a>';
        
                \Mail::to($request->email)->send(new Websitemail($subject, $message));
        
                return response()->json(['code' => 1, 'success_message' => 'Please check your email to confirm subscription.']);
            }
        }
    }
    
    public function verify($email, $token)
    {
        $subscriber_data = Subscriber::where('email', $email)->where('token', $token)->first();

        if($subscriber_data) {
            $subscriber_data->token = '';
            $subscriber_data->status = 1;
            $subscriber_data->update();
            return redirect()->route('home')->with('success', 'Your subscription is verified successfully');
        } else {
            return redirect()->route('home');
        }
    }
}
