@extends('admin.app_admin')
@section('judul','MATERI CSS')
@section('title','css')
@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-md">
        <a href="{{route('create_css')}}" class="btn btn-primary my-2">Insert Materi</a>
        <table class="table table-hover">
         
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">embed_vid</th>
              <th scope="col">desc_vid</th>
              <th scope="col">list_materi</th>
              <th scope="col">tutor</th>
              <th scope="col">title_tutor</th>
              <th scope="col">img</th>
              <th scope="col">edit</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($materi as $css)
            <tr>
              <th scope="row">{{$loop->iteration}}</th>
              <td>{{$css->embed_vid}}</td>
              <td>....</td>
              <td>{{$css->list_materi}}</td>
              <td>{{$css->tutor}}</td>
              <td>{{$css->title_tutor}}</td>
              <td>{{$css->img}}</td>
              <td class="d-flex">
                  <form action="/admin/materi/css/edit/{{$css->id}}">
                    <button class="btn btn-primary mx-1">Update</button>
                  </form>
                  <form action="/admin/materi/css/{{$css->id}}" method="POST">
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
