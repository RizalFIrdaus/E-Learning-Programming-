<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\MC_CSS;
use App\Models\MC_JS;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\MultipleChoice;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    // Google login
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    // Google callback
    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();

        $this->_registerOrLoginUser($user);

        // Return home after login
        return redirect()->route('home');
    }

    protected function _registerOrLoginUser($data)
    {
        $user = User::where('email', '=', $data->email)->first();
        if (!$user) {
            $user = new User();
            $user->name = $data->name;
            $user->email = $data->email;
            $user->password = encrypt('123456dummy');
            $user->provider_id = $data->id;
            $user->avatar = $data->avatar;
            $user->nilai_mc = 0;
            $user->nilai_css = 0;
            $user->nilai_js = 0;
            $user->save();
        }

        Auth::login($user);
    }
    public function logout()
    {
        Auth::logout();
        $arraymax = MultipleChoice::All();
        $arraymax_css = MC_CSS::All();
        $arraymax_js = MC_JS::All();
        $ids = range(1, $arraymax->count());
        $ids_css = range(1, $arraymax_css->count());
        $ids_js = range(1, $arraymax_js->count());
        DB::table('mc')->whereIn('id', $ids)->update(array('is_act' => false, 'radioAct' => "", 'user_kunci' => "", 'benar' => false, 'nilai' => 0.0));
        DB::table('m_c__c_s_s')->whereIn('id', $ids_css)->update(array('is_act' => false, 'radioAct' => "", 'user_kunci' => "", 'benar' => false, 'nilai' => 0.0));
        DB::table('m_c__j_s')->whereIn('id', $ids_js)->update(array('is_act' => false, 'radioAct' => "", 'user_kunci' => "", 'benar' => false, 'nilai' => 0.0));
        return redirect('/'); // ini untuk redirect setelah logout
    }
}
