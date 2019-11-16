<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  	<style type="text/css">
  		.mycard{
            box-shadow: 0 8px 12px 0 rgba(0.0, 0.0, 0.0, 0.2);
            padding: 20px;
            background-color: white;
            font-size: 20px; 
            font-family: Arial Black;
            width: 1000px;
            display: inline-block;
        }
  	</style>
</head>
<body style="background-color: lightgrey;">
	<div align="vertical">
            <img src="https://image3.mouthshut.com/images/imagesp/925717933s.png" width="105px" style="background: white; float: left; display: inline-block;" >
            <div class="mycard" style="color: red; background-color: white; display: inline-block; width: 93%">
                <b style="color: blue; font-size: 30px;">BMS</b> <br>Institute Of Technology and Management</div>
    </div>
	<h6 class="display-4" style="text-align: center; margin-top: 20px"><b><i>REGISTRATIONS</i></b></h6>
	<div class="container">	
		<h2>Faculty Registrations</h2>
		<table class="table" style="margin-top: 20px;">
		<thead class="thead-dark">
	<tr>
		<th>Name</th><th>Body name</th><th>email id</th><th>Body id</th><th>Phno</th><th>pay status</th><th>Action</th>
	</tr>
	</thead>
	@if(count($reg1)>0)
		@foreach($reg1 as $r)
			@if($r->ispaid=='NO')
			<tbody style="background-color: white;">
			<tr style="background-color: white;">
				<td>{{$r->name}}</td>
				<td>{{$r->bodyname}}</td>
				<td>{{$r->email}}</td>
				<td>{{$r->bodyid}}</td>
				<td>{{$r->phno}}</td>
				<td>NO</td>
				<td>
					<a href="http://wtbeta.com/admin/map/faculty/{{$r->bodyname}}/{{$r->fid}}"><button> Paid </button></a>
					
				</td>
			</tr>
			</tbody>
			@endif
		@endforeach
	@else
		<p>No new registrations found</p>
	@endif
</table>


	<h2>Student Registrations</h2>
	<table class="table" style="margin-top: 20px">
	<thead class="thead-dark">
	<tr>
		<th>Name</th><th>Body name</th><th>email id</th><th>Body id</th><th>Phno</th><th>pay status</th><th>mark as paid</th>
	</tr>
	</thead>
	@if(count($reg2)>0)
		@foreach($reg2 as $r)
			@if($r->ispaid=='NO')
			<tbody style="background-color: white;">
			<tr style="background-color: white;">
				<td>{{$r->name}}</td>
				<td>{{$r->bodyname}}</td>
				<td>{{$r->email}}</td>
				<td>{{$r->bodyid}}</td>
				<td>{{$r->phno}}</td>
				<td>NO</td>
				<td>
					<a href="http://wtbeta.com/admin/map/student/{{$r->bodyname}}/{{$r->sid}}"><button> Paid </button></a>
					
				</td>
			</tr>
			</tbody>
			@endif
		@endforeach
	@else
		<p>No new registrations found</p>
	@endif
</table>
	</div>
</body>
</html>

