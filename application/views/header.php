<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sistem Informasi</title>
  <link rel="shortcut icon" href="<?php echo base_url('assets/img/logo.png') ?>">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

  <style type="text/css">
  	.navbar-top {
    	background-color: #F4F1EA;
    	color: #fff;
		}
    .with-shadow {
      box-shadow: 0 1px 2px rgba(0,0,0,0.15);
    }
    .container {
      box-sizing: border-box;
      height: 50px;
      margin: 0 auto;
      width: 100%;
      display: flex;
    }
    .navbar-header{
      display: flex;
      order: 2;
      height: 50px;
      background: url(assets/navbar/Goodreads_logo.svg) no-repeat;
      background-position: center;
      background-size: 140px 30px;
      margin: 0 16px 0 15px;
      width: 140px;
    }
	  .navbar-top .navbar-brand {
    	color: #00635D;
      text-decoration: none;
	  }
	  .navbar-top .navbar-nav > li > a {
    	padding: unset;
      text-align: center;
      width: 100%;
      display: inline-block;
      color: #382110;
      font-family: "Lato","Helvetica Neue", "Helvetica", "sans-serif";
      font-size: 16px;
      line-height: 50px;
      padding: 0 30px;
	  }
    .navbar-top .navbar-nav > li > a:hover,
    .navbar-top .navbar-nav > li > a:focus {
      background-color: #00635D;
      color: #fff;
    }
    .searchBox_form{
      width: 100%;
    }
    input[type=text]{
      background: #FFFFFF;
      border-radius: 3px;
      border: #DCD6CC 1px solid;
      color: #333333;
      font-family: "Lato", "Helvetica Neue", "Helvetica", sans-serif;
      resize: none;
    }
    .searchBox_input--navbar{
      height: 32px;
      flex: 1;
      padding: 4px 26px 4px 8px;
      width: 100%;
    }
    .searchBox_input{
      border: 1px solid #D8D8D8;
      border radius: 3px;
      font family: "Lato", "Helvetica Neue", "Helvetica", sans-serif;
      font-size: 14px;
      padding: 8px 26px 8px 8px;
      width: 100%;
    }
    .searchBox_icon{
      right: 4px;
      top: 6.5px;
      display: inline-block;
      height: 19px;
      position: absolute;
      width: 18px;
    }
	  .box {
		  margin-top: 80px;
      margin-bottom: 20px;
		  padding: 10px;
		  background-color: #fff	;
		  border-radius: 5px;
	  }
	  body {
		  background-color: #D8D8D8;
	  }

  </style>
</head>
<body>
<nav class="navbar navbar-top navbar-fixed-top with-shadow">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" title="Goodreads Home"></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="<?php echo base_url() ?>">Home</a></li>
      <li><a href="<?php echo base_url('index.php/web/mahasiswa') ?>">My Books</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo base_url('index.php/web/jurusan') ?>">Browse <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo base_url('index.php/web/jurusan') ?>">Community<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
    </ul>
    <form class="searchBox_form " action="/action_page.php">
        <input type="text" class="searchBox_input searchBox_input--navbar" placeholder="Search books" name="search">
        <button class="searchBox_icon glyphicon glyphicon-search" type="submit">
          <!--<i class="glyphicon glyphicon-search"></i>-->
        </button>
    </form>
    <!---<ul class="nav navbar-nav navbar-right text-center">
      <li class="dropdown pull-right">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> Akun
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#"><?php echo $this->data['nim'] ?></a></li>
          <li><a href="#"><?php echo $this->data['nama'] ?></a></li>
        </ul>
      </li>
    </ul>--->
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><img alt= "iconNotif" border="0" src= "assets/navbar/notif.png" style="display:inline-block;vertical-align:middle"></a></li>
      <li><a href="#"><img alt= "iconChat" border="0" src= "assets/navbar/chat.png" style="position:relative;top:-10px;margin:0px"></a></li>
      <li><a href="#"><img alt= "iconMessage" border="0" src= "assets/navbar/message.png" style="position:relative;top:-10px;margin:0px" ></a></li>
      <li style="padding: 0px"><a href="#"><img alt= "iconFriend" border="0"  src= "assets/navbar/friend.png" style="position:relative;top:-10px"></a></li>
      <li><a class="dropdown-toggle" data-toggle="dropdown" href="#"><img alt= "iconProfile" border="0" src= "assets/navbar/profile.png" style="position:relative;top:-10px;margin:0px"></a>
        <ul class="dropdown-menu">
          <li><a href="#"><?php //echo $this->data['nim'] ?></a>a</li>
          <li><a href="#"><?php //echo $this->data['nama'] ?></a>b</li>
        </ul>
      </li>
    </ul>
  </div>
</nav>
