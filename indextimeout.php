<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>PUNPAMS</title>

    <!-- Styles -->
    <link rel="stylesheet" a href="css\login.css">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="ams.php">
                         PUNP ATTENDANCE MONITORING SYSTEM
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                       
                          <li><a href="indextimein.php">TIMEIN</a></li>
                       
                    </ul>


                </div>
            </div>
        </nav>
     <div class="container">
            <div class="row">

            <div class="col-md-8 col-md-offset-2">
                <div class="panel-heading"><p style=font-size:25pt; >TIME OUT</p>
                    
                    <input class="form-control" type="number" id="rfid" name="rfid" placeholder="Scan RFID . . ." autofocus>

                  </div>
                <div class="panel panel-default">
                    
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Scripts -->
    <script src="js/app.js"></script>
</body>
</html>
