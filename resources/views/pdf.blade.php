@if($bname=='all')
	<table border="1">
		<thead >
		<tr >
			<th>NAME</th><th>PHNO</th><th>BODY NAME</th><th>BODY ID</th><th>PAID DATE</th>
		</tr>
		</thead>
		@foreach($data as $r)		
			@if($r->ispaid=='YES')
			<tbody>
			<tr>
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
@else
	<table border="1">
		<thead>
		<tr>
			<th>NAME</th><th>PHNO</th><th>BODY NAME</th><th>BODY ID</th><th>PAID DATE</th>
		</tr>
		</thead>
		@foreach($data as $r)		
			@if($r->ispaid=='YES' and $r->bodyname==$bname)
			<tbody>
			<tr >
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
@endif