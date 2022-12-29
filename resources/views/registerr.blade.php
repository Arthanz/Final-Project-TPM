<!DOCTYPE html>
<html>
<head>
<title>Hackathon SignUp Form</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
</head>
<body>
	<div class="main-w3layouts wrapper">
		<h1>Group SignUp Form</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="/store-group" method="POST">
					@csrf
					<div class="form-group">
						<label for="Group_name" class="col-md-4 col-form-label text-md-right">Group Name</label>
						<div class="col-md-6">
						<input type="text" name="Group_name" class="form-control" placeholder="Group Name">
						@error('Group_')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
						{{-- @if ($errors->has('Group_name'))
							<span class="text-danger">{{ $errors->first('Group_name') }}</span>
						@endif --}}
						</div>
					</div>
					{{-- <input class="text" type="text" name="Group_name" placeholder="Group name" required=""> --}}
					<div class="form-group row">
						<label for="password" class="col-md-4 col-form-label text-md-right">Password</label>					
						<div class="col-md-6">
							<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
							@error('password')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
					</div>					
					<div class="form-group row">
						<label for="password" class="col-md-4 col-form-label text-md-right">Confirm Password</label>					
						<div class="col-md-6">
							<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="current-password">
						</div>
					</div>
                    <fieldset>
                        <legend>Binusian or not</legend>
                        <div>
                          <input type="radio"  value="1" name="is_binusian">
                          <label for="is_binusian">Binusian</label>
						  <input type="radio"  value="0" name="is_binusian">
                          <label for="is_binusian">Not Binusian</label>
                        </div>
                    </fieldset>
                    <br></br>
					<button>Sign Up</button>
				</form>
				<p>Already have an Account? <a href="#"> Login Now!</a></p>
			</div>
		</div>
	</div>
</body>
</html>