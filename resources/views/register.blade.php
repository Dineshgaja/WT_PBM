<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Registration</title>

    </head>
    <body>
        
        <h1>Registration Form</h1>
        @if($type=='student')
        {!! Form::open(['url' => '/registercontrol/student' , 'method'=> 'POST']) !!}
        @else
        {!! Form::open(['url' => '/registercontrol/faculty' , 'method'=> 'POST']) !!}
        @endif
        <h1>{{$type}} Registration Form</h1>
        <div>
        {{Form::label('ID card no: ')}}
        {{Form::number('idno')}}
        </div>
        <div>
        {{Form::label('Name: ')}}
        {{Form::text('name')}}
        </div>
        <div>
        {{Form::label('phone no: ')}}
        {{Form::number('phno')}}
        </div>
        <div>
        {{Form::label('BodyName: ')}}
        {{Form::text('bname')}}
        </div>
        <div>
        {{Form::label('email: ')}}
        {{Form::text('email')}}
        </div>
        <div>
            {{Form::submit('Submit')}}
        </div>
        {!! Form::close() !!}
    </body>
</html>
