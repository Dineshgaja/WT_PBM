<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Registration</title>

    </head>
    <body>
        
        <h1>Registration Form</h1>
        {!! Form::open(['action' => 'registercontrol@store' , 'method'=> 'POST']) !!}
        <div>
        {{Form::label('type','type: ')}}
        {{Form::select('type', ['F' => 'Faculty', 'S' => 'Student'], 'F')}}
        </div>
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
        {{Form::label('bodyid: ')}}
        {{Form::text('bid')}}
        </div>
        <div>
            {{Form::submit('Submit')}}
        </div>
        {!! Form::close() !!}
    </body>
</html>
