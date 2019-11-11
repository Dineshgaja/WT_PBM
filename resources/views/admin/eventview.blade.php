<h1>Events</h1>
@if($id==0 and $act=='view')
	@if(count($events)>0)
	<table border="1">
		@foreach($events as $e)
			<tr>
			<td>
				<h3>Title: {{$e->title}}</h3>
				<p>Decription:{{$e->description}}</p>
				<h3>Created at: {{$e->created_at}}</h3>
				<a href="http://wtbeta.com/admin/eventview/editing/{{$e->eid}}"><button>edit</button></a><a href="http://wtbeta.com/admin/eventview/remove/{{$e->eid}}"><button>remove</button></a>
			</td>
			</tr>
		@endforeach
		</table>
		<a href="http://wtbeta.com/admin/eventview/adding/new"><button>+add</button></a>
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
