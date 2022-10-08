@extends('admin.app_admin')
@section('judul','List Materi')
@section('title','list materi')
@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-md">
        <a href="{{route('create_list_materi')}}" class="btn btn-primary my-2">Insert List Materi</a>
        <table class="table table-hover">
         
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">judul</th>
              <th scope="col">title</th>
              <th scope="col">img</th>
              <th scope="col">url</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($materi as $list_materi)
            <tr>
              <th scope="row">{{$loop->iteration}}</th>
              <td>{{$list_materi->judul}}</td>
              <td>{{$list_materi->title}}</td>
              <td>{{$list_materi->img}}</td>
              <td>{{$list_materi->url}}</td>
              <td class="d-flex">
                  <form action="/admin/listmateri/edit/{{$list_materi->id}}">
                    <button class="btn btn-primary mx-1">Update</button>
                  </form>
                  <form action="/admin/listmateri/{{$list_materi->id}}" method="POST">
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
