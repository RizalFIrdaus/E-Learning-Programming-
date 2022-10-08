@extends('layouts.app-page')


@extends('layouts.navbar-page')


@section('content')

@section('headtext','LEADERBOARD')


    <div class="container">
        <div id="leaderboard-mc">
          <div class="row">
            <div class="col-md">
              <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-html-tab" data-bs-toggle="pill" data-bs-target="#pills-html" type="button" role="tab" aria-controls="pills-html" aria-selected="true">HTML</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-css-tab" data-bs-toggle="pill" data-bs-target="#pills-css" type="button" role="tab" aria-controls="pills-css" aria-selected="false">CSS</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-js-tab" data-bs-toggle="pill" data-bs-target="#pills-js" type="button" role="tab" aria-controls="pills-js" aria-selected="false">JAVASCRIPT</button>
                </li>
              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-html" role="tabpanel" aria-labelledby="pills-html-tab">
                  <div class="row">
                    <div class="col-md">
                      <div class="card">
                        <div class="card-header">
                          TOP 10 SCORE HTML
                        </div>
                        <ul class="list-group list-group-flush">
                          @foreach ($html as $user)
                          @if ($user->nilai_mc == null)
    
                          @else
                          <li class="list-group-item" @if(Auth::user() == $user) style="background-color: #411CA3;;color:#fff" @endif>
                            <div class="row">
                              <div class="col-md">
                              {{$loop->iteration}}
                              @if ($user->provider_id == null)
                              <img src="{{'/upload/avatars/'.$user->photo}}" class="rounded-circle mx-4 my-4" width="50px"> 
                              @endif
                              @if ($user->provider_id)
                              <img src="{{$user->avatar}}" class="rounded-circle mx-4 my-4" width="50px"> 
                              @endif
                              {{$user->name}}
                              </div>
                              <div class="col-md d-flex justify-content-center align-items-center mt-2">
                                <p class="font-weight-bold">
                                  @if ($loop->iteration == 1)
                                  <img src="{{asset('/img/gm.png')}}" alt="" width="40px">
                                  @elseif ($loop->iteration == 2)
                                  <img src="{{asset('/img/sm.png')}}" alt="" width="40px">
                                  @elseif($loop->iteration == 3)
                                  <img src="{{asset('/img/bm.png')}}" alt="" width="40px">
                                  @endif
    
                                   {{$user->nilai_mc}} <sub style="font-size: 10px; font-weight: 400">score</sub> </p>
                              </div>
                            </div>
                          </li>     
                          @endif
                          @endforeach
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="pills-css" role="tabpanel" aria-labelledby="pills-css-tab">
                  <div class="row">
                    <div class="col-md">
                      <div class="card">
                        <div class="card-header">
                          TOP 10 SCORE CSS
                        </div>
                        <ul class="list-group list-group-flush">
                          @foreach ($css as $user)
                          @if ($user->nilai_css == null)
    
                          @else
                          <li class="list-group-item" @if(Auth::user() == $user) style="background-color: #411CA3;;color:#fff" @endif>
                            <div class="row">
                              <div class="col-md">
                                {{$loop->iteration}}
                                @if ($user->provider_id == null)
                                <img src="{{'/upload/avatars/'.$user->photo}}" class="rounded-circle mx-4 my-4" width="50px"> 
                                @endif
                                @if ($user->provider_id)
                                <img src="{{$user->avatar}}" class="rounded-circle mx-4 my-4" width="50px"> 
                                @endif
                                {{$user->name}}
                                </div>
                              <div class="col-md d-flex justify-content-center align-items-center mt-2">
                                <p class="font-weight-bold">
                                  @if ($loop->iteration == 1)
                                  <img src="{{asset('/img/gm.png')}}" alt="" width="40px">
                                  @elseif ($loop->iteration == 2)
                                  <img src="{{asset('/img/sm.png')}}" alt="" width="40px">
                                  @elseif($loop->iteration == 3)
                                  <img src="{{asset('/img/bm.png')}}" alt="" width="40px">
                                  @endif
    
                                   {{$user->nilai_css}} <sub style="font-size: 10px; font-weight: 400">score</sub> </p>
                              </div>
                            </div>
                          </li>     
                          @endif
                          @endforeach
                        </ul>
                      </div>
                    </div>
                 </div>
                </div>
                <div class="tab-pane fade" id="pills-js" role="tabpanel" aria-labelledby="pills-js-tab">
                  <div class="row">
                    <div class="col-md">
                      <div class="card">
                        <div class="card-header">
                          TOP 10 SCORE JAVASCRIPT
                        </div>
                        <ul class="list-group list-group-flush">
                          @foreach ($js as $user)
                          @if ($user->nilai_js == null)
    
                          @else
                          <li class="list-group-item" @if(Auth::user() == $user) style="background-color: #411CA3;;color:#fff" @endif>
                            <div class="row">
                              <div class="col-md">
                                {{$loop->iteration}}
                                @if ($user->provider_id == null)
                                <img src="{{'/upload/avatars/'.$user->photo}}" class="rounded-circle mx-4 my-4" width="50px"> 
                                @endif
                                @if ($user->provider_id)
                                <img src="{{$user->avatar}}" class="rounded-circle mx-4 my-4" width="50px"> 
                                @endif
                                {{$user->name}}
                                </div>
                              <div class="col-md d-flex justify-content-center align-items-center mt-2">
                                <p class="font-weight-bold">
                                  @if ($loop->iteration == 1)
                                  <img src="{{asset('/img/gm.png')}}" alt="" width="40px">
                                  @elseif ($loop->iteration == 2)
                                  <img src="{{asset('/img/sm.png')}}" alt="" width="40px">
                                  @elseif($loop->iteration == 3)
                                  <img src="{{asset('/img/bm.png')}}" alt="" width="40px">
                                  @endif
    
                                   {{$user->nilai_js}} <sub style="font-size: 10px; font-weight: 400">score</sub> </p>
                              </div>
                            </div>
                          </li>     
                          @endif
                          @endforeach
                        </ul>
                      </div>
                    </div>
                </div> 
          </div>   
        </div>
    </div>

@endsection

