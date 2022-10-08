@extends('admin.app_admin')
@section('judul','TOOLS')
@section('title','tools')
@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-md">
        <a href="{{route('create_tools')}}" class="btn btn-primary my-2">Insert Tools</a>
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
            @foreach ($materi as $tools)
            <tr>
              <th scope="row">{{$loop->iteration}}</th>
              <td>{{$tools->nama}}</td>
              <td>{{$tools->materi}}</td>
              <td>{{$tools->img}}</td>
              <td>{{$tools->link}}</td>
              <td class="d-flex">
                  <form action="/admin/tools/edit/{{$tools->id}}">
                    <button class="btn btn-primary mx-1">Update</button>
                  </form>
                  <form action="/admin/tools/{{$tools->id}}" method="POST">
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
