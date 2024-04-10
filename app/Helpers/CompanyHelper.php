<?php

namespace App\Helpers;
use Illuminate\Support\Facades\DB;

class CompanyHelper {
    
    public static function is_expired() {
        $user = DB::table('users')->where('userid', $user_id)->first();
        
        return (isset($user->username) ? $user->username : '');
    }
}