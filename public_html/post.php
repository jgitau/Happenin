<?php
session_start();
if(isset($_SESSION['user'])!="")
{
    header("Location: index.php");
}
include_once '../resources/config.php';


if(isset($_POST['btn-post']))
{
    
    $time = mysql_real_escape_string($_POST['time']);
    $location = mysql_real_escape_string($_POST['loc']);
    $title = mysql_real_escape_string($_POST['name']);
  //  $email=mysql_query("SELECT * FROM users WHERE email='$email'");
    if(mysql_query("INSERT INTO posts(title,location,time) VALUES('$title','$location','$time')"))
    {
        ?>
        <script>alert('successfully posted');</script>
        <?php
    }
    else
    {
        ?>
        <script>alert('error while registering you...');</script>
        <?php
    }
    
    
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">
    </head><body>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><span>Home</span></a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-ex-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#">Log out</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Post Form</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <form class="form-horizontal" method ="post" role="form">
                            
                            <div class="form-group">
                                <div class="col-sm-2">
                                    <label for="inputPassword3" class="control-label">Event Name</label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="EventName" class="form-control" name ="name"placeholder="Event Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-2">
                                    <label for="inputPassword3" class="control-label">Event Location</label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="Event Location" class="form-control" name ="loc"placeholder="Event Location">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-2">
                                    <label for="inputPassword3" class="control-label">Time</label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="Event Location" class="form-control" name ="time"placeholder="Time">
                                </div>
                            </div>
                       
                        
                    </div>
                </div>
            </div>
        </div>
        
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" name ="btn-post" class="btn btn-default">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

</body></html>