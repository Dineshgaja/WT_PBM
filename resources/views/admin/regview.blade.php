<h1>Registrations</h1>
<h2>Faculty Registrations</h2>
<?php $c=1;?>
<table border="1">
	<tr>
		<th>Name</th><th>Body name</th><th>email id</th><th>Body id</th><th>Phno</th><th>pay status</th><th>mark as paid</th>
	</tr>
	@if(count($reg1)>0)
		@foreach($reg1 as $r)
			@if($r->ispaid=='NO')
			<tr>
				<td>{{$r->name}}</td>
				<td>{{$r->bodyname}}</td>
				<td>{{$r->email}}</td>
				<td>{{$r->bodyid}}</td>
				<td>{{$r->phno}}</td>
				<td>NO</td>
				<td>
					<button id="<?php $c;?>" onclick="<?php DB::update('update faculty_bodies set ispaid=? where fid=?',['YES',$r->fid]); echo "location.reload()"; $c++;?>"> Paid </button>
					
				</td>
			</tr>
			@endif
		@endforeach
	@else
		<p>No new registrations found</p>
	@endif
</table>



<h2>Student Registrations</h2>
<table border="1">
	<tr>
		<th>Name</th><th>Body name</th><th>Body id</th><th>Phno</th><th>pay status</th><th>mark as paid</th>
	</tr>
	@if(count($reg2)>0)
		@foreach($reg2 as $r)
			@if($r->ispaid=='NO')
			<tr>
				<td>{{$r->name}}</td>
				<td>{{$r->bodyname}}</td>
				<td>{{$r->bodyid}}</td>
				<td>{{$r->phno}}</td>
				<td>NO</td>
				<td>
					<button onclick=""> Paid </button>
					
				</td>
			</tr>
			@endif
		@endforeach
	@else
		<p>No new registrations found</p>
	@endif
</table>