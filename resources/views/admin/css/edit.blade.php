@extends('admin.app_admin')
@section('judul','MATERI CSS')
@section('title','css')
@section('content')
    <div class="container-fluid">
        <form action="/admin/materi/css/{{$materi->id}}" method="post" enctype="multipart/form-data">
          @csrf
          @method('PATCH')
          <div class="my-4 input-group row justify-content-center">
            <span class="input-group-text col-md-1" id="basic-addon1">ID</span>
            <div class="col-md-6">
                <input type="text" class="form-control" name="id"  placeholder="Auto Increment" aria-label="Username" aria-describedby="basic-addon1" disabled value="{{$materi->id}}">
            </div>
          </div>
          <div class="my-4 row justify-content-center">
            <span class="input-group-text col-md-1" id="basic-addon1">EMBED VIDEO</span>
            <div class="col-md-6">
                <input type="text" class="form-control" name="embed_vid" placeholder="Name File Video" aria-label="Username" aria-describedby="basic-addon1" value="{{$materi->embed_vid}}">
            </div>
          </div>
          <div class="my-4 row justify-content-center">
            <span class="input-group-text col-md-1" id="basic-addon1">DESC VIDEO</span>
            <div class="col-md-6">
                <textarea class="form-control" id="desc" name="desc_vid" rows="3" placeholder="Describe about the video...">{{$materi->desc_vid}}</textarea>
              </div>
          </div>
          <div class="my-4 row justify-content-center">
            <span class="input-group-text col-md-1" id="basic-addon1">TITLE VIDEO</span>
            <div class="col-md-6">
                <input type="text" class="form-control" name="list_materi" placeholder="Title video in list materi" aria-label="Username" aria-describedby="basic-addon1" value="{{$materi->list_materi}}">
            </div>
          </div>
          <div class="my-4 row justify-content-center">
            <label class="input-group-text col-md-1" for="inputGroupSelect01">TUTOR EXPERT</label>
            <div class="col-md-6">
              <select class="form-select form-control" id="inputGroupSelect01" name="tutor">
                <option selected>Pilih Tutor...</option>
                @foreach ($tutor as $t)
                <option value="{{$t->tutor}}">{{$t->tutor}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="my-4 row justify-content-center">
            <label class="input-group-text  col-md-1" for="inputGroupFile02">Upload Video</label>
            <div class="col-md-6">
               <input type="file" class="form-control" id="inputGroupFile02" name="embed_vid">
            </div>
          </div>
          <div class="my-4 row justify-content-center">
            <a class="col-md-1 btn btn-danger" href="{{route('materi_css')}}">Back</a>
            <div class="col-md-6"> 
              <button class="col-md-1 btn btn-primary">Insert</button>
            </div>
         </div>
        </form>
    </div>
    
@endsection