<?php
  // http://localhost/pavlowa/ - sample location of the files in the server
  // remove the directory path we don't want 
  $request  = str_replace("/pavlowa/", "", $_SERVER['REQUEST_URI']);

//data to be pass to the view
$mainUrl = "http://localhost/pavlowa/"; // replace with correct url
$var1 = 'starter HTML boilerplate application';
 
  #split the path by '/'
   $params = explode("/", $request);


  $safe_pages = array("home", "contact" );
   
  if(in_array($params[0], $safe_pages)) {
    include('view/'.$params[0].".php");
  } elseif ($params[0] == '') {
    include("view/home.php");
 } elseif ($params[0] == 'index.php') {
    include("view/home.php");
  } else {
    include("view/404.php");
  }
?>

