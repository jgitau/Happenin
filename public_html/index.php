<?php

/*
This file is for the main page of the site. Still has to be finally designed.
*/
session_start();
include_once '../resources/config.php';
$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
?>
<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/index.css" rel="stylesheet" type="text/css">
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
          <a class="navbar-brand" href="Post.html"><span><?php if(isset($_SESSION['user']))echo 'Post'; ?></span></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="login.php"><?php if(!isset($_SESSION['user']))echo 'Login'; ?></a>
            </li>
            <li>
              <a href="register."><?php if(!isset($_SESSION['user']))echo 'Register'; ?></a>
              <p ><?php echo $userRow['username']; ?>&nbsp;<a href="logout.php?logout"><?php if(isset($_SESSION['user']))echo 'Sign Out'; ?></a></p>
            </li>

          </ul>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <img src="http://i1175.photobucket.com/albums/r621/Padrino_v/Happenin_zpscege1isq.jpg" border="0" alt=" photo Happenin_zpscege1isq.jpg" height="400" width="700">
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-2">
            <div style="width: 120px; float: left; text-align: center;">
              <img border="0" alt="Food Icon" style="width: 60px;height: 60px;" class="" onclick="myFunction(this)" src="http://i1175.photobucket.com/albums/r621/Padrino_v/12071505_944475572257467_1728693715_n_zpskvfue7ls.jpg">
              <br>
              <span>Food</span>
            </div>
          </div>
          <div class="col-md-2">
            <div style="width: 120px; float: left; text-align: center;">
              <a href="#"><img src="http://i1175.photobucket.com/albums/r621/Padrino_v/12081624_944475562257468_860457378_n_zpskqec2d0m.jpg" border="0" alt="Concerts Icon" style="width: 60px;height: 60px;"></a>
              <br>
              <span>Concerts</span>
            </div>
          </div>
          <div class="col-md-2">
            <div style="width: 120px; float: left; text-align: center;">
              <a href="#"><img src="http://i1175.photobucket.com/albums/r621/Padrino_v/12086743_944475565590801_709343190_n_zpsgzqqbayw.jpg" border="0" alt="Community Service Icon" style="width: 60px;height: 60px;"></a>
              <br>
              <span>Community Service</span>
            </div>
          </div>
          <div class="col-md-2">
            <div style="width: 120px; float: left; text-align: center;">
              <a href="#"><img src="http://i1175.photobucket.com/albums/r621/Padrino_v/12071528_944475568924134_1770165998_n_zpsm2szzenh.jpg" border="0" alt="Sport Icon" style="width: 60px;height: 60px;"></a>
              <br>
              <span>Sports</span>
            </div>
          </div>
          <div class="col-md-2">
            <div style="width: 120px; float: left; text-align: center;">
              <a href="#"><img src="http://i1175.photobucket.com/albums/r621/Padrino_v/12071496_944475582257466_1625457486_n_zpsrzvmhwgc.jpg" border="0" alt="Professional Icon" style="width: 60px;height: 60px;"></a>
              <br>
              <span>Professional</span>
            </div>
          </div>
          <div class="col-md-2">
            <div style="width: 120px; float: left; text-align: center;">
              <a href="#"><img src="http://i1175.photobucket.com/albums/r621/Padrino_v/12084103_944475575590800_1665635099_n_zpsmxznhs37.jpg" border="0" alt="Recreation Icon" style="width: 60px;height: 60px;"></a>
              <br>
              <span>Recreation</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12"></div>
          <div class="col-md-12"></div>
        </div>
      </div>
    </div>
    <div class="col-md-12"></div>
    <div class="col-md-12"></div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="text-center text-primary">Developer Team</h2>
            <p class="text-center">We like turtles.</p>
            <br>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <h4 class="text-center">Steve</h4>
            <p class="text-center">Developer</p>
          </div>
          <div class="col-md-3">
            <h4 class="text-center">Junlin</h4>
            <p class="text-center">Developer</p>
          </div>
          <div class="col-md-3">
            <h4 class="text-center">Antonio</h4>
            <p class="text-center">Developer</p>
          </div>
          <div class="col-md-3">
            <h4 class="text-center">LJ</h4>
            <p class="text-center">Developer</p>
          </div>
        </div>
      </div>
    </div>
    <script>
      function myFunction(obj){
        alert(obj);
        if(obj.alt == "Food Icon"){
        	//alert(obj.class);
        	obj.toggleClass("blur");
        }
      }
    </script>
  

</body></html>