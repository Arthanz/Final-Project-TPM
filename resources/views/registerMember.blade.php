{{-- @extends('template')

@section('title','Register Member')
@section ('content')
<div class="m-5">
    <h1 class="text-center">Member Registration</h1>
    <form action="/store-member" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input type="text" class="form-control  @error('name') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" value="{{old('name')}}">
          @error('name')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
          </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">WA Number</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="WA_Number"  value="{{old('WA_Number')}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Line ID</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="Line_ID"  value="{{old('Line_ID')}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Github/Gitlab ID</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="Github_ID"  value="{{old('Github_ID')}}">
        </div>
        {{-- <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Birth Place</label>
            <select class="form-select" aria-label="Default select example" name="Birth_place">
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->nama}}</option>
                @endforeach
              </select>
        </div> --}}
        {{-- <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Birth Place</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="Birth_place"  value="{{old('Birth_place')}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Birth Date</label>
            <input type="date" class="form-control" id="exampleInputPassword1" name="Birth_date"  value="{{old('Birth_date')}}">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">CV</label>
          <input type="file" class="form-control" id="exampleInputPassword1" name="cv"  value="{{old('cv')}}">
         </div>
         <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Card</label>
            <input type="file" class="form-control" id="exampleInputPassword1" name="card"  value="{{old('card')}}">
           </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
  @endsection  --}}


  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/member.css">
    <title>Add Binusian</title>
</head>
<body>
    <div id="form">
        <div class="container">
            <h1>Register</h1>
        
            <form action="/store-member" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="pad informasi">
                    <h2>Informasi Member</h2>
                </div>
                <div class="pad nama_lengkap">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" class="form-control  @error('name') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" value="{{old('name')}}">
                </div>
                <div class="pad email">
                    <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                </div>
                <div class="pad nomor_handphone">
                    <label for="exampleInputPassword1" class="form-label">WA Number</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="WA_Number"  value="{{old('WA_Number')}}">
                </div>
                <div class="pad id_line">
                    <label for="exampleInputPassword1" class="form-label">Line ID</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="Line_ID"  value="{{old('Line_ID')}}">
                </div>
                <div class="pad github">
                    <label for="exampleInputPassword1" class="form-label">Github/Gitlab ID</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="Github_ID"  value="{{old('Github_ID')}}">
                </div>
                <div class="pad tempat_lahir">
                    <label for="exampleInputPassword1" class="form-label">Birth Place</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="Birth_place"  value="{{old('Birth_place')}}">
                </div>

                <div class="pad tanggal_lahir">
                    <label for="exampleInputPassword1" class="form-label">Birth Date</label>
                    <input type="date" class="form-control" id="exampleInputPassword1" name="Birth_date"  value="{{old('Birth_date')}}">
                </div>

                <div class="pad btn cv">
                    <div class="label-btn">
                            <label for="">Upload CV <span>(.jpg, .png, .jpeg, .pdf)</span></label>
                    </div>
                    <label for="exampleInputPassword1" class="form-label">CV</label>
                    <input type="file" class="form-control" id="exampleInputPassword1 actual-btn" name="cv"  value="{{old('cv')}}">
                </div>
                
                <div class="pad btn flazz">
                    <div class="label-btn">
                        <label for="">Upload Flazz Card <span>(.jpg, .png, .jpeg, .pdf)</span></label>
                    </div>
                    <label for="exampleInputPassword1" class="form-label">Card</label>
                    <input type="file" class="form-control" id="exampleInputPassword1 actual-btn" name="card"  value="{{old('card')}}">
                </div> 
                

                <div class="pad form_btn">
                     <form action="/register" class="mt-4"><button type="submit" class="btn btn-primary btn back"> Back </button></form>
                    <button class="btn submit">Submit</button>
                </div>
            </form>
        </div>
        {{-- <form action="/register" class="mt-4"><button type="submit" class="btn btn-primary"> Back </button></form> --}}
    </div>
</body>
</html>