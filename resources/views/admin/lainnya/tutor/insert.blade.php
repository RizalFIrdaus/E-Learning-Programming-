@extends('admin.app_admin')
@section('judul','TUTOR')
@section('title','tutor')
@section('content')
    <div class="container-fluid">
        <form action="/admin/tutor/insert" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="my-4 input-group row justify-content-center">
            <span class="input-group-text col-md-1" id="basic-addon1">ID</span>
            <div class="col-md-6">
                <input type="text" class="form-control" name="id"  placeholder="Auto Increment" aria-label="Username" aria-describedby="basic-addon1" disabled>
            </div>
          </div>
          <div class="my-4 row justify-content-center">
            <span class="input-group-text col-md-1" id="basic-addon1">TUTOR</span>
            <div class="col-md-6">
                <input type="text" class="form-control" name="tutor" placeholder="Name Tutor" aria-label="Username" aria-describedby="basic-addon1">
            </div>
          </div>
          <div class="my-4 row justify-content-center">
            <span class="input-group-text col-md-1" id="basic-addon1">TITLE TUTOR</span>
            <div class="col-md-6">
                <input type="text" class="form-control" name="title_tutor" placeholder="Title Tutor" aria-label="Username" aria-describedby="basic-addon1">
            </div>
          </div>
          <div class="my-4 row justify-content-center">
            <label class="input-group-text  col-md-1" for="inputGroupFile02">Upload Img</label>
            <div class="col-md-6">
               <input type="file" class="form-control" id="inputGroupFile02" name="img">
            </div>
          </div>
          <div class="my-4 row justify-content-center">
            <a class="col-md-1 btn btn-danger" href="{{route('tutor')}}">Back</a>
            <div class="col-md-6"> 
              <button class="col-md-1 btn btn-primary">Insert</button>
            </div>
         </div>
        </form>
    </div>
    
@endsection