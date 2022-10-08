@extends('layouts.app-page')


@extends('layouts.navbar-page')


@section('content')

@section('headtext','LIST LATIHAN MATERI')


   <div class="container">
       <div class="list-latihan">
           <div class="row">
               @foreach ($latihan as $lat)
               <div class="col-lg">
                   <a href="{{$lat->url_latihan . '?page=1'}}">
                       <div class="card" style="width: 350px;">
                           <img src="{{asset('/img/'.$lat->img).'.png'}}" class="card-img-top" >
                           <div class="card-body">
                           <h5 class="card-title">{{$lat->title}}</h5>
                           <p class="card-text">{{$lat->child_title}}</p>
                           </div>
                       </div>
                   </a>
               </div>  
               @endforeach
           </div>
           <div class="row">
               <div class="col-md d-flex justify-content-center">
                   {{$latihan->links()}}
               </div>
           </div>
       </div>
   </div>



@include('layouts.footerpage')
@endsection

