<?php

namespace App\Http\Controllers;

use App\Models\MultipleChoice;
use Illuminate\Http\Request;
use App\Models\Latihan;
use App\Models\User;
use Laravelista\Comments\Commentable;
use App\Models\Materi;
use App\Models\tools;

class PageHTMLController extends Controller
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
        $materi = Materi::where('link', 'html')->paginate(1);
        $paginatemateri = Materi::where('link', 'html')->get();
        $tools = tools::where('materi', 'htmldasar')->get();
        $photo = Materi::where('link', 'html')->take(1)->get();
        return view('pages.html', compact('materi', 'paginatemateri', 'tools', 'photo'));
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
        //
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
