@extends('layouts.app-page')
@extends('layouts.navbar-page')



@section('content')
@section('headtext','CSS Dasar')
@section('childtext','Menguasai Pondasi CSS')

@foreach ($materi as $mat)
<div class="container">
    <div id="video">
        <div class="row">
            <div class="col-md-10">
                {{-- <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item"  src="{{$mat->embed_vid}}" allowfullscreen></iframe>
                </div> --}}
                <video
                    id="my-video"
                    class="video-js vjs-fluid"
                    controls
                    preload="auto"
                    width="920"
                    data-setup="{}"
                >
                    <source src="{{asset('upload/video/'.$mat->embed_vid)}}" type="video/mp4" />
                    <p class="vjs-no-js">
                    To view this video please enable JavaScript, and consider upgrading to a
                    web browser that
                    <a href="https://videojs.com/html5-video-support/" target="_blank"
                        >supports HTML5 video</a
                    >
                    </p>
                </video>
            </div> 
@endforeach
            <div class="col-md-2">
                <div class="card self-card">
                    <div class="card-header">
                      List Materi
                    </div>
                    <ul class="list-group list-group-flush">
                        @foreach ($paginatemateri as $paginate)
                        <li class="list-group-item text-center">
                            <a href="{{url('/materi/css?page='.$loop->iteration)}}">
                                <div class="card-list text-center">
                                    {{$paginate->list_materi}}
                                </div>
                            </a> 
                        </li>
                        @endforeach
                      </ul>
                  </div>
            </div>
        </div>
@foreach ($materi as $mat)
        <div class="row py-5">
            <div class="col-md-10">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="pills-desc-tab" data-bs-toggle="pill" data-bs-target="#pills-desc" type="button" role="tab" aria-controls="pills-desc" aria-selected="true">Description</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-tools-tab" data-bs-toggle="pill" data-bs-target="#pills-tools" type="button" role="tab" aria-controls="pills-tools" aria-selected="false">Tools</button>
                    </li>
                  </ul>
                  <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-desc" role="tabpanel" aria-labelledby="pills-desc-tab">
                        <div class="row">
                            <div class="col-md">
                                <div class="text-pane">
                                    <p>{{$mat->desc_vid}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-9">
                                <div class="expert">
                                    <h1>Tutor Expert</h1>
                                    <div class="row">
                                        @foreach ($photo as $p)
                                        <div class="col-md-4">
                                            <img src="{{asset('/img/'.$p->img)}}" class="rounded-circle">
                                        </div>
                                        @endforeach
                                        <div class="col-md d-flex justify-content-center align-items-start flex-column">
                                            <div class="row">
                                                <div class="col-md">
                                                    <h2 class="head-expert">{{$mat->tutor}}</h2>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md">
                                                    <p class="child-expert">{{$mat->title_tutor}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                    
@endforeach

                    <div class="tab-pane fade" id="pills-tools" role="tabpanel" aria-labelledby="pills-tools-tab">
                       <div class="row">
                        @foreach ($tools as $tool)
                           <div class="col-md-3 text-center">
                               <div class="tools">
                                  <img src="{{asset('/img/'.$tool->img)}}"  class="rounded-circle">
                                  <p>{{$tool->nama}}</p>
                                  <a href="{{$tool->link}}" class="btn btn-primary">Download</a>
                               </div>
                           </div>
                           @endforeach
                       </div>
                    </div>         
                  </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                <div id="disqus_thread"></div>
            </div>
        </div>
    </div>
</div>


@include('layouts.footerpage')
@endsection

