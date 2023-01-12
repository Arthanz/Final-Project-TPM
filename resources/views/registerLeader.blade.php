@extends('template')

@section('title','Register Leader')
@section ('content')
<div class="m-5">
    <h1 class="text-center">Leader Registration</h1>
    <form action="/store-leader" method="POST" enctype="multipart/form-data">
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
        <div class="mb-3">
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
    <form action="/register" class="mt-4"><button type="submit" class="btn btn-primary"> Back </button></form>
</div>
  @endsection
