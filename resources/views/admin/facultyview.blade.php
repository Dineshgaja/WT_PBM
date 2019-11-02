<h2>Faculy Body Details</h2>
	<>

	@if(count($reg)>0)
	<table border="1">
		<tr>
			<th>Name</th><th>phno</th><th>Body name</th><th>Body id</th><th>paid date</th>
		</tr>
		{{!! $id1 = "<script type="text/javascript">document.getElementByName('Bodies').get</script>" !!}}
		@foreach($reg as $r)
		@if($r->ispaid=='YES' and $r->bodyname == $id1)
			<tr>
				<td>{{$r->name}}</td>
				<td>{{$r->phno}}</td>
				<td>{{$r->bodyname}}</td>
				<td>{{$r->bodyid}}</td>
				<td>{{$r->updated_at}}</td>
			</tr>
		@endif
		@endforeach
		</table>
	@else
		<p>No registrations found</p>
	@endif
