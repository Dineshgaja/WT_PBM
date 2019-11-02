<h1>Events</h1>
	@if(count($events)>0)
	<table border="1">
		@foreach($events as $e)
			<tr>
			<td>
				<h3>Title: {{$e->title}}</h3>
				<p>Decription:{{$e->description}}</p>
				<h3>Created at: {{$e->created_at}}</h3>
				<button>edit</button><button>remove</button>
			</td>
			</tr>
		@endforeach
		</table>
		<button>+add</button>
	@else
		<p>No events found</p>
	@endif