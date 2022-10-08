@extends('admin.app_admin')
@section('judul','LATIHAN HTML')
@section('title','html')
@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-md">
        <a href="{{route('latihan_create_html')}}" class="btn btn-primary my-2">Insert Latihan</a>
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
            @foreach ($materi as $html)
            <tr>
              <th scope="row">{{$loop->iteration}}</th>
              <td>...</td>
              <td>{{$html->pil_a}}</td>
              <td>{{$html->pil_b}}</td>
              <td>{{$html->pil_c}}</td>
              <td>{{$html->pil_d}}</td>
              <td>{{$html->img}}</td>
              <td>{{$html->kunci}}</td>
              <td class="d-flex">
                  <form action="/admin/latihan/html/edit/{{$html->id}}">
                    <button class="btn btn-primary mx-1">Update</button>
                  </form>
                  <form action="/admin/latihan/html/{{$html->id}}" method="POST">
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
