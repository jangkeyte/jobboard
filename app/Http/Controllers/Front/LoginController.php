<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\PageOtherItem;
use App\Models\Company;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Session;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
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
        return view('front.login', compact('other_page_item'));
    }

    public function company_login_submit(Request $request)
    {        
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $credential = [
            'username' => $request->username,
            'password' => $request->password,
            'status' => 1
        ];
        if(Auth::guard('company')->attempt($credential)){
            return redirect()->route('company_dashboard');
        } else {
            return redirect()->route('login')->with('error', __('Information is not correct.'));
        }
    }

    public function company_logout()
    {
        Auth::guard('company')->logout();
        return redirect()->route('login');
    }
    
    public function candidate_login_submit(Request $request)
    {        
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $credential = [
            'username' => $request->username,
            'password' => $request->password
        ];
        if(Auth::guard('candidate')->attempt($credential)){
            return redirect()->route('candidate_dashboard');
        } else {
            return redirect()->route('login')->with('error', __('Information is not correct.'));
        }
    }

    public function candidate_logout()
    {
        Auth::guard('candidate')->logout();
        return redirect()->route('login');
    }
    
    public function redirect($provider)
    {
        if(isset($_SERVER['HTTP_REFERER'])) {
            session()->flash('back_url',$_SERVER['HTTP_REFERER']);
        }
        return Socialite::driver($provider)->redirect();  
    }

    public function callback($provider)
    {
        $getInfo = Socialite::driver($provider)->user();
        $link = $_COOKIE['link_file'] ?? '';
        // Nếu thông tin facebook trả về không có Email thì thông báo
        if(!$getInfo->email) {
            
            return redirect(session()->get('back_url','/'))->with(['flash_level'=>'danger','flash_message'=> 'Tài khoản của bạn không hoạt động.']);
                
        } else {
            // Nếu có Email thì check tồn tại trong hệ thống
            $findUser = Company::where('email', $getInfo->email)->first();
            // nếu tồn tại user trong DB thì đăng nhập còn không thì đăng ký
            if($findUser != null){
                if ($findUser->status == 1) {
                    Auth::login($findUser, true);
                    return redirect()->to($link);
                } else {
                    return redirect(session()->get('back_url','/'))->with(['flash_level'=>'danger','flash_message'=> 'Tài khoản của bạn không hoạt động.']);
                }
            } else {
                $created_at = $updated_at = date('Y-m-d H:i:s');
                $user = [
                    'username' => $getInfo->id,
                    'email' => $getInfo->email,
                    'name' => $getInfo->name??$getInfo->email,
                    'password' => bcrypt('*******'),
                    'status' => 1,
                    'created_at' => $created_at,
                    'updated_at' => $updated_at,
                ];
                $user_id = Company::insertGetId($user);
                Auth::login(Company::find($user_id), true);
               return redirect()->to($link);
            }
        }        
    }
}
