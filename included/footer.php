




<div class="clear" style="height:200px;"></div>

<hr />


<div class="footer" style="text-align:center;">
<a href="#" target="_blank">Company Name</a>
</div><!-- footer -->


</div><!-- main_container -->



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
!window.jQuery && document.write('<script src="<?php echo $mainUrl;?>/js/jquery-1.11.2.min.js"><\/script>');
</script>

<script src="<?php echo $mainUrl;?>/js/fakeLoader.min.js"></script>
<script type="text/javascript">
$("#fakeLoader").fakeLoader({

<?php if($params[0] != 'contact'){ ?>
timeToHide:1300, 
<?php }else{ ?>
timeToHide:1, 
<?php }?>

zIndex:"999",
spinner:"spinner2",//Options: 'spinner1', 'spinner2', 'spinner3', 'spinner4', 'spinner5', 'spinner6', 'spinner7'
bgColor:"#333",
// imagePath:"customizedImage.gif" 

});

</script>


<script src="<?php echo $mainUrl;?>/js/jquery.cycle2.js"></script>

<script src="<?php echo $mainUrl;?>/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo $mainUrl;?>/js/custom.js"></script>



