@extends('template')


@section('content')

<div style="display: grid; grid-template-columns: repeat(3, 1fr); border: 2px solid red">
@foreach ($group as $item)
    
<div class="card m-5" style="width: 18rem; border: 2px solid red" >
    <div class="card-body">
      <h5 class="card-title">Team Name : {{$item->Group_name}}</h5>
      <h5 class="card-title">Register Fee : 500k</h5>
      <h5 class="card-title">Verified : {{$item->is_verified}}</h5>
      <button>Click Here to Verified the Team!</button>
      {{-- <a href="/showStudents/{{$item->id}}" class="btn btn-primary">Click here to show detail!</a> --}}
    </div>
    {{-- @foreach ($payment as $item)
    

    <img src="{{asset('/storage/payment'.$item->paymentVerif)}}" alt="payment">
    </div>
@endforeach --}}
@endforeach

@foreach ($payment as $item)
    

    <img src="{{asset('/storage/payment'.$item->paymentVerif)}}" alt="payment">
    </div>
@endforeach
</div>



@endsection