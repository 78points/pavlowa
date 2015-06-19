<?php

$home = true;

include('included/header.php');
?>




<div class="container">


<div class="row">
<ol class="breadcrumb">
  <li>Home</li>
</ol>





<div class="row">



<div class="col-sm-12">
<h2><i class="fa fa-rocket"></i> Pavlowa <small><span class="bol"><?php echo $var1;?></span></small></h2>
<p>Starter HTML boilerplate application for web development with Bootstrap, Font Awesome and pretty URLs.</p>
</div>


<div class="clear" style="height:20px;"></div>


<div class="col-sm-12">
<h4>Features</h4>

<ul>
<li><a href="http://getbootstrap.com/">Bootstrap</a></li>
<li><a href="http://fortawesome.github.io/Font-Awesome/">Font Awesome</a></li>
<li><a href="http://codepen.io/vivinantony">Fake Loader</a></li>
<li><a href="contact">Contact form with Ajax</a></li>
<li>Pretty URLs</li>
</ul>

<div class="clear" style="height:20px;"></div>

<h4>Installation</h4>

<p>
- Copy files in to server directory <br />
- Update <strong>index.php</strong> line 4 and linve 7 with correct details <br />
- create page file in <strong>/view</strong> directory (exemple: /view/test.php )<br />
- add page to <strong>$safe_pages</strong> array in index.php line 14 
<pre>
$allowed = array("home", "contact", "test" );
</pre>
- go to: <strong>https://your-application/test</strong> to view your page <br />
</p>

<div class="clear" style="height:20px;"></div>

<h4>Defaults</h4>

<p>
- header for page are located in <strong>/included</strong> folder, to include in page add:
<pre>
$home = true; //set home menu to current
include('included/header.php'); 
</pre>

- footer for page are located in <strong>/included</strong> folder, to include in page add:
<pre>
include('included/footer.php'); 
</pre>

- default view: <strong>/view/home.php</strong><br />
- default 404 view: <strong>/view/404.php</strong><br />

</p>



<div class="clear" style="height:20px;"></div>

<h4>Menu</h4>

<p>
This is how you can set current menu item to active state:<br />

<pre>

 li class="&lt;?php if (isset($home)){ echo 'active';} ?&gt;"
 li class="&lt;?php if (isset($contact)){ echo 'active';} ?&gt;"

</pre>
</p>


<div class="clear" style="height:20px;"></div>

<h4>Contact form</h4>

<p>
For contact form to work fill out tows details in <strong>/included/subscribe.php</strong> <br />

<pre>
$masterEmail = 'XXXXXXXXXX'; // email address you wish to post form to
$from = 'XXXXXXXXXX'; // sender
</pre>

</p>


<div class="clear" style="height:20px;"></div>

<h4>Google map</h4>

<p>
Set latitude and longitude in <strong>/view/contact.php</strong>:<br />

<pre>
var pos = new google.maps.LatLng( 53.2205654, -6.6593078);
</pre>
</p>


<div class="clear" style="height:20px;"></div>

<h4>Fake Loader</h4>

<p>To set background color, timer and loader type for Fake Loader update <strong>/included/footer.php</strong><br />

<pre>
timeToHide:1300, //timer
spinner:"spinner2", // Options: 'spinner1', 'spinner2', 'spinner3', 'spinner4', 'spinner5', 'spinner6', 'spinner7'
bgColor:"#333", // background color
</pre>


</div>




</div><!-- row -->

<div class="clear"></div>
</div><!-- container -->




<?php include('included/footer.php');?>



</body>
</html>