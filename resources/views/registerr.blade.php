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
					<input class="text" type="text" name="Username" placeholder="Username" required="">
					<input class="text email" type="email" name="email" placeholder="Email" required="">
					<input class="text" type="password" name="password" placeholder="Password" required="">
					<input class="text w3lpass" type="password" name="password_confirmation" placeholder="Confirm Password" required="">
                    <fieldset>
                        <legend>Binusian or not</legend>
                    
                        <div>
                          <input type="radio"  value="is_binusian"
                                 >
                          <label for="is_binusian">Binusian</label>
                        </div>
                    </fieldset>
                    
					<input type="submit" value="SIGNUP">
				</form>
				<p>Already have an Account? <a href="#"> Login Now!</a></p>
			</div>
		</div>
	</div>
</body>
</html>