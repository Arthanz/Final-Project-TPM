@extends ('template')

@section ('title', 'Edit Members')

@section ('content')
<form class="m-5" action="/updateMembers/{{$member->Member_ID}}" method="POST"  enctype="multipart/form-data">
    @method('patch')
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Name</label>
      <input type="text" class="form-control  @error('name') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" value="{{$member->name}}">
      @error('name')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" value="{{$member->email}}">
      </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">WA Number</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="WA_Number"  value="{{$member->WA_Number}}">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Line ID</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="Line_ID"  value="{{$member->Line_ID}}">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Github/Gitlab ID</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="Github_ID"  value="{{$member->Github_ID}}">
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
        <input type="text" class="form-control" id="exampleInputPassword1" name="Birth_place"  value="{{$member->Birth_place}}">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Birth Date</label>
        <input type="date" class="form-control" id="exampleInputPassword1" name="Birth_date"  value="{{$member->Birth_date}}">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">CV</label>
      <input type="file" class="form-control" id="exampleInputPassword1" name="cv"  value="{{$member->cv}}">
     </div>
     <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Card</label>
        <input type="file" class="form-control" id="exampleInputPassword1" name="card"  value="{{$member->card}}">
       </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection