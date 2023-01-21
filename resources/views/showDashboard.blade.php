{{-- @extends('template')


@section('content')

<div style="display: grid; grid-template-columns: repeat(3, 1fr)">
@foreach ($group as $item)
    
<div class="card m-5" style="width: 18rem;" >
  {{-- <img src="{{asset('/storage/leaders/card'.$item->cv)}}" alt="cv">
  <img src="{{asset('/storage/leaders/cv'.$item->card)}}" alt="card"> --}}
    {{-- <div class="card-body">
      <h5 class="card-title">Team Name : {{$item->Group_name}}</h5> --}}
      {{-- <a href="/showStudents/{{$item->id}}" class="btn btn-primary">Click here to show detail!</a> --}}
    {{-- </div> --}}
  
{{-- @endforeach

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
    {{-- </div>
  </div>
@endforeach
</div>





@endsection  --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/dashboard.css">
    <title>Dashboard Binusian</title>
</head>
<body>
    <header>
        <div class="header" id="header">
          <nav class="nav-container">
              <a href="#" class="nav_logo">Hackthon</a>
               
              <div class="login-menu">
                <a href="">Dashboard</a>
                <a href="">Logout</a>
              </div> 
          </nav>
        </div>
    </header>
    
        <div class="add-member">
            <div class="container">
                <div id="table">
                    <table>
                    <thead>
                        <tr>
                            <th>Nama Anggota</th>
                            <th>No. Telepon</th>
                            <th>ID Line</th>
                            <th>Github/ Gitlab ID</th>
                            <th>Tempat, Tanggal Lahir</th>
                            <th>CV</th>
                            <th>Flazz Card</th>
                            </tr>
                    </thead>
                        <tbody>
                          @foreach ($member as $item)
                        <tr>
                              
                          <td>
                            <div class="name-email">
                              <p>{{$item->name}}</p>
                              <label for="">{{$item->email}}</label>
                            </div>
                          </td>
                          <td>{{$item->WA_Number}}</td>    
                          <td>{{$item->Line_ID}}</td>
                          <td>{{$item->Github_ID}}</td>
                          <td>{{$item->Birth_place}}, {{$item->Birth_date}}</td>
                          <td> <a href="">view</a></td>
                            <td> <a href="">view</a></td>
                          </tr>
                          @endforeach
                          {{-- <tr>
                            <td>
                              <div class="name-email">
                                <p>johndoe</p>
                                <label for="">johndoe@gmail.com</label>
                              </div>
                            </td>
                            <td>6289999999999</td>    
                            <td>johndoethegreat</td>
                            <td>johndoethegreat</td>
                            <td>Jakarta, 1 Januari 2004</td>
                            <td> <a href="">view</a></td>
                            <td> <a href="">view</a></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="name-email">
                                    <p>johndoe</p>
                                    <label for="">johndoe@gmail.com</label>
                                </div>
                            </td>
                            <td>6289999999999</td>    
                            <td>johndoethegreat</td>
                            <td>johndoethegreat</td>
                            <td>Jakarta, 1 Januari 2004</td>
                            <td> <a href="">view</a></td>
                            <td class="flazz"> <a href="">view</a></td>
                        </tr> --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>    

            <div class="bayar">
                <div class="pembayaran">
                    <Button class="btn"> <a href="/paymentInput">Pembayaran Biaya Pendaftaran</a></Button>
                </div>
                <div class="timeline">
                    <div>
                        <div class="rect">&nbsp;<span class="circle">
                        </span>
                        <p>Open Registration<br>01/12/2023
                        </p>
                        </div>
                    </div>
                    <div>
                        <div class="rect r2">&nbsp;<span class="circle">
                        </span>
                        <p>Close Registration<br>01/12/2023</p>
                        </div>
                    </div>
                    <div>
                        <div class="rect r3">&nbsp;<span class="circle">
                        </span>
                        <p>Technical Meeting<br>01/12/2023</p>
                        </div>
                    </div>
                    <div>
                        <div class="rect r4">&nbsp;<span class="circle">
                        </span>
                        <p>Competition Day<br>01/12/2023</p>
                        </div>
                    </div>
                </div>

                <div class="technical">
                    <button class="btn"><a href="">Technical Meeting</a></button>
                    <button class="btn"><a href="">Competition Day</a></button>
                </div>
            </div>
            <br>
        
</body>
</html>