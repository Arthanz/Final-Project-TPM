@extends ('template')

@section ('title', 'Show Groups')

@section ('content')

@foreach ($group as $item)
    
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{$item->Group_name}}</h5>
    <h6 class="card-subtitle mb-2 text-muted">{{$item->is_verified}}</h6>
    {{-- <a href="#" class="card-link">Leader Info</a>
    <a href="#" class="card-link">Members Info</a>
    <a href="/groupDetail/{{$item->Group_ID}}" class="btn btn-primary">Click to show detail!</a> --}}
    <form action="/deleteGroup/{{$item->Group_ID}}" method="POST">
      @csrf
      @method('delete')
      <button class="btn btn-danger">Delete</button>
  </div>

@endforeach

@foreach ($leader as $item)
<div class="card-body">
  <h2>Leader : </h2>
  <h5 class="card-title">{{$item->name}}</h5>
  <h6 class="card-subtitle mb-2 text-muted">{{$item->email}}</h6>
  <h6 class="card-subtitle mb-2 text-muted">{{$item->WA_Number}}</h6>
  <h6 class="card-subtitle mb-2 text-muted">{{$item->Line_ID}}</h6>
  <h6 class="card-subtitle mb-2 text-muted">{{$item->Github_ID}}</h6>
  <h6 class="card-subtitle mb-2 text-muted">{{$item->Birth_place}}</h6>
  <h6 class="card-subtitle mb-2 text-muted">{{$item->Birth_date}}</h6>
  <a href="/editLeader/{{$item->Leader_ID}}">Click here to edit leader</a>
 
</div>


@endforeach
@foreach ($member as $item)
<div class="card-body">
  <h2>Members : </h2>
  <h5 class="card-title">{{$item->name}}</h5>
  <h6 class="card-subtitle mb-2 text-muted">{{$item->email}}</h6>
  <h6 class="card-subtitle mb-2 text-muted">{{$item->WA_Number}}</h6>
  <h6 class="card-subtitle mb-2 text-muted">{{$item->Line_ID}}</h6>
  <h6 class="card-subtitle mb-2 text-muted">{{$item->Github_ID}}</h6>
  <h6 class="card-subtitle mb-2 text-muted">{{$item->Birth_place}}</h6>
  <h6 class="card-subtitle mb-2 text-muted">{{$item->Birth_date}}</h6>
  <a href="/editMember/{{$item->Member_ID}}">Click here to edit member</a>
 
</div>

@endforeach
</div>
@endsection