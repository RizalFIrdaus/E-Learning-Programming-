@extends('admin.app_admin')
@section('judul','MATERI HTML')
@section('title','html')
@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-md">
        <a href="{{route('create_html')}}" class="btn btn-primary my-2">Insert Materi</a>
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
            @foreach ($materi as $html)
            <tr>
              <th scope="row">{{$loop->iteration}}</th>
              <td>{{$html->embed_vid}}</td>
              <td>....</td>
              <td>{{$html->list_materi}}</td>
              <td>{{$html->tutor}}</td>
              <td>{{$html->title_tutor}}</td>
              <td>{{$html->img}}</td>
              <td class="d-flex">
                  <form action="/admin/materi/html/edit/{{$html->id}}">
                    <button class="btn btn-primary mx-1">Update</button>
                  </form>
                  <form action="/admin/materi/html/{{$html->id}}" method="POST">
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
