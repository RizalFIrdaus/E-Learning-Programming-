<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Latihan;
use App\Models\ListMateri;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $testi = User::take(4)->get();
        $user = Auth::user();
        $listmateri = ListMateri::take(9)->get();
        return view('index', compact('listmateri', 'user', 'testi'));
    }
}
