@extends('admin.app_admin')
@section('judul','LATIHAN JAVASCRIPT')
@section('title','js')
@section('content')
    <div class="container-fluid">
        <form action="/admin/latihan/js/{{$materi->id}}" method="post" enctype="multipart/form-data">
          @csrf
          @method('PATCH')
          <div class="my-4 input-group row justify-content-center">
            <span class="input-group-text col-md-1" id="basic-addon1">ID</span>
            <div class="col-md-6">
                <input type="text" class="form-control" name="id"  placeholder="Auto Increment" aria-label="Username" aria-describedby="basic-addon1" disabled value="{{$materi->id}}">
            </div>
          </div>
          <div class="my-4 row justify-content-center">
            <span class="input-group-text col-md-1" id="basic-addon1">SOAL</span>
            <div class="col-md-6">
                <textarea class="form-control" id="desc" name="soal" rows="3" placeholder="Tuliskan soal">{{$materi->soal}}</textarea>
              </div>
          </div>
          <div class="my-4 row justify-content-center">
            <span class="input-group-text col-md-1" id="basic-addon1">PILIHAN A</span>
            <div class="col-md-6">
                <textarea class="form-control" id="desc" name="pil_a" rows="3" placeholder="Isi Pilihan A">{{$materi->pil_a}}</textarea>
              </div>
          </div>
          <div class="my-4 row justify-content-center">
            <span class="input-group-text col-md-1" id="basic-addon1">PILIHAN B</span>
            <div class="col-md-6">
                <textarea class="form-control" id="desc" name="pil_b" rows="3" placeholder="Isi Pilihan B">{{$materi->pil_b}}</textarea>
              </div>
          </div>
          <div class="my-4 row justify-content-center">
            <span class="input-group-text col-md-1" id="basic-addon1">PILIHAN C</span>
            <div class="col-md-6">
                <textarea class="form-control" id="desc" name="pil_c" rows="3" placeholder="Isi Pilihan C">{{$materi->pil_c}}</textarea>
              </div>
          </div>
          <div class="my-4 row justify-content-center">
            <span class="input-group-text col-md-1" id="basic-addon1">PILIHAN D</span>
            <div class="col-md-6">
                <input type="text" class="form-control" name="pil_d" placeholder="Isi Pilihan D" aria-label="Username" aria-describedby="basic-addon1" value="{{$materi->pil_d}}">
            </div>
          </div>
          <div class="my-4 row justify-content-center">
            <label class="input-group-text col-md-1" for="inputGroupSelect01">Options</label>
            <div class="col-md-6">
              <select class="form-select form-control" id="inputGroupSelect01" name="kunci">
                <option selected>Pilih Jawaban yang Benar...</option>
                <option value="a">A</option>
                <option value="b">B</option>
                <option value="c">C</option>
                <option value="d">D</option>
              </select>
            </div>
          </div>
          <div class="my-4 row justify-content-center">
            <label class="input-group-text  col-md-1" for="inputGroupFile02">Upload Img</label>
            <div class="col-md-6">
               <input type="file" class="form-control" id="inputGroupFile02" name="img">
            </div>
          </div>
          <div class="my-4 row justify-content-center">
            <a class="col-md-1 btn btn-danger" href="{{route('mc_latihan_js')}}">Back</a>
            <div class="col-md-6"> 
              <button class="col-md-1 btn btn-primary">Insert</button>
            </div>
         </div>
        </form>
    </div>
    
@endsection