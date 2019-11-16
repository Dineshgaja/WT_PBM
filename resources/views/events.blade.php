
<!DOCTYPE html>
<!-- <html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  	<style type="text/css">
  		img{
  			box-shadow: 0 8px 12px 0 rgba(0.0, 0.0, 0.0, 0.2);
  		}
  		.mycard {
            box-shadow: 0 8px 12px 0 rgba(0.0, 0.0, 0.0, 0.2);
            padding: 20px;
            background-color: white;
            font-size: 20px; 
            font-family: Arial Black;
            display: inline-block;
        }
        .button {
			background-color: #4CAF50; /* Green */
			border: none;
			color: white;
			padding: 10px 27px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
		}
  	</style>
</head>
<body style="background-color: lightblue;">
	<div align="vertical">
        <img src="https://image3.mouthshut.com/images/imagesp/925717933s.png" style="background: white; float: left; display: inline-block; width: 7.85%" >
        <div class="mycard" style="color: red; background-color: white; display: inline-block; width: 92.15%">
        <b style="color: blue; font-size: 30px;">BMS</b> <br>Institute Of Technology and Management</div>
    </div>
    <h1 class="display-4" style="text-align: center; margin-top: 20px; align-self: center;"><b><i>EVENTS</i></b></h1>
	@if(count($events)>0)
	<div style="display: inline-block;">
		@foreach($events as $e)
			<div class="container" style="margin-top: 20px">   
				<div class="card">
				    <div class="card-body">
				      <h4 class="card-title">{{$e->title}}</h4>
				      <p class="card-text">{{$e->description}}</p>
				      <h5 class="card-title">Updated at: {{$e->updated_at}}</h5>
				    </div>
				</div>
			</div>
		@endforeach
	</div>
	<div style="display: inline-block;">
		<div class="card">
			<h4 class="card-title">REGISTRATIONS</h4>
			<p class="card-text">
				<a href="http://wtbeta.com/register/faculty"> Faculty Registration</a><br>
				<a href="http://wtbeta.com/register/student"> Student Registration</a>
			</p>
		</div>
	</div>
	@else
		<p>No events found</p>
	@endif
</body>
</html> -->
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
    img{
  			box-shadow: 0 8px 12px 0 rgba(0.0, 0.0, 0.0, 0.2);
  		}
  		.mycard {
            box-shadow: 0 8px 12px 0 rgba(0.0, 0.0, 0.0, 0.2);
            padding: 20px;
            background-color: white;
            font-size: 20px; 
            font-family: Arial Black;
            display: inline-block;
        }
        .button {
			background-color: #4CAF50; /* Green */
			border: none;
			color: white;
			padding: 10px 27px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
		}
  </style>
</head>
<body  style="background-color: lightblue;">

<div class="container-fluid text-center">

  <div class="row content">
    	<div align="vertical">
        <img src="https://image3.mouthshut.com/images/imagesp/925717933s.png" style="background: white; float: left; display: inline-block; width: 7.85%" >
        <div class="mycard" style="color: red; background-color: white; display: inline-block; width: 92.15%; height: 25%">
        <b style="color: blue; font-size: 30px;">BMS</b> <br>Institute Of Technology and Management 
        <a href="http://wtbeta.com/register/Faculty" style="float: right;"><button>Register</button></a>
    </div>

    </div>
    <div class="col-sm-8 text-left" style="border: 1px solid black; align-content: center; align-self: center; margin-right: 25%;"> 
      <h1 style="text-align: center;">Welcome</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <hr>
      @if(count($events)>0)
	<div>
		@foreach($events as $e)
			<div class="container" style="margin-top: 20px">   
				<div class="card">
				    <div class="card-body">
				      <h4 class="card-title">{{$e->title}}</h4>
				      <p class="card-text">{{$e->description}}</p>
				      <h5 class="card-title">Updated at: {{$e->updated_at}}</h5>
				    </div>
				</div>
			</div>
		@endforeach
	@else
		<p>No events found</p>
	@endif
	</div>
    </div>
    <div class="col-sm-2 ">

    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>&copy 2019
  	<br>
  	Dinesh G Akshay Sadhu
  </p>
</footer>

</body>
</html>
