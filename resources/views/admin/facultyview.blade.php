
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  	
</head>
<body style="background-color: lightgrey;">
    @include('layouts.app')
	<h1 class="display-4" style="text-align: center; margin-top: 20px"><b><i>FACULTY</i></b></h1>
	<div class="container" style="margin-top: 10px">
	@if($bname=='all')
	@if(count($reg)>0)
	<table class="table">
		<thead class="thead-dark">
		<tr>
			<th>NAME</th><th>PHNO</th><th>BODY NAME</th><th>BODY ID</th><th>PAID DATE</th>
		</tr>
		</thead>
		@foreach($reg as $r)		
			@if($r->ispaid=='YES')
			<tbody>
			<tr style="background-color: white;">
				<td>{{$r->name}}</td>
				<td>{{$r->phno}}</td>
				<td><a href="http://wtbeta.com/admin/facultyview/{{$r->bodyname}}">{{$r->bodyname}}</a></td>
				<td>{{$r->bodyid}}</td>
				<td>{{$r->updated_at}}</td>
			</tr>
			</tbody>
		@endif
		@endforeach
		</table>
	@else
		<p>No registrations found</p>
	@endif
@else
	@if(count($reg)>0)
	<table class="table">
		<thead class="thead-dark">
		<tr>
			<th>NAME</th><th>PHNO</th><th>BODY NAME</th><th>BODY ID</th><th>PAID DATE</th>
		</tr>
		</thead>
		@foreach($reg as $r)		
			@if($r->ispaid=='YES' and $r->bodyname==$bname)
			<tbody>
			<tr style="background-color: white;">
				<td>{{$r->name}}</td>
				<td>{{$r->phno}}</td>
				<td>{{$r->bodyname}}</td>
				<td>{{$r->bodyid}}</td>
				<td>{{$r->updated_at}}</td>
			</tr>
			</tbody>
		@endif
		@endforeach
		</table>
		<a href="http://wtbeta.com/admin/facultyview/all"><button>All</button></a>
	@else
		<p>No registrations found</p>
	<a href="http://wtbeta.com/admin/facultyview/all"><button>All</button></a>
	@endif
@endif
	</div>
	<a href="http://wtbeta.com/pdf/F/{{$bname}}"><button>Save as PDF</button></a>
	<a href="http://wtbeta.com/adminloggedin"><button>Home</button></a>
</body>
</html>
