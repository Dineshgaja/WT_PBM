<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <title>Registration</title>
        <style type="text/css">
            .register{
                background: -webkit-linear-gradient(left, #3931af, #00c6ff);
                margin-top: 3%;
                padding: 3%;
            }
            .register-left{
                text-align: center;
                color: #fff;
                margin-top: 4%;
            }
            .register-left input{
                border: none;
                border-radius: 1.5rem;
                padding: 2%;
                width: 60%;
                background: #f8f9fa;
                font-weight: bold;
                color: #383d41;
                margin-top: 30%;
                margin-bottom: 3%;
                cursor: pointer;
            }
            .register-right{
                background: #f8f9fa;
                border-top-left-radius: 10% 50%;
                border-bottom-left-radius: 10% 50%;
            }
            .register-left img{
                margin-top: 15%;
                margin-bottom: 5%;
                width: 25%;
                -webkit-animation: mover 2s infinite  alternate;
                animation: mover 1s infinite  alternate;
            }
            @-webkit-keyframes mover {
                0% { transform: translateY(0); }
                100% { transform: translateY(-20px); }
            }
            @keyframes mover {
                0% { transform: translateY(0); }
                100% { transform: translateY(-20px); }
            }
            .register-left p{
                font-weight: lighter;
                padding: 12%;
                margin-top: -9%;
            }
            .register .register-form{
                padding: 10%;
                margin-top: 10%;
            }
            .btnRegister{
                float: right;
                margin-top: 10%;
                border: none;
                border-radius: 1.5rem;
                padding: 2%;
                background: #0062cc;
                color: #fff;
                font-weight: 600;
                width: 50%;
                cursor: pointer;
            }
            .register .nav-tabs{
                margin-top: 3%;
                border: none;
                background: #0062cc;
                border-radius: 1.5rem;
                width: 28%;
                float: right;
            }
            .register .nav-tabs .nav-link{
                padding: 2%;
                height: 34px;
                font-weight: 600;
                color: #fff;
                border-top-right-radius: 1.5rem;
                border-bottom-right-radius: 1.5rem;
            }
            .register .nav-tabs .nav-link:hover{
                border: none;
            }
            .register .nav-tabs .nav-link.active{
                width: 100px;
                color: #0062cc;
                border: 2px solid #0062cc;
                border-top-left-radius: 1.5rem;
                border-bottom-left-radius: 1.5rem;
            }
            .register-heading{
                text-align: center;
                margin-top: 8%;
                margin-bottom: -15%;
                color: #495057;
            }
        </style>
        
    </head>
    <body>
        <div class="container register">
            <div class="row">
                <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>You are 30 seconds away from becoming a member!</p>
                    </div>
                    <div class="col-md-9 register-right">
                         @if($type=='Faculty')
                        {!! Form::open(['url' => '/registercontrol/Faculty' , 'method'=> 'POST']) !!}
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist" style="margin-top: 0.5%;">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="http://wtbeta.com/register/Faculty" role="tab" aria-controls="home" aria-selected="true">Faculty</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="http://wtbeta.com/register/Student" role="tab" aria-controls="profile" aria-selected="false">Student</a>
                            </li>
                        </ul>
                        @else
                        {!! Form::open(['url' => '/registercontrol/Student' , 'method'=> 'POST']) !!}
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist" style="margin-top: 0.5%;">
                            <li class="nav-item">
                                <a class="nav-link" id="home-tab" data-toggle="tab" href="http://wtbeta.com/register/Faculty" role="tab" aria-controls="home" aria-selected="false">Faculty</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" id="profile-tab" data-toggle="tab" href="http://wtbeta.com/register/Student" role="tab" aria-controls="profile" aria-selected="true">Student</a>
                            </li>
                        </ul>
                        @endif
                    <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"> 
                        <h1 class="register-heading"><br>Register as {{$type}}</h1>                        
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                {{Form::label('ID card no: ')}}
                                {{Form::number('idno','',['class'=>'form-control'])}}
                                </div>
                                <div class="form-group">
                                {{Form::label('Name: ')}}
                                {{Form::text('name','',['class'=>'form-control'])}}
                                </div>
                                <div class="form-group">
                                {{Form::label('phone no: ')}}
                                {{Form::number('phno','',['class'=>'form-control'])}}
                                </div>
                                <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="male" checked>
                                                    <span> Male </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="female">
                                                    <span>Female </span> 
                                                </label>
                                            </div>
                                        </div>
                                <div class="form-group">
                                {{Form::label('BodyName: ')}}
                                {{Form::text('bname','',['class'=>'form-control'])}}
                                </div>
                                <div class="form-group">
                                {{Form::label('email: ')}}
                                {{Form::text('email','',['class'=>'form-control'])}}
                                </div>
                                <div class="form-group">
                                    {{Form::submit('Submit',['class'=>"btnRegister"])}}
                                </div>
                                {!! Form::close() !!}
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </div>
</div>
    </body>
</html>
