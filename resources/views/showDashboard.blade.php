@extends('template')


@section('content')

<div style="display: grid; grid-template-columns: repeat(3, 1fr)">
@foreach ($group as $item)
    
<div class="card m-5" style="width: 18rem;" >
  {{-- <img src="{{asset('/storage/leaders/card'.$item->cv)}}" alt="cv">
  <img src="{{asset('/storage/leaders/cv'.$item->card)}}" alt="card"> --}}
    <div class="card-body">
      <h5 class="card-title">Team Name : {{$item->Group_name}}</h5>
      {{-- <a href="/showStudents/{{$item->id}}" class="btn btn-primary">Click here to show detail!</a> --}}
    </div>
  
@endforeach

@foreach ($leader as $item)
    

    <img src="{{asset('/storage/leaders'.$item->cv)}}" alt="cv">
    <img src="{{asset('/storage/leaders'.$item->card)}}" alt="card">
    <div class="card-body">
      <h5 class="card-title">Leader Name : {{$item->name}}</h5>
      <p class="card-text">Leader Email : {{$item->email}}</p>
      <p class="card-text">Leader Phone Number : {{$item->WA_Number}}</p>
      <p class="card-text">Leader LineID : {{$item->Line_ID}}</p>
      <p class="card-text">Leader GithubID : {{$item->Github_ID}}</p>
      <p class="card-text">Leader BirthDate : {{$item->Birth_date}}</p>
      <p class="card-text">Leader BirthPlace : {{$item->Birth_place}}</p>
      {{-- <a href="/showStudents/{{$item->id}}" class="btn btn-primary">Click here to show detail!</a> --}}
    </div>
  </div>
@endforeach
</div>



@endsection