<?php

namespace App\Http\Controllers;

use App\Models\SocialAccounts;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Socialite;

class SocialiteController extends Controller
{
    public function auth_redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function auth_callback($provider)
    {
        // هنا هيجيب بيانات المستخدم من المشغل
        $user = Socialite::driver($provider)->user();
        // هشوف الايميل موجود عندي ولا لا 
        if(!$user->getEmail()){
            return redirect()->route('register_page')->withErrors(['error'=>'البريد الالكتروني غير متوفر يرجي التسجيل بتطبيق اخر']);
        }
        $check_user = User::where('email', $user->getEmail())->first();
        // لو الايميل مش موجود هسجله وهسجل بيانات المشغل اللي سجل منه 
        if(!$check_user) {
            $create_user = User::create([
                'name' => $user->name,
                'email' => $user->getEmail(),
            ]);

            SocialAccounts::create([
                'user_id' => $create_user->id,
                'provider_id' => $user->getId(),
                'provider_name' => $provider,
            ]);
            Auth::login($create_user);
            return redirect()->route('student_dashboard');
        } else {
            // هشوف المشغل دا مسجل بيه قبل كدا ولا لا لو مسجل بيه قبل كدا هيعمل 
            // login علي طول لو مش مسجل يسجل بيانات المشغل وال id المستخدم معاهم
            SocialAccounts::createOrFirst([
                'provider_id' =>$user->getId(),
                'provider_name'=>$provider,
                'user_id'=>$check_user->id ,
            ]);
            Auth::login($check_user);
            return redirect()->route('student_dashboard');
        }
    }
}
