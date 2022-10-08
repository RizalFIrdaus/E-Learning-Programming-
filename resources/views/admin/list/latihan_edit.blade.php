@extends('admin.app_admin')
@section('judul','LIST LATIHAN')
@section('title','list latihan')
@section('content')
    <div class="container-fluid">
        <form action="/admin/listlatihan/{{$materi->id}}" method="post" enctype="multipart/form-data">
          @csrf
          @method('PATCH')
          <div class="my-4 input-group row justify-content-center">
            <span class="input-group-text col-md-1" id="basic-addon1">ID</span>
            <div class="col-md-6">
                <input type="text" class="form-control" name="id"  placeholder="Auto Increment" aria-label="Username" aria-describedby="basic-addon1" value="{{$materi->id}}" disabled>
            </div>
          </div>
          <div class="my-4 row justify-content-center">
            <span class="input-group-text col-md-1" id="basic-addon1">TITLE</span>
            <div class="col-md-6">
                <input type="text" class="form-control" name="title" placeholder="Judul" aria-label="Username" aria-describedby="basic-addon1" value="{{$materi->title}}">
            </div>
          </div>
          <div class="my-4 row justify-content-center">
            <span class="input-group-text col-md-1" id="basic-addon1">CHILD TITLE</span>
            <div class="col-md-6">
                <input type="text" class="form-control" name="child_title" placeholder="Title Judul" aria-label="Username" aria-describedby="basic-addon1" value="{{$materi->child_title}}">
            </div>
          </div>
          <div class="my-4 row justify-content-center">
            <span class="input-group-text col-md-1" id="basic-addon1">URL</span>
            <div class="col-md-6">
                <input type="text" class="form-control" name="url_latihan" placeholder="URL Link" aria-label="Username" aria-describedby="basic-addon1" value="{{$materi->url_latihan}}">
            </div>
          </div>
          <div class="my-4 row justify-content-center">
            <label class="input-group-text  col-md-1" for="inputGroupFile02">Upload Img</label>
            <div class="col-md-6">
               <input type="file" class="form-control" id="inputGroupFile02" name="img">
            </div>
          </div>
          <div class="my-4 row justify-content-center">
            <a class="col-md-1 btn btn-danger" href="{{route('list_latihan')}}">Back</a>
            <div class="col-md-6"> 
              <button class="col-md-1 btn btn-primary">Insert</button>
            </div>
         </div>
        </form>
    </div>
    
@endsection