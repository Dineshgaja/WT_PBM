<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

        <title>Professional Body Management</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <style>
            html, body {
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .paddiv{
                padding: 40px;
                padding-top: 30px;
            }
            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 64px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
                text-decoration-color: #91ff23;
                font-family: serif;
                font-style: italic;
            }
            * {
                box-sizing: border-box;
            }
            body {
                position: absolute;
                top: 0; bottom: 0; left: 0; right: 0;
                height: 100%;
            }
            body:before {
                content: "";
                position: absolute;
                background-image: url('http://infodirectadmission.in/wp-content/uploads/2016/06/BMS-College-Of-Engineering-001.jpg');
                background-size: cover;
                z-index: -1; /* Keep the background behind the content */
                height: 20%; width: 20%; /* Using Glen Maddern's trick /via @mente */

                /* don't forget to use the prefixes you need */
                transform: scale(5);
                transform-origin: top left;
                filter: blur(2px);
}

            body {
                font-family: Arial, Helvetica, sans-serif;
            }

            /* Float four columns side by side */
            .column {
                float: left;
                width: 25%;
                padding: 0 10px;
            }

            /* Remove extra left and right margins, due to padding in columns */
            .row {
                margin: 0 -5px;
                padding-top: 50px;
            }

            /* Clear floats after the columns */
            .row:after {
                content: "";
                display: table;
                clear: both;
            }

            /* Style the counter cards */
            .card {
                box-shadow: 0 8px 12px 0 rgba(0.7, 0.1, 0.2, 0.2); /* this adds the "card" effect */
                padding: 75px;
                text-align: center;
                font-size: 35px;
                color: black;
                font-family: Impact;
                border: 2px solid black;
                cursor: pointer;
            }
            .mycard{
                box-shadow: 0 8px 12px 0 rgba(0.0, 0.0, 0.0, 0.2);
                padding: 20px;
                background-color: white;
                font-size: 20px; 
                font-family: Arial Black;
                display: inline-block;
            }
            #nrcard{
                box-shadow: 0 8px 12px 0 rgba(0.7, 0.1, 0.2, 0.2); /* this adds the "card" effect */
                padding: 54px;
                text-align: center;
                background-color: #f1f1f1;
                font-size: 35px;
                color: black;
                font-family: Impact;
                border: 2px solid black;
                cursor: pointer;

            }
            /* Responsive columns - one column layout (vertical) on small screens */
            @media screen and (max-width: 600px) {
                .column {
                    width: 100%;
                    display: block;
                    margin-bottom: 20px;

                }
            }
        </style>
        
        
    </head>
    <body>
        
        
        <div class="paddiv">
            <div class="content">
                <div class="title m-b-md" style="color: #00004d;">
                    Professional body management
                </div>                
                <div class="row">
                  <div class="column" onclick="location.href='http://wtbeta.com/admin/studentview/all'">
                    <div class="card" style="background-color: #e60000;">Student</a></div>
                  </div>
                  <div class="column" onclick="location.href='http://wtbeta.com/admin/facultyview/all'">
                    <div class="card" style="background-color: #009933;">Faculty</a></div>
                  </div>
                  <div class="column" onclick="location.href='http://wtbeta.com/admin/eventview/view/0'">
                    <div class="card" style="background-color: #00bfff;">Events</a></div>
                  </div>
                  <div class="column" onclick="location.href='http://wtbeta.com/admin/registrations'">
                    <div id="nrcard" style="background-color: #ff80d5;">New Registrations</a></div>
                  </div>
                  
                </div>
            </div>
        </div>
    </body>
    
</html>
