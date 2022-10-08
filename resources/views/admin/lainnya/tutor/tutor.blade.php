@extends('admin.app_admin')
@section('judul','TUTOR')
@section('title','tutor')
@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-md">
        <a href="{{route('create_tutor')}}" class="btn btn-primary my-2">Insert tutor</a>
        <table class="table table-hover">
         
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">nama</th>
              <th scope="col">materi</th>
              <th scope="col">img</th>
              <th scope="col">link</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($materi as $tutor)
            <tr>
              <th scope="row">{{$loop->iteration}}</th>
              <td>{{$tutor->tutor}}</td>
              <td>{{$tutor->title_tutor}}</td>
              <td>{{$tutor->img}}</td>
              <td class="d-flex">
                  <form action="/admin/tutor/edit/{{$tutor->id}}">
                    <button class="btn btn-primary mx-1">Update</button>
                  </form>
                  <form action="/admin/tutor/{{$tutor->id}}" method="POST">
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
