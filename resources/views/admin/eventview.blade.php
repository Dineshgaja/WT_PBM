<!DOCTYPE html>
<html>
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
            width: 1000px;
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
        <img src="https://image3.mouthshut.com/images/imagesp/925717933s.png" width="105px" style="background: white; float: left; display: inline-block;" >
        <div class="mycard" style="color: red; background-color: white; display: inline-block; width: 93%">
        <b style="color: blue; font-size: 30px;">BMS</b> <br>Institute Of Technology and Management</div>
    </div>
    <h1 class="display-4" style="text-align: center; margin-top: 20px"><b><i>EVENTS</i></b></h1>

@if($id==0 and $act=='view')
	@if(count($events)>0)
	<div>
		@foreach($events as $e)
			<div class="container" style="margin-top: 20px">
			<div class="card">
			<div class="card-body"> 
				<h4 class="card-title">Title: {{$e->title}}</h4>
				<p class="card-text">Decription:{{$e->description}}</p>
				<h5>Created at: {{$e->created_at}}</h5>
				<a href="http://wtbeta.com/admin/eventview/editing/{{$e->eid}}" class="card-link">edit</a><a href="http://wtbeta.com/admin/eventview/remove/{{$e->eid}}" class="card-link">remove</a>
				</div>
			</div>
		</div>
		@endforeach
		</table>
		<a href="http://wtbeta.com/admin/eventview/adding/new" class="button" style="margin-left: 215px">+add</a>
	</div>	
	@else
		<p>No events found</p>
	@endif
@elseif($act=='editing')
		{!! Form::open(['url' => 'http://wtbeta.com/admin/edited/'.$events->eid , 'method'=> 'POST']) !!}
		<div>
			{{Form::label('Title: ')}}
	        {{Form::text('title',$events->title)}}
	   	</div>
	   	<div>
        {{Form::label('Description: ')}}
        {{Form::textarea('des',$events->description)}}
        </div>
        <div>
		{{Form::submit('Submit')}}
		</div>
@elseif($act=='adding')
	{!! Form::open(['url' => 'http://wtbeta.com/admin/added/id' , 'method'=> 'POST']) !!}
		<div>
			{{Form::label('Title: ')}}
	        {{Form::text('title')}}
	   	</div>
	   	<div>
        {{Form::label('Description: ')}}
        {{Form::textarea('des')}}
        </div>
        <div>
		{{Form::submit('Submit')}}
		</div>
@endif
</body>
</html>
