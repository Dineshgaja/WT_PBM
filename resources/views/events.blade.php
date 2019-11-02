	<h1>Events</h1>
	@if(count($events)>0)
		@foreach($events as $e)
			<div>
				<h3>Title: {{$e->title}}</h3>
				<p>Decription:{{$e->description}}</p>
				<h3>Created at: {{$e->created_at}}</h3>
				<br>
			</div>
		@endforeach
	@else
		<p>No events found</p>
	@endif