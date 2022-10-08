@extends('layouts.app-page')


@extends('layouts.navbar-page')


@section('content')

@section('headtext','RECAP SOAL MULTIPLE CHOICE')


    <div class="container">
        <div class="recap">
            <div class="row">
                <div class="col-md d-flex">
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">NO</th>
                            <th scope="col">STATUS</th>
                            <th scope="col">PILIHAN KUNCI</th>
                            <th scope="col">ISI PILIHAN KUNCI</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($recap as $re)
                          <tr>
                            <th>{{$re->id}}</th>
                            @if ($re->is_act == 0)
                                <td>Belum terjawab</td>
                            @else
                                <td>Sudah terjawab</td>
                            @endif
                            <td style="text-transform: uppercase;">{{$re->radioAct}}</td>
                            <td>{{$re->user_kunci}}</td>
                          </tr>    
                        @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <a href="{{route('latihan_js')}}" class="btn btn-primary">Kembali</a>
                </div>
                <div class="col-md d-flex justify-content-end">
                    <form action="{{url('/latihan/js/recap/finalscore/'.Auth::user()->id)}}" method="post">
                        @csrf
                        @method('patch')
                        <button type="submit" class="btn btn-primary">Selesai Latihan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


@include('layouts.footerpage')
@endsection

