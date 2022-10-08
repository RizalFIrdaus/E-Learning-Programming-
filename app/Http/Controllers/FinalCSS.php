<?php

namespace App\Http\Controllers;

use App\Models\MC_CSS;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class FinalCSS extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('final_css');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $nilai = MC_CSS::All()->sum('nilai');
        $arraymax = MC_CSS::All();
        $totalnilai = MC_CSS::All()->count();
        $user = User::Find($id);
        $tampilNilai = $nilai / $totalnilai * 10;
        $ids = range(1, $arraymax->count());
        if ($user->nilai_css < $tampilNilai) {
            $user->nilai_css = $nilai / $totalnilai * 10;
            $user->save();
        }

        DB::table('m_c__c_s_s')->whereIn('id', $ids)->update(array('is_act' => false, 'radioAct' => "", 'user_kunci' => "", 'benar' => false, 'nilai' => 0.0));
        return view('final_css', compact('totalnilai', 'arraymax', 'user', 'tampilNilai'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
