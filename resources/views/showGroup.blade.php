@extends ('template')

@section ('title', 'Show Groups')

@section ('content')

<div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{$groups->name}}</h5>
      <h6 class="card-subtitle mb-2 text-muted">{{$games->is_verified}}</h6>
      <a href="#" class="card-link">Leader Info</a>
      <a href="#" class="card-link">Members Info</a>
    </div>
  </div>
@endsection