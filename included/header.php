<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="keywords" content="">
<title>Pavlowa</title>

<link rel="icon" type="image/png" href="img/favicon.png">

<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700' rel='stylesheet' type='text/css'>
<!-- Bootstrap -->
<link href="<?php echo $mainUrl;?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $mainUrl;?>/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo $mainUrl;?>/css/style.css" rel="stylesheet">


<link href="<?php echo $mainUrl;?>/css/fakeLoader.css" rel="stylesheet">

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Syntax Highlighting -->
<script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?autoload=true&amp;skin=sunburst&amp;lang=css" defer="defer"></script>
<style>.operative { font-weight: bold; border:1px solid yellow }</style>
<!-- // Syntax Highlighting -->


</head>

<body>
<div id="fakeLoader"></div>


 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="<?php if (isset($home)){ echo 'active';} ?>"><a href="home">Home</a></li>
        <li class="<?php if (isset($contact)){ echo 'active';} ?>"><a href="contact">Contact</a></li>
      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



<div class="main_container col-sm-12">






