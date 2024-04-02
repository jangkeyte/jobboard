<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\Models\Candidate;
use Illuminate\Support\Facades\Auth;

class SocialiteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }
            
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleFacebookCallback()
    {
        try {
        
            $user = Socialite::driver('facebook')->user();
            
            $finduser = Candidate::where('facebook_id', $user->id)->first();
            
            if($finduser){
            
                Auth::login($finduser);
        
                return redirect()->intended('dashboard');
            
            }else{
                $newUser = Candidate::updateOrCreate(['email' => $user->email],[
                        'name' => $user->name,
                        'username' => time(),
                        'facebook_id'=> $user->id,
                        'password' => encrypt('123456dummy')
                    ]);
        
                Auth::login($newUser);
        
                return redirect()->intended('dashboard');
            }
        
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
