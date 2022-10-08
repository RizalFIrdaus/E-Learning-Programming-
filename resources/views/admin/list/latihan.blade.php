@extends('admin.app_admin')
@section('judul','List Latihan')
@section('title','list latihan')
@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-md">
        <a href="{{route('create_list_latihan')}}" class="btn btn-primary my-2">Insert List latihan</a>
        <table class="table table-hover">
         
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">title</th>
              <th scope="col">child_title</th>
              <th scope="col">img</th>
              <th scope="col">url_latihan</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($materi as $list_latihan)
            <tr>
              <th scope="row">{{$loop->iteration}}</th>
              <td>{{$list_latihan->title}}</td>
              <td>{{$list_latihan->child_title}}</td>
              <td>{{$list_latihan->img}}</td>
              <td>{{$list_latihan->url_latihan}}</td>
              <td class="d-flex">
                  <form action="/admin/listlatihan/edit/{{$list_latihan->id}}">
                    <button class="btn btn-primary mx-1">Update</button>
                  </form>
                  <form action="/admin/listlatihan/{{$list_latihan->id}}" method="POST">
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
