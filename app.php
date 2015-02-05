<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sune Oestergreen</title>

<link href="style/template_sune.css" rel="stylesheet" type="text/css" />


<!--social menu-->
<script type="text/javascript" src="scripts/jquery.js"></script>
	<script type='text/javascript'>
			$(document).ready(function() {
				$('#social_nav_vertical li a').hover(function() { 
				$(this).stop().animate({ marginLeft: '20px' },300); // on Mouseover move to left
				}, function() { //on Mouseout move back to original positon
				$(this).stop().animate({ marginLeft: '0px' }, 300);
			});
			
			});
	</script>
<!--end social menu-->

<!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="engine3/style.css"/>
	<style type="text/css">a#vlb{display:none}</style>
	<script type="text/javascript" src="engine3/wowslider.js"></script>
<!-- End WOWSlider.com HEAD section -->


</head>

<body>
<div id="piaggiolink">
<a href="http://www.piaggio.com" title="Go to piaggio"><img src="images/piaggio_crest.png" alt="piaggio" /></a>
</div>

<br /><br />

<div class="top"></div>
<div class="bodyContainer">
	<p class="text">
    <a class="custom_a" href="http://md2f12m4cg18.keaweb.dk/Vespa_4.0/tema.php">Tilbage</a><br /><br />
		<img src="images/app/app_details.png" alt="app" /><img src="images/app/app_search.png" alt="app" />
	</p>
</div>
<div class="bot"></div>

<br /><br />

<div id="footer">
<?php include "include_footer.php";?>
</div>

    
</body>
</html>
