<?php

$contact = true;

include('included/header.php');
?>




<div class="container">


<h1>Contact</h1>

<div class="clear" style="height:40px;"></div>

<div class="col-sm-6">

 <div id="alert1">
   <div id="zoneSub" class="error"></div>
 </div>

<form  class="form-horizontal" action="included/subscribe.php" method="POST" id="form">


  <div class="form-group">
    <label for="name" class="col-sm-3 control-label">Name</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="name" name="name" placeholder="" required>
    </div>
  </div>


    <div class="form-group">
    <label for="surname" class="col-sm-3 control-label">Surname</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="surname" name="surname" placeholder="" required>
    </div>
  </div>


  <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
    <div class="col-sm-9">
      <input type="email" class="form-control" id="email" name="email" required>
    </div>
  </div>



    <div class="form-group">
    <label for="phone" class="col-sm-3 control-label">Phone Number</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="phone" name="phone" placeholder="" required>
    </div>
  </div>




    <div class="form-group">
    <label for="phone" class="col-sm-3 control-label">Message</label>
    <div class="col-sm-9">
    <textarea rows="5" cols="5" class="form-control" name="message"></textarea>
    </div>
  </div>





  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
      <button type="submit" class="btn btn-default">SUBMIT</button>
    </div>
  </div>
</form>


</div>


<!-- //contact form -->





  
<style>
.map-canvas{
    height:500px;
}
</style>

<div id="map-canvas" class="map-canvas col-sm-6"></div>

   <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script type="text/javascript">


var pos = new google.maps.LatLng( 53.2205654, -6.6593078);
var marker;
var map;        

        function initialize() {
            "use strict";
            var roadAtlasStyles = [

              {
                "stylers": [
                  { "saturation": -81 },
                  { "hue": "#00e5ff" }
                ]
              },{
                "elementType": "labels.text.stroke",
                "stylers": [
                  { "visibility": "off" }
                ]
              }

            ];


            var mapOptions = {
                zoom: 15,
                center: pos,           
                mapTypeControlOptions: {
                    mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'usroadatlas']
                }
            };

            map = new google.maps.Map(document.getElementById('map-canvas'),
                mapOptions);

            
     var image = 'img/map-icon.png';
  marker = new google.maps.Marker({
    map:map,
  icon: image,
    draggable:true,
    animation: google.maps.Animation.DROP,
    position: pos
  });       
            
            var styledMapOptions = {
                name: "Styled Map",
            };

            var usRoadMapType = new google.maps.StyledMapType(
                roadAtlasStyles, styledMapOptions );

            map.mapTypes.set('usroadatlas', usRoadMapType);
            map.setMapTypeId('usroadatlas');
        }

        google.maps.event.addDomListener(window, 'load', initialize);
        
        
    </script>






<div class="clear"></div>
</div><!-- container -->





<?php include('included/footer.php');?>



<script type='text/javascript'>

$(document).ready( function() {
    $("#form").submit(function () {
            $.post("included/subscribe.php",$("#form").serialize(),function(texte){
var texte = jQuery.parseJSON(texte);
//$("div#zoneSubFooter").append(texte);
$('#alert1').show();
if(texte=="saved"){

document.getElementById('zoneSub').innerHTML='<div class="alert alert-success" role="alert">Thank you for your message.</div>';

$('#form').html('<div class="clear" style="height:100px;"></div>');

}
else if (texte=="email_error"){
document.getElementById('zoneSub').innerHTML='<div class="alert alert-danger" role="alert">Sorry. Message cannot be sent at this time.</div>';
} 
else if(texte=="invalid"){
document.getElementById('zoneSub').innerHTML='<div class="alert alert-danger" role="alert">This email is invalid</div>';
}

});
return false; // ne change pas de page
});
});

$(document).ready(function() {
$('#alert1').hide();
});


</script>



</body>
</html>