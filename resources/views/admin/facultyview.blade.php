<h2>Faculty Body Details</h2>
@if($bname=='all')
	@if(count($reg)>0)
	<table border="1">
		<tr>
			<th>Name</th><th>phno</th><th>Body name</th><th>Body id</th><th>paid date</th>
		</tr>
		@foreach($reg as $r)		
			@if($r->ispaid=='YES')
			<tr>
				<td>{{$r->name}}</td>
				<td>{{$r->phno}}</td>
				<td><a href="http://wtbeta.com/admin/facultyview/{{$r->bodyname}}">{{$r->bodyname}}</a></td>
				<td>{{$r->bodyid}}</td>
				<td>{{$r->updated_at}}</td>
			</tr>
		@endif
		@endforeach
		</table>
	@else
		<p>No registrations found</p>
	@endif
@else
	@if(count($reg)>0)
	<table border="1">
		<tr>
			<th>Name</th><th>phno</th><th>Body name</th><th>Body id</th><th>paid date</th>
		</tr>
		@foreach($reg as $r)		
			@if($r->ispaid=='YES' and $r->bodyname==$bname)
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
		<a href="http://wtbeta.com/admin/facultyview/all"><button>All</button></a>
	@else
		<p>No registrations found</p>
	<a href="http://wtbeta.com/admin/facultyview/all"><button>All</button></a>
	@endif
@endif
