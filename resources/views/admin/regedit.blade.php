<h1>{{$type}} edit and mark as paid</h1>
@if($type=='student')
        {!! Form::open(['url' => 'http://wtbeta.com/admin/reg/map/student/'.$bname.'/'.$id , 'method'=> 'POST']) !!}

@elseif($type=='faculty')
        {!! Form::open(['url' => 'http://wtbeta.com/admin/reg/map/faculty/'.$bname.'/'.$id , 'method'=> 'POST']) !!}
@else
		<h3>Something went wrong</h3>
@endif

		<div>
        {{Form::label('ID card no: ')}}
        {{Form::label($row->idno)}}
        </div>
        <div>
        {{Form::label('Name: ')}}
        {{Form::label($row->name)}}
        </div>
        <div>
        {{Form::label('phone no: ')}}
        {{Form::number('phno',$row->phno)}}
        </div>
        <div>
        {{Form::label('BodyName: ')}}
        {{Form::label($row->bodyname)}}
        </div>
        <div>
        {{Form::label('Bodyid: ')}}
        {{Form::text('bid')}}
        </div>
        <div>
        {{Form::label('email: ')}}
        {{Form::text('email',$row->email)}}
        </div>
        <div>
        {{Form::label('isPaid(Caps only): ')}}
        {{Form::text('ispaid',$row->ispaid)}}
        </div>
        
            {{Form::submit('Submit')}} 
        {!! Form::close() !!}
        <a href="http://wtbeta.com/admin/remove/{{$type}}/{{$bname}}/{{$id}}"><button>remove</button></a>
        <a href="http://wtbeta.com/admin/registrations"><button>Cancel</button></a>