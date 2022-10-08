<?php

namespace App\Http\Controllers;

use App\Models\CSS;
use App\Models\Javascript;
use App\Models\ListMateri;
use Illuminate\Http\Request;
use App\Models\Materi;
use App\Models\Tutor;
use App\Models\Latihan;
use App\Models\MC_CSS;
use App\Models\MC_JS;
use App\Models\MultipleChoice;
use App\Models\tools;
use Illuminate\Support\Facades\DB;

class AdminPanelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // INDEX 
    public function latihan_html()
    {
        $materi = MultipleChoice::all();
        return view('admin.latihan.html.html', compact('materi'));
    }
    public function latihan_css()
    {
        $materi = MC_CSS::all();
        return view('admin.latihan.css.css', compact('materi'));
    }
    public function latihan_js()
    {
        $materi = MC_JS::all();
        return view('admin.latihan.js.js', compact('materi'));
    }
    public function materi_html()
    {
        $materi = Materi::all();
        return view('admin.html.html', compact('materi'));
    }
    public function materi_css()
    {
        $materi = CSS::all();
        return view('admin.css.css', compact('materi'));
    }
    public function materi_js()
    {
        $materi = Javascript::all();
        return view('admin.js.js', compact('materi'));
    }
    public function list_materi()
    {
        $materi = ListMateri::all();
        return view('admin.list.materi', compact('materi'));
    }
    public function list_latihan()
    {
        $materi = Latihan::all();
        return view('admin.list.latihan', compact('materi'));
    }
    public function tools()
    {
        $materi = tools::all();
        return view('admin.lainnya.tools.tools', compact('materi'));
    }
    public function tutor()
    {
        $materi = Tutor::all();
        return view('admin.lainnya.tutor.tutor', compact('materi'));
    }
    // CREATE 
    public function latihan_create_html()
    {
        return view('admin.latihan.html.insert');
    }
    public function latihan_create_css()
    {
        return view('admin.latihan.css.insert');
    }
    public function latihan_create_js()
    {
        return view('admin.latihan.js.insert');
    }
    public function create_html()
    {
        $tutor = Tutor::all();

        return view('admin.html.insert', compact('tutor'));
    }
    public function create_css()
    {
        $tutor = Tutor::all();

        return view('admin.css.insert', compact('tutor'));
    }
    public function create_js()
    {
        $tutor = Tutor::all();

        return view('admin.js.insert', compact('tutor'));
    }
    public function create_list_materi()
    {
        return view('admin.list.materi_insert');
    }
    public function create_list_latihan()
    {
        return view('admin.list.latihan_insert');
    }
    public function create_tools()
    {
        return view('admin.lainnya.tools.insert');
    }
    public function create_tutor()
    {
        return view('admin.lainnya.tutor.insert');
    }
    // STORE
    public function latihan_store_html(Request $request)
    {
        $id = DB::table('mc')->latest('id')->first();
        $materi = new MultipleChoice;
        if ($id != null) {
            $materi->id = $id->id + 1;
        } else {
            $materi->id = 1;
        }
        $materi->soal = $request->soal;
        $materi->pil_a = $request->pil_a;
        $materi->pil_b = $request->pil_b;
        $materi->pil_c = $request->pil_c;
        $materi->pil_d = $request->pil_d;
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $filename = $file->getClientOriginalName();
            $materi->img = $file->getClientOriginalName();
            $path = public_path() . '/upload/image/';
            $file->move($path, $filename);
        }
        $materi->is_act = 0;
        $materi->radioAct = "";

        switch ($request->kunci) {
            case 'a':
                $materi->kunci = $request->pil_a;
                break;
            case 'b':
                $materi->kunci = $request->pil_b;
                break;
            case 'c':
                $materi->kunci = $request->pil_c;
                break;
            case 'd':
                $materi->kunci = $request->pil_d;
                break;
        }
        $materi->user_kunci = "";
        $materi->benar = 0;
        $materi->nilai = 0.00;
        $materi->save();
        return redirect('/admin/latihan/html');
    }
    public function latihan_store_css(Request $request)
    {
        $id = DB::table('m_c__c_s_s')->latest('id')->first();
        $materi = new MC_CSS;
        if ($id != null) {
            $materi->id = $id->id + 1;
        } else {
            $materi->id = 1;
        }
        $materi->soal = $request->soal;
        $materi->pil_a = $request->pil_a;
        $materi->pil_b = $request->pil_b;
        $materi->pil_c = $request->pil_c;
        $materi->pil_d = $request->pil_d;
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $filename = $file->getClientOriginalName();
            $materi->img = $file->getClientOriginalName();
            $path = public_path() . '/upload/image/';
            $file->move($path, $filename);
        }
        $materi->is_act = 0;
        $materi->radioAct = "";
        switch ($request->kunci) {
            case 'a':
                $materi->kunci = $request->pil_a;
                break;
            case 'b':
                $materi->kunci = $request->pil_b;
                break;
            case 'c':
                $materi->kunci = $request->pil_c;
                break;
            case 'd':
                $materi->kunci = $request->pil_d;
                break;
        }
        $materi->user_kunci = "";
        $materi->benar = 0;
        $materi->nilai = 0.00;
        $materi->save();
        return redirect('/admin/latihan/css');
    }
    public function latihan_store_js(Request $request)
    {
        $id = DB::table('m_c__j_s')->latest('id')->first();
        $materi = new MC_JS;
        if ($id != null) {
            $materi->id = $id->id + 1;
        } else {
            $materi->id = 1;
        }
        $materi->soal = $request->soal;
        $materi->pil_a = $request->pil_a;
        $materi->pil_b = $request->pil_b;
        $materi->pil_c = $request->pil_c;
        $materi->pil_d = $request->pil_d;
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $filename = $file->getClientOriginalName();
            $materi->img = $file->getClientOriginalName();
            $path = public_path() . '/upload/image/';
            $file->move($path, $filename);
        }
        $materi->is_act = 0;
        $materi->radioAct = "";
        switch ($request->kunci) {
            case 'a':
                $materi->kunci = $request->pil_a;
                break;
            case 'b':
                $materi->kunci = $request->pil_b;
                break;
            case 'c':
                $materi->kunci = $request->pil_c;
                break;
            case 'd':
                $materi->kunci = $request->pil_d;
                break;
        }
        $materi->user_kunci = "";
        $materi->benar = 0;
        $materi->nilai = 0.00;
        $materi->save();
        return redirect('/admin/latihan/js');
    }
    public function store_html(Request $request)
    {
        $tutor = Tutor::all();
        $id = DB::table('materis')->latest('id')->first();
        $materi = new Materi;
        if ($id != null) {
            $materi->id = $id->id + 1;
        } else {
            $materi->id = 1;
        }
        if ($request->hasFile('embed_vid')) {
            $file = $request->file('embed_vid');
            $filename = $file->getClientOriginalName();
            $materi->embed_vid = $file->getClientOriginalName();
            $path = public_path() . '/upload/video/';
            $file->move($path, $filename);
        }
        $materi->desc_vid = $request->desc_vid;
        $materi->list_materi = $request->list_materi;
        $materi->tutor = $request->tutor;
        $materi->link = "html";
        foreach ($tutor as $t) {
            if ($t->tutor == $request->tutor) {
                $materi->title_tutor = $t->title_tutor;
                $materi->img = $t->img;
            }
        }
        $materi->save();
        return redirect('/admin/materi/html');
    }
    public function store_css(Request $request)
    {
        $tutor = Tutor::all();
        $id = DB::table('c_s_s')->latest('id')->first();
        $materi = new CSS;
        if ($id != null) {
            $materi->id = $id->id + 1;
        } else {
            $materi->id = 1;
        }
        if ($request->hasFile('embed_vid')) {
            $file = $request->file('embed_vid');
            $filename = $file->getClientOriginalName();
            $materi->embed_vid = $file->getClientOriginalName();
            $path = public_path() . '/upload/video/';
            $file->move($path, $filename);
        }
        $materi->desc_vid = $request->desc_vid;
        $materi->list_materi = $request->list_materi;
        $materi->tutor = $request->tutor;
        foreach ($tutor as $t) {
            if ($t->tutor == $request->tutor) {
                $materi->title_tutor = $t->title_tutor;
                $materi->img = $t->img;
            }
        }
        $materi->save();
        return redirect('/admin/materi/css');
    }
    public function store_js(Request $request)
    {
        $tutor = Tutor::all();
        $id = DB::table('javascripts')->latest('id')->first();
        $materi = new Javascript;
        if ($id != null) {
            $materi->id = $id->id + 1;
        } else {
            $materi->id = 1;
        }
        if ($request->hasFile('embed_vid')) {
            $file = $request->file('embed_vid');
            $filename = $file->getClientOriginalName();
            $materi->embed_vid = $file->getClientOriginalName();
            $path = public_path() . '/upload/video/';
            $file->move($path, $filename);
        }
        $materi->desc_vid = $request->desc_vid;
        $materi->list_materi = $request->list_materi;
        $materi->tutor = $request->tutor;
        foreach ($tutor as $t) {
            if ($t->tutor == $request->tutor) {
                $materi->title_tutor = $t->title_tutor;
                $materi->img = $t->img;
            }
        }
        $materi->save();
        return redirect('/admin/materi/js');
    }
    public function store_list_materi(Request $request)
    {
        $id = DB::table('list_materis')->latest('id')->first();
        $materi = new ListMateri;
        if ($id != null) {
            $materi->id = $id->id + 1;
        } else {
            $materi->id = 1;
        }
        $materi->judul = $request->judul;
        $materi->title = $request->title;
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $filename = $file->getClientOriginalName();
            $materi->img = $file->getClientOriginalName();
            $path = public_path() . '/upload/image/';
            $file->move($path, $filename);
        }
        $materi->url = $request->url;
        $materi->save();
        return redirect('/admin/listmateri');
    }
    public function store_list_latihan(Request $request)
    {
        $id = DB::table('latihan')->latest('id')->first();
        $materi = new Latihan;
        if ($id != null) {
            $materi->id = $id->id + 1;
        } else {
            $materi->id = 1;
        }
        $materi->title = $request->title;
        $materi->child_title = $request->child_title;
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $filename = $file->getClientOriginalName();
            $materi->img = $file->getClientOriginalName();
            $path = public_path() . '/upload/image/';
            $file->move($path, $filename);
        }
        $materi->url_latihan = $request->url_latihan;
        $materi->save();
        return redirect('/admin/listlatihan');
    }
    public function store_tools(Request $request)
    {
        $id = DB::table('tools')->latest('id')->first();
        $materi = new tools;
        if ($id != null) {
            $materi->id = $id->id + 1;
        } else {
            $materi->id = 1;
        }
        $materi->nama = $request->nama;
        $materi->materi = $request->materi;
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $filename = $file->getClientOriginalName();
            $materi->img = $file->getClientOriginalName();
            $path = public_path() . '/upload/image/';
            $file->move($path, $filename);
        }
        $materi->link = $request->link;
        $materi->save();
        return redirect('/admin/tools');
    }
    public function store_tutor(Request $request)
    {
        $id = DB::table('tutors')->latest('id')->first();
        $materi = new Tutor;
        if ($id != null) {
            $materi->id = $id->id + 1;
        } else {
            $materi->id = 1;
        }
        $materi->tutor = $request->tutor;
        $materi->title_tutor = $request->title_tutor;
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $filename = $file->getClientOriginalName();
            $materi->img = $file->getClientOriginalName();
            $path = public_path() . '/upload/image/';
            $file->move($path, $filename);
        }
        $materi->save();
        return redirect('/admin/tutor');
    }
    // EDIT
    public function latihan_edit_html($id)
    {
        $materi = MultipleChoice::find($id);

        return view('admin.latihan.html.edit', compact('materi'));
    }
    public function latihan_edit_css($id)
    {
        $materi = MC_CSS::find($id);

        return view('admin.latihan.css.edit', compact('materi'));
    }
    public function latihan_edit_js($id)
    {
        $materi = MC_JS::find($id);

        return view('admin.latihan.js.edit', compact('materi'));
    }
    public function edit_list_materi($id)
    {
        $materi = ListMateri::find($id);

        return view('admin.list.materi_edit', compact('materi'));
    }
    public function edit_tools($id)
    {
        $materi = tools::find($id);

        return view('admin.lainnya.tools.edit', compact('materi'));
    }
    public function edit_tutor($id)
    {
        $materi = Tutor::find($id);

        return view('admin.lainnya.tutor.edit', compact('materi'));
    }
    public function edit_list_latihan($id)
    {
        $materi = Latihan::find($id);

        return view('admin.list.latihan_edit', compact('materi'));
    }
    public function edit_html($id)
    {
        $tutor = Tutor::all();
        $materi = Materi::find($id);

        return view('admin.html.edit', compact('tutor', 'materi'));
    }
    public function edit_css($id)
    {
        $tutor = Tutor::all();
        $materi = CSS::find($id);

        return view('admin.css.edit', compact('tutor', 'materi'));
    }
    public function edit_js($id)
    {
        $tutor = Tutor::all();
        $materi = Javascript::find($id);

        return view('admin.js.edit', compact('tutor', 'materi'));
    }
    // UPDATE
    public function latihan_update_html(Request $request, $id)
    {
        $materi = MultipleChoice::find($id);
        $materi->soal = $request->soal;
        $materi->pil_a = $request->pil_a;
        $materi->pil_b = $request->pil_b;
        $materi->pil_c = $request->pil_c;
        $materi->pil_d = $request->pil_d;
        $materi->img = $request->img;
        $materi->is_act = 0;
        $materi->radioAct = "";
        $materi->kunci = $request->kunci;
        $materi->user_kunci = "";
        $materi->benar = 0;
        $materi->nilai = 0.00;
        $materi->save();
        return redirect('admin/latihan/html');
    }
    public function latihan_update_css(Request $request, $id)
    {
        $materi = MultipleChoice::find($id);
        $materi->soal = $request->soal;
        $materi->pil_a = $request->pil_a;
        $materi->pil_b = $request->pil_b;
        $materi->pil_c = $request->pil_c;
        $materi->pil_d = $request->pil_d;
        $materi->img = $request->img;
        $materi->is_act = 0;
        $materi->radioAct = "";
        $materi->kunci = $request->kunci;
        $materi->user_kunci = "";
        $materi->benar = 0;
        $materi->nilai = 0.00;
        $materi->save();
        return redirect('admin/latihan/css');
    }
    public function latihan_update_js(Request $request, $id)
    {
        $materi = MultipleChoice::find($id);
        $materi->soal = $request->soal;
        $materi->pil_a = $request->pil_a;
        $materi->pil_b = $request->pil_b;
        $materi->pil_c = $request->pil_c;
        $materi->pil_d = $request->pil_d;
        $materi->img = $request->img;
        $materi->is_act = 0;
        $materi->radioAct = "";
        $materi->kunci = $request->kunci;
        $materi->user_kunci = "";
        $materi->benar = 0;
        $materi->nilai = 0.00;
        $materi->save();
        return redirect('admin/latihan/js');
    }
    public function update_tools(Request $request, $id)
    {
        $materi = tools::find($id);
        $materi->nama = $request->nama;
        $materi->materi = $request->materi;
        $materi->img = $request->img;
        $materi->link = $request->link;
        $materi->save();
        return redirect('admin/tools');
    }
    public function update_tutor(Request $request, $id)
    {
        $materi = Tutor::find($id);
        $materi->tutor = $request->tutor;
        $materi->title_tutor = $request->title_tutor;
        $materi->img = $request->img;
        $materi->save();
        return redirect('admin/tutor');
    }
    public function update_list_materi(Request $request, $id)
    {
        $materi = ListMateri::find($id);
        $materi->judul = $request->judul;
        $materi->title = $request->title;
        $materi->img = $request->img;
        $materi->url = $request->url;
        $materi->save();
        return redirect('admin/listmateri');
    }
    public function update_list_latihan(Request $request, $id)
    {
        $materi = Latihan::find($id);
        $materi->title = $request->title;
        $materi->child_title = $request->child_title;
        $materi->img = $request->img;
        $materi->url_latihan = $request->url_latihan;
        $materi->save();
        return redirect('admin/listlatihan');
    }
    public function update_html(Request $request, $id)
    {
        $tutor = Tutor::all();
        $materi = Materi::find($id);
        $materi->embed_vid = $request->embed_vid;
        $materi->desc_vid = $request->desc_vid;
        $materi->list_materi = $request->list_materi;
        $materi->tutor = $request->tutor;
        foreach ($tutor as $t) {
            if ($t->tutor == $request->tutor) {
                $materi->title_tutor = $t->title_tutor;
                $materi->img = $t->img;
            }
        }
        $materi->save();
        return redirect('admin/materi/html');
    }
    public function update_css(Request $request, $id)
    {
        $tutor = Tutor::all();
        $materi = CSS::find($id);
        $materi->embed_vid = $request->embed_vid;
        $materi->desc_vid = $request->desc_vid;
        $materi->list_materi = $request->list_materi;
        $materi->tutor = $request->tutor;
        foreach ($tutor as $t) {
            if ($t->tutor == $request->tutor) {
                $materi->title_tutor = $t->title_tutor;
                $materi->img = $t->img;
            }
        }
        $materi->save();
        return redirect('admin/materi/css');
    }
    public function update_js(Request $request, $id)
    {
        $tutor = Tutor::all();
        $materi = Javascript::find($id);
        $materi->embed_vid = $request->embed_vid;
        $materi->desc_vid = $request->desc_vid;
        $materi->list_materi = $request->list_materi;
        $materi->tutor = $request->tutor;
        foreach ($tutor as $t) {
            if ($t->tutor == $request->tutor) {
                $materi->title_tutor = $t->title_tutor;
                $materi->img = $t->img;
            }
        }
        $materi->save();
        return redirect('admin/materi/js');
    }
    // DELETE
    public function latihan_delete_html($id)
    {
        $materi = MultipleChoice::find($id);
        $materi->delete();
        return redirect('admin/latihan/html');
    }
    public function latihan_delete_css($id)
    {
        $materi = MC_CSS::find($id);
        $materi->delete();
        return redirect('admin/latihan/css');
    }
    public function latihan_delete_js($id)
    {
        $materi = MC_JS::find($id);
        $materi->delete();
        return redirect('admin/latihan/js');
    }
    public function delete_tools($id)
    {
        $materi = tools::find($id);
        $materi->delete();
        return redirect('admin/tools');
    }
    public function delete_tutor($id)
    {
        $materi = Tutor::find($id);
        $materi->delete();
        return redirect('admin/tutor');
    }
    public function delete_list_materi($id)
    {
        $materi = ListMateri::find($id);
        $materi->delete();
        return redirect('admin/listmateri');
    }
    public function delete_list_latihan($id)
    {
        $materi = Latihan::find($id);
        $materi->delete();
        return redirect('admin/listlatihan');
    }
    public function delete_css($id)
    {
        $materi = CSS::find($id);
        $materi->delete();
        return redirect('admin/materi/css');
    }
    public function delete_html($id)
    {
        $materi = Materi::find($id);
        $materi->delete();
        return redirect('admin/materi/html');
    }
    public function delete_js($id)
    {
        $materi = Javascript::find($id);
        $materi->delete();
        return redirect('admin/materi/js');
    }
}
