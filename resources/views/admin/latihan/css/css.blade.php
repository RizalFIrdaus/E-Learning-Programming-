@extends('admin.app_admin')
@section('judul','LATIHAN CSS')
@section('title','css')
@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-md">
        <a href="{{route('latihan_create_css')}}" class="btn btn-primary my-2">Insert Latihan</a>
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">soal</th>
              <th scope="col">pilihan A</th>
              <th scope="col">pilihan B</th>
              <th scope="col">pilihan C</th>
              <th scope="col">pilihan D</th>
              <th scope="col">img</th>
              <th scope="col">kunci</th>
              <th scope="col">edit</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($materi as $css)
            <tr>
              <th scope="row">{{$loop->iteration}}</th>
              <td>...</td>
              <td>{{$css->pil_a}}</td>
              <td>{{$css->pil_b}}</td>
              <td>{{$css->pil_c}}</td>
              <td>{{$css->pil_d}}</td>
              <td>{{$css->img}}</td>
              <td>{{$css->kunci}}</td>
              <td class="d-flex">
                  <form action="/admin/latihan/css/edit/{{$css->id}}">
                    <button class="btn btn-primary mx-1">Update</button>
                  </form>
                  <form action="/admin/latihan/css/{{$css->id}}" method="POST">
                      @csrf
                      @method('delete')
                      <button class="btn btn-danger mx-1">Delete</button>
                  </form>
                </td>
            </tr>
          </tbody>
          @endforeach
        </table>
      </div>
    </div>
  </div>    
@endsection
