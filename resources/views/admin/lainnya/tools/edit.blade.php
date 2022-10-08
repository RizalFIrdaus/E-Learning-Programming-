@extends('admin.app_admin')
@section('judul','TOOLS')
@section('title','tools')
@section('content')
    <div class="container-fluid">
        <form action="/admin/tools/{{$materi->id}}" method="post" enctype="multipart/form-data">
          @csrf
          @method('PATCH')
          <div class="my-4 input-group row justify-content-center">
            <span class="input-group-text col-md-1" id="basic-addon1">ID</span>
            <div class="col-md-6">
                <input type="text" class="form-control" name="id"  placeholder="Auto Increment" aria-label="Username" aria-describedby="basic-addon1"  value="{{$materi->id}}" disabled>
            </div>
          </div>
          <div class="my-4 row justify-content-center">
            <span class="input-group-text col-md-1" id="basic-addon1">NAMA</span>
            <div class="col-md-6">
                <input type="text" class="form-control" name="nama" placeholder="Nama Aplikasi" aria-label="Username" aria-describedby="basic-addon1" value="{{$materi->nama}}" >
            </div>
          </div>
          <div class="my-4 row justify-content-center">
            <span class="input-group-text col-md-1" id="basic-addon1">MATERI</span>
            <div class="col-md-6">
                <input type="text" class="form-control" name="materi" placeholder="Nama Materi" aria-label="Username" aria-describedby="basic-addon1" value="{{$materi->materi}}" >
            </div>
          </div>
          <div class="my-4 row justify-content-center">
            <span class="input-group-text col-md-1" id="basic-addon1">LINK</span>
            <div class="col-md-6">
                <input type="text" class="form-control" name="link" placeholder="URL Link" aria-label="Username" aria-describedby="basic-addon1" value="{{$materi->link}}" >
            </div>
          </div>
          <div class="my-4 row justify-content-center">
            <label class="input-group-text  col-md-1" for="inputGroupFile02">Upload Img</label>
            <div class="col-md-6">
               <input type="file" class="form-control" id="inputGroupFile02" name="img" value="{{$materi->img}}" >
            </div>
          </div>
          <div class="my-4 row justify-content-center">
            <a class="col-md-1 btn btn-danger" href="{{route('tools')}}">Back</a>
            <div class="col-md-6"> 
              <button class="col-md-1 btn btn-primary">Insert</button>
            </div>
         </div>
        </form>
    </div>
    
@endsection