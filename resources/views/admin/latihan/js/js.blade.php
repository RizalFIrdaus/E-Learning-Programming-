@extends('admin.app_admin')
@section('judul','LATIHAN JAVASCRIPT')
@section('title','js')
@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-md">
        <a href="{{route('latihan_create_js')}}" class="btn btn-primary my-2">Insert Latihan</a>
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
            @foreach ($materi as $js)
            <tr>
              <th scope="row">{{$loop->iteration}}</th>
              <td>...</td>
              <td>{{$js->pil_a}}</td>
              <td>{{$js->pil_b}}</td>
              <td>{{$js->pil_c}}</td>
              <td>{{$js->pil_d}}</td>
              <td>{{$js->img}}</td>
              <td>{{$js->kunci}}</td>
              <td class="d-flex">
                  <form action="/admin/latihan/js/edit/{{$js->id}}">
                    <button class="btn btn-primary mx-1">Update</button>
                  </form>
                  <form action="/admin/latihan/js/{{$js->id}}" method="POST">
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
