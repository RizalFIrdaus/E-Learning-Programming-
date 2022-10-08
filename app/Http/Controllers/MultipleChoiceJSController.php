<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MC_JS;

class MultipleChoiceJSController extends Controller
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
        $multiplechoice = MC_JS::paginate(1);
        $paginatesoal = MC_JS::all();
        return view('latihan_js', compact('multiplechoice', 'paginatesoal'));
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
        $multiplechoice = MC_JS::find($id);
        $paginatesoal = MC_JS::all();
        if ($request->jawaban == 'a') {
            $multiplechoice->radioAct = $request->jawaban;
            $request->jawaban = $multiplechoice->pil_a;
            $multiplechoice->is_act = true;
            $multiplechoice->user_kunci = $request->jawaban;
            if ($request->jawaban === $multiplechoice->kunci) {
                $multiplechoice->benar = true;
                $multiplechoice->nilai = 10.00;
            } else {
                $multiplechoice->benar = false;
                if ($multiplechoice->nilai >= 10.00) {
                    $multiplechoice->nilai = 0;
                }
            }
        } else if ($request->jawaban == 'b') {
            $multiplechoice->radioAct = $request->jawaban;
            $request->jawaban = $multiplechoice->pil_b;
            $multiplechoice->is_act = true;
            $multiplechoice->user_kunci = $request->jawaban;
            if ($request->jawaban === $multiplechoice->kunci) {
                $multiplechoice->benar = true;
                $multiplechoice->nilai = 10.00;
            } else {
                $multiplechoice->benar = false;
                if ($multiplechoice->nilai >= 10.00) {
                    $multiplechoice->nilai = 0;
                }
            }
        } else if ($request->jawaban == 'c') {
            $multiplechoice->radioAct = $request->jawaban;
            $request->jawaban = $multiplechoice->pil_c;
            $multiplechoice->is_act = true;
            $multiplechoice->user_kunci = $request->jawaban;
            if ($request->jawaban === $multiplechoice->kunci) {
                $multiplechoice->benar = true;
                $multiplechoice->nilai = 10.00;
            } else {
                $multiplechoice->benar = false;
                if ($multiplechoice->nilai >= 10.00) {
                    $multiplechoice->nilai = 0;
                }
            }
        } else if ($request->jawaban == 'd') {
            $multiplechoice->radioAct = $request->jawaban;
            $request->jawaban = $multiplechoice->pil_d;
            $multiplechoice->is_act = true;
            $multiplechoice->user_kunci = $request->jawaban;
            if ($request->jawaban === $multiplechoice->kunci) {
                $multiplechoice->benar = true;
                $multiplechoice->nilai = 10.00;
            } else {
                $multiplechoice->benar = false;
                if ($multiplechoice->nilai >= 10.00) {
                    $multiplechoice->nilai = 0;
                }
            }
        }

        $multiplechoice->save();
        if ($request->fullUrl() == 'http://127.0.0.1:8000/latihan/js/' . $paginatesoal->last()->id)
            return redirect('/latihan/js/?page=' . $id);
        else
            return redirect('/latihan/js/?page=' . $id + 1);
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
