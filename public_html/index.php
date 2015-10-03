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
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script >
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/index.css" rel="stylesheet" type="text/css">
  </head><body>
    <div class="cover">
      <div class="navbar">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"> </span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="login.php"><span><?php if(!isset($_SESSION['user']))echo 'Sign In'; ?></span></a>
          <!-- <a class="navbar-brand" " contenteditable="true"><span>Register</span></a> -->
          </div>
         <div class="collapse navbar-collapse" id="navbar-ex-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="active">
                <p ><?php echo $userRow['username']; ?>&nbsp;<a href="logout.php?logout"><?php if(isset($_SESSION['user']))echo 'Sign Out'; ?></a></p>
              </li>
            
            </ul>
          </div> 
        </div>
      </div>
      <div class="cover-image" style="background-image : url('https://ununsplash.imgix.net/reserve/r0r252VR6WqPRsxngGUE_telefoon%20politie.jpg?w=1024&amp;q=50&amp;fm=jpg&amp;s=30a261ce928af70d4f9a3fe0cf394bc3')"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h1 class="text-inverse">TextBookExchange</h1>
            <p class="text-inverse">Designed for your convience and made for your needs</p>
            <br>
            <br>
          </div>
        </div>
      </div>

    </div>
   
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <label class="control-label" for="exampleInputEmail1">Page Description:&nbsp;The purpose of this app is giving students the
              best possible experience of trading their books without using any social
              media. Everything can be done directly on the site where there are many
              options the users can choose from (buy, selling, trading, short term renting,
              etc). On the Facebook, there are many selling/buying types of groups formed
              by UB students. This web app allows all the groups to unify into one. While
              Facebook groups allow people to post things other than books, this web
              app will entirely focus on textbooks. This is a huge advantage for students
              so they dont have to dig through annoying spam. Another feature of this
              app is that it will allow students to have a free and secure way of posting
              textbooks. What this means is that all users have to register under their
              buffalo.edu email in order to sign up, this means that only UB students
              can use this web app. All form of contact is going through user’s UB email
              first and they can choose alternative after they exchange their email contact.
              Another feature for this app is implementing some popular textbook selling
              sites into this app. This will gives the students to buy off directly these
              book sites creating a one stop site for all their textbook needs.</label>
          </div>
        </div>
      </div>
    </div>
    <a href="#about">
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center text-primary">The FIVE Musketeers</h1>
            <p class="text-center">We are a group of skilled individuals.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <img src="https://unsplash.imgix.net/photo-1422222948315-28aadb7a2cb8?w=1024&amp;q=50&amp;fm=jpg&amp;s=cfeadbd7a991e58b553bee29a7eeca55" class="center-block img-circle img-responsive">
            <h3 class="text-center">Junlin Tang</h3>
            <p class="text-center">Developer</p>
          </div>
          <div class="col-md-4">
            <img src="https://unsplash.imgix.net/photo-1421986527537-888d998adb74?w=1024&amp;q=50&amp;fm=jpg&amp;s=e633562a1da53293c4dc391fd41ce41d" class="center-block img-circle img-responsive">
            <h3 class="text-center">Steven Mundt</h3>
            <p class="text-center">Developer</p>
          </div>
          <div class="col-md-4">
            <img src="https://unsplash.imgix.net/reserve/xWcqazwvSXadCA7dZLiQ_Ship_mast.jpg?w=1024&amp;q=50&amp;fm=jpg&amp;s=166f668db5471c7f022245f6049e5d12" class="center-block img-circle img-responsive">
            <h3 class="text-center">Alex Ding</h3>
            <p class="text-center">Developer</p>
          </div>
          <div class="col-md-4">
            <img src="https://unsplash.imgix.net/photo-1423683249427-8ca22bd873e0?w=1024&amp;q=50&amp;fm=jpg&amp;s=5e57c661d0f772ce269188a6f5325708" class="center-block img-circle img-responsive">
            <h3 class="text-center">Yongbo Hao</h3>
            <p class="text-center">Developer</p>
          </div>
          <div class="col-md-4"></div>
          <div class="col-md-4">
            <img src="https://unsplash.imgix.net/photo-1423347834838-5162bb452ca7?w=1024&amp;q=50&amp;fm=jpg&amp;s=c255e589621f06513c1d123c7323fe9c" class="center-block img-circle img-responsive">
            <h3 class="text-center">Wenhua Lin</h3>
            <p class="text-center">Developer</p>
          </div>
        </div>
      </div>
    </div>
  

</body></html>