<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style type="text/css">
       
        .mycard {
            padding: 20px;
            background-color: white;
            font-size: 20px; 
            font-family: Arial Black;
        }
        .button {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 10px 27px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            align-self: center;
            position: relative;
        }
        .label1 {
          flex-direction: column;
          justify-content: flex-end;
          text-align: right;
          width: 400px;
          line-height: 26px;
          margin-bottom: 10px;
        }
        .input1 {
          height: 20px;
          flex: 0 0 200px;
          margin-left: 10px;
        }
    </style>
</head>
<body style="background-color: lightblue;">
    @include('layouts.app')
    
    <div class="container" style="padding: 20px; background-color: white; font-size: 20px; font-family: Arial Black;">   
    @if($type=='student')
            {!! Form::open(['url' => 'http://wtbeta.com/admin/reg/map/student/'.$bname.'/'.$id , 'method'=> 'POST']) !!}

    @elseif($type=='faculty')
            {!! Form::open(['url' => 'http://wtbeta.com/admin/reg/map/faculty/'.$bname.'/'.$id , 'method'=> 'POST']) !!}
    @else
            <h3>Something went wrong</h3>
    @endif
        <div class="form-group">
            {{Form::label('ID card no: ','',['class'=>'label1'])}}
            {{Form::label($row->idno,'',['class'=>'input1'])}}
            <br>
            {{Form::label('Name: ','',['class'=>'label1'])}}
            {{Form::label($row->name,'',['class'=>'input1'])}}
            <br>
            {{Form::label('phone no: ','',['class'=>'label1'])}}
            {{Form::number('phno',$row->phno,['class'=>'input1'])}}
            <br>
            {{Form::label('BodyName: ','',['class'=>'label1'])}}
            {{Form::label($row->bodyname,'',['class'=>'input1'])}}
            <br>
            {{Form::label('Bodyid: ','',['class'=>'label1'])}}
            {{Form::text('bid',$row->bodyid,['class'=>'input1'])}}
            <br>
            {{Form::label('email: ','',['class'=>'label1'])}}
            {{Form::text('email',$row->email,['class'=>'input1'])}}
            <br>
            {{Form::label('isPaid(Caps only): ','',['class'=>'label1'])}}
            {{Form::text('ispaid',$row->ispaid,['class'=>'input1'])}}
            <br>
            
            {{Form::submit('Submit',['class'=>'button','style'=>'margin-left: 450px;'])}} 
        </div>
            {!! Form::close() !!}
            <a href="http://wtbeta.com/admin/remove/{{$type}}/{{$bname}}/{{$id}}" style="margin-left: 450px;"><button class="button">remove</button></a>
            <a href="http://wtbeta.com/admin/registrations"><button class="button">Cancel</button></a>
</body>
</html>