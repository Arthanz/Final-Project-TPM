<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="payment.css">
</head>
<body>

    <header>
        <div class="header" id="header">
          <nav class="nav-container">
              <a href="#" class="nav_logo">Hackthon</a>
               
              <div class="login-menu">
                <a href="">Dashboard</a>
                <a href="" class="logout">Logout</a>
              </div> 
          </nav>
        </div>
      </header>

    <section id="payment_section">
        <div class="container">
            <div class="early">
                <div class="space_bird">
                    <div class="bird">
                        <h3>EARLY BIRD OFFER</h3>
                        <p>Rp200.000,00</p>
                    </div>
                    <div class="offer">
                        <h3>Rp150.000,00</h3>
                    <p id="demo"></p>
    
                    <script>
                    var countDownDate = new Date("Jan 25, 2023 15:00:00").getTime();
                    var x = setInterval(function() {
                    var now = new Date().getTime();
                    var distance = countDownDate - now;
                    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                    document.getElementById("demo").innerHTML = days + "d " + hours + "h "
                    + minutes + "m " + seconds + "s ";
                    if (distance < 0) {
                        clearInterval(x);
                        document.getElementById("demo").innerHTML = "EXPIRED";
                    }
                    }, 1000);
                    </script>
                    </div>    
                </div>
            </div>

            <div class="informasi">
                <h2>Informasi Pembayaran</h2>
                
                <form action="/storePayment" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="bca">
                    <img src="/assets/img/BCA.png" alt="BCA">
                    <span class="johndoe">2597364231 a.n. John Doe</span><br>
                </div>
                
                <input type="file" id="actual-btn" accept="image/*" name="paymentProof"  class="paymentVerif"/>
                <label for="file" class="paymentVerif">Upload Bukti Pembayaran</label><br>
                <p class="bukti">Bukti dapat diupload dalam bentuk file .jpeg .jpg .png .pdf</p>
                {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
                <input type="file" id="actual-btn" accept="image/*" hidden/>
                <button type="submit"  class="paymentVerif" style="border: none">Verifikasi Pembayaran</button><br>
            </form>
                
                <p>Verifikasi pembayaran jika sudah</p>
                <p>berhasil mengirim bukti pembayaran</p>
            </div>
        </div>
    </section>

</body>
</html>

{{-- @extends('template')

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
        {{-- </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div> --}}


{{-- @endsection --}}