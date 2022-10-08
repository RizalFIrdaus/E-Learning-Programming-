@extends('layouts.app')
@extends('layouts.navbar')
@section('content')
<div id="home">
    <div class="container">
        <div class="box"></div>
        <div class="row d-flex">
            <div class="col-md">
                <img src="{{asset('/img/bg.png')}}" alt="" width="750px" height="640px" class="bgimg">
            </div>
            <div class="col-lg">
                <div class="head">
                    <h1>e-learning programming</h1>
                    <p style="font-weight: 300;">
                        Meningkatkan minat programming untuk 
                        semua kalangan dan mudah untuk dimengerti
                         dengan tutor expert yang berpengalaman secara 
                         gratis dan tersedia uji kemampuan dengan user lainnya.</p>
                    <a href="{{route('login')}}" class="btn btn-primary">LOGIN</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="materi">
    <div class="container">
        <div class="row">
            <div class="col-md">
                <div class="head">
                    <h1>MATERI</h1>
                </div>
                <div class="childtext" id="m">
                    <p>Mari Kita Tingkatkan Keahlian Desain dan Kode</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($listmateri as $list)
            <div class="col-12 col-md-6 col-sm-12 col-lg-4  py-3 materilist" @if ($list->id >= 0)
                data-aos="fade-up"
        data-aos-anchor-placement="center-bottom"
        data-aos-offset="300"
            @endif>
                <a href="{{url('/materi/'.$list->url)}}">
                    <div class="card px-1 py-1" style="width: 350px;">
                        <img src="{{asset('/img/'.$list->img)}}" class="card-img-top" height="200px">
                        <div class="card-body">
                          <h5 class="card-title">{{$list->judul}}</h5>
                          <p class="card-text">{{$list->title}}</p>
                        </div>
                    </div>
                </a>    
            </div>
            @endforeach
           </div>
    </div>
</div>



<div id="latihan" >
    <div class="container" data-aos="fade-right"
    data-aos-anchor-placement="center-bottom"
    data-aos-offset="300">
        <div class="row" id="l">
            <div class="col-md">
                <h1>Latihan Soal</h1>
                <p class="p">Adu pengetahuanmu dengan peserta lain</p>
            </div>
            <div class="col-md text">
                <div class="card mb-3 py-2 px-2"  style="width: 800px;">
                    <div class="row g-0">
                      <div class="col-md-4  ">
                        <img src="{{asset('/img/latihan.png')}}" width="250px" alt="..." class="latihanimg">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">List Latihan Soal</h5>
                          <p class="card-text">Terdapat banyak soal untuk tiap materinya, setiap latihan akan ada sistem leaderboard untuk mengukur kemampuan anda dengan peserta lainnya.</p>
                          <a href="{{url('/latihan')}}" class="btn btn-primary" style="color: #fff;width:200px;" >Mulai!</a>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>



<div id="tutor" >
    <div class="container" id="t">
        <div class="row">
            <div class="col-md">
                <div class="head">
                    <h1>TUTOR KAMI</h1>
                </div>
                <div class="childtext">
                    <p>Belajar Bersama Expert dalam Bidangnya</p>
                </div>
            </div>
        </div>
        <div class="row"  data-aos="fade-up"
        data-aos-anchor-placement="center-bottom"
        data-aos-offset="300">
            <div class="col-md">
                <div class="expert text-center" >
                    <img src="{{asset('/img/sandhika.png')}}" class="pb-4" width="300" alt="">
                    <h1 class="pb-2">Sandhika Galih</h1>
                    <p>Lecture - Programmer - Youtuber</p>
                </div>
            </div>
            <div class="col-md">
                <div class="expert text-center" >
                    <img src="{{asset('/img/muklis.png')}}" class="pb-4" width="300" alt="">
                    <h1 class="pb-2">Faqihza Mukhlish</h1>
                    <p>Student - Programmer - Youtuber</p>
                </div>
            </div>
            <div class="col-md">
                <div class="expert text-center" >
                    <img src="{{asset('/img/angga.png')}}" class="pb-4" width="300" alt="">
                    <h1 class="pb-2">Angga Rizki</h1>
                    <p>Designer - Freelancer - Youtuber</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="test" class="text-center">
    <div class="container">
        <div class="row">
            <div class="col-md">
                @foreach ($testi as $t)
                 <img src="{{asset('/upload/avatars/'.$t->photo)}}" width="100px" class="rounded-circle imgtxt" >
                @endforeach
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                <div class="testimoni-text">
                    <p>	&quot; Konsisten mempelajari hal baru untuk menghadapi perkembangan teknologi;	&quot;</p>
                </div>
            </div>
        </div>
    </div>
</div>


@include('layouts.footerhome')

@endsection

