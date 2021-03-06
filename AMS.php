<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PUNP AMS</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-size: auto auto no-repeat; 
                /*background-image: url({{asset('/images/POSTERbg1.png')}});*/
                /*background-color: #0e8;
                color: #636b6f;*/
                color: #0c8;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
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
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
           
                <div class="top-right links">
                        <a href="login.php">Login</a>
                </div>
             

            <div class="content">
                 <div class="title m-b-md">
                     <h4>PUNP AMS</h4>
                 </div>

                
                 <div class="links">
                    <a href="#">HOME</a>
                    <a href="indextimein.php">TIMEIN</a>
                    <a href="#">TIMEOUT</a>
                 </div>
            </div>
        </div>
    </body>
</html>
