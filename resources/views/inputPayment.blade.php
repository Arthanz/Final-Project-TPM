@extends('template')

@section('title','Payment Verif')
@section ('content')

<div class="m-5">
    <h1 class="text-center">Upload Your Payment : </h1>
    <form action="/storePayment" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Payment</label>
            <input type="file" class="form-control" id="exampleInputPassword1" name="paymentProof">
            {{-- @error('paymentProof')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror --}}
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


@endsection