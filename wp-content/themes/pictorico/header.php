<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Pictorico
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href='http://fonts.googleapis.com/css?family=Raleway:500' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Cantarell:700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Inconsolata' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Slabo" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Titillium+Web:200,300,400" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Alegreya+Sans:100" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Bungee+Inline" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cabin+Sketch" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Mirza" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">



<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

<div id="header">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"></a>
    </div>

<!-- style="background-color:#fced4c"  typical yellow color -->

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div style="background-color:white"  class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a style="font-family: 'Titillium Web', sans-serif;font-size:15px"  href="http://www.trueangle.org/" > <span style="font-weight:700;font-size:15px" aria-hidden="true"></span><b>T</b></a></li>
        <li><a class="menutypo"  href=""><span  style="font-weight:700;font-size:15px" class="glyphicon  glyphicon-heart-empty" aria-hidden="true"></span> ABOUT</a></li>
        <li class="dropdown">
          <a class="menutypo" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span style="font-weight:700;font-size:17px" class="glyphicon  glyphicon-blackboard" aria-hidden="true"></span> DESIGN<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a class="menutypo" href="http://www.trueangle.org/web-and-graphics/">WEB AND GRAPHICS</a></li>
            <li><a class="menutypo" href="http://www.trueangle.org/interaction-and-game/">INTERACTION AND GAME</a></li>
          <!--  <li><a href="">INTERACTION DESIGN</a></li> -->
          <!--  <li><a href="">GAME DESIGN</a></li> -->
            <!-- <li><a href="http://www.beautifulwork.org/ui">USER INTERFACE</a></li> -->
            <!-- <li role="separator" class="divider"></li> -->
            <li><a class="menutypo" href="http://www.trueangle.org/reader/">READER</a></li>
          </ul>
        </li>
      </ul>
  <!--  <form  class="navbar-form navbar-left" role="search">  
         <div class="form-group">
         <input type="text" class="form-control" placeholder="Search"> 

          <?php get_search_form(true); ?> 

         </div>
        <button type="submit" class="btn btn-default">Submit</button>
         </form> -->
      <ul class="nav navbar-nav navbar-left">
        <li><a class="menutypo"  href=""><span style="font-weight:700;font-size:17px"  class="glyphicon  glyphicon-plane" aria-hidden="tr\
ue"></span> CONTRIBUTE</a></li>
        <li class="dropdown">
          <a class="menutypo"  href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span style="font-weight:700;font-size:15px" class="glyphicon  glyphicon-book" aria-hidden="true"></span> TRUEANGLE  DESIGN <span class="caret"></span></a>
          <ul class="dropdown-menu">
                <li><a class="menutypo" href="http://www.trueangle.org/plan">DESIGN DOCUMENTS</a></li>
    <!--        <li role="separator" class="divider"></li> -->
    
          </ul>
        </li>
<li><a class="menutypo" href=""><span style="font-weight:700;font-size:15px" class="glyphicon  glyphicon-download" aria-hidden="tr\
ue"></span> DOWNLOAD</a></li>
      </ul>
<ul class="nav navbar-nav navbar-right">
  <li><button  type="button" class="btn btn-default navbar-btn">CONTACT</button> </li>
  <li>&nbsp;&nbsp;</li>
<!--  <li><img height="30" width="30"  src="../../../files/logo/bwlogo.png"></img> </li> -->
</ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

</div>
 
	<div id="content" class="site-content">
