@extends('layouts.app-page')


@extends('layouts.navbar-page')


@section('content')

@section('headtext','FINAL SCORE MULTIPLE CHOICE')

    <div class="container">
        <div class="row">
            <div class="col-md">
            <div class="finalmc">
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">Status</th>
                        <th scope="col">Materi Latihan</th>
                        <th scope="col">Jenis Latihan</th>
                        <th scope="col">Nilai</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th>Selesai</th>
                        <td>Belajar CSS</td>
                        <td>Multiplechoice</td>
                        <td> 
                            {{$tampilNilai}}</td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md py-5">
            <a href="{{route('home')}}" class="btn btn-primary">Home</a>
        </div>
    </div>
</div>
@include('layouts.footerpage')
@endsection

