@extends('template')

@section('title','Home page')

@section ('content')
<div class="d-flex m-5">
    @foreach ($groups as $g)
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{$g->Group_name}}</h5>
            <p class="card-text">{{$g->is_verified}}</p>
            <a href="#" class="btn btn-primary m-1" >Leader Info</a>
            <a href="#" class="btn btn-primary m-1" >Show Member</a>
            <form action="/delete-game/{{$g->id}}" method="POST">
                @csrf
                @method('delete')
                <button class="btn btn-danger m-1">Delete</button>
            </form>

        </div>
    </div>
    @endforeach
</div>
@endsection
