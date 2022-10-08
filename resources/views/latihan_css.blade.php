@extends('layouts.app-page')


@extends('layouts.navbar-page')


@section('content')

@section('headtext','LATIHAN SOAL CSS')

    <div class="container d-flex flex-column">
        <div id="question">
            <div class="row">
                <div class="col-md">
                    <div class="main-quest">
                        <div class="soal">
                            @foreach ($multiplechoice as $mc)
                                <p> {{$mc->id}}. {{$mc->soal}} ...</p>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <form action="/latihan/css/{{$mc->id}}" method="post">
                @csrf
                @method('patch')
                @foreach ($multiplechoice as $mc)    
                <div class="row">
                    <div class="col-md-6">
                        <div class="pilihan">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jawaban" id="pil_a"  value = "a" {{ ($mc->radioAct=="a")? "checked" : "" }}>
                                <label class="form-check-label" for="pil_a">
                                    A. {{$mc->pil_a}}
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="pilihan">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jawaban" id="pil_b" value = "b" {{ ($mc->radioAct=="b")? "checked" : "" }}>
                                <label class="form-check-label" for="pil_b">
                                    B. {{$mc->pil_b}}
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="pilihan">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jawaban" id="pil_c" value = "c" {{ ($mc->radioAct=="c")? "checked" : "" }}>
                                <label class="form-check-label" for="pil_c">
                                    C. {{$mc->pil_c}}
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="pilihan">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jawaban" id="pil_d" value = "d" {{ ($mc->radioAct=="d")? "checked" : "" }}>
                                <label class="form-check-label" for="pil_d">
                                    D. {{$mc->pil_d}}
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="col-lg-12" style="padding-bottom:50px; padding-top:50px;">
                    <nav aria-label="...">
                        <ul class="pagination pagination-lg flex-wrap">
        
                            @foreach ($paginatesoal as $re)
                                <li class="page-item py-2 px-2" ><a style="width: 60px;" class="page-link @if($re->is_act == 1 ) is_act @endif @if(Request::fullUrl() == 'http://127.0.0.1:8000/latihan/css?page='.$re->id ) no_act @endif" href="{{url('/latihan/css/?page='.$re->id)}}">{{$re->id}}</a></li>
                            @endforeach
                        </ul>
                      </nav>
                </div>  
                <div class="row my-4 ">
                    <div class="col-md d-flex justify-content-start">
                   
                        @if (Request::fullUrl() == 'http://127.0.0.1:8000/latihan/css?page='.$paginatesoal->last()->id)
                            <a class="btn btn-primary soal" href="{{route('recapcss')}}">Selesai Latihan</a>
                        @endif
                             
                     </div>
                    <div class="col-md d-flex justify-content-end">
                        <button class="btn btn-primary soal my-submit" type="submit" name = "submit" value = "next">Submit</button>
                    </div>
                </div>   
            </form> 
        </div>
        
    </div> 
@include('layouts.footerpage')
@endsection

