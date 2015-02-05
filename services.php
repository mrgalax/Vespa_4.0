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

<div id="social_nav_vertical">
<p class="vertical_title">Share</p>
	<ul>
		<li><a class="delicious" href="http://del.icio.us/post?url=Yourwebsitetitle" title="Del paa delicio.com">Delicious</a></li>

        <li><a class="facebook" href="http://www.facebook.com/sharer.php?u=http://sune2109.keaweb.dk/Vespa/index.php" title="Del paa Facebook">Facebook</a></li>

		<li><a class="stumbleupon" href="http://www.stumbleupon.com/submit?url=http://www.yoursite.com/" title="Del paa Stumble">Stumble</a></li>

		<li><a class="twitter" href="http://twitter.com/home?status=YourWebsiteTitle-http://yourwebsite.com@TwitterUserName" title="Del på Twitter">Twitter</a></li>
	</ul>
</div>


<div id="promotion_nav_vertical">
	<a href="tema.php"><img class="img_center" src="images/promotion.png" alt="promotion" /></a>
	<p class="promotion_vertical_title">Promotion</p>
</div>

<div id="header">
<div id="vespa_logo"><a href="index.php"><img src="images/clear.png" alt="clear" width="250" height="50" /></a></div>

<div id="menuContainer">
<?php include_once("include_menu.php"); ?>
</div>

</div>

<!-- Start WOWSlider.com BODY section -->
<div id="wowslider-container3">
    <div class="ws_images">
        <span><img src="data3/images/rich_guy.jpg" alt="rich_guy" title="" id="wows0"/></span>
        <span><img src="data3/images/rich_girl.jpg" alt="rich_girl" title="" id="wows1"/></span>
        <span><img src="data3/images/rich_ppl.jpg" alt="rich_ppl" title="" id="wows2"/></span>
        <span><img src="data3/images/rich_couple.jpg" alt="rich_couple" title="" id="wows3"/></span>
    </div>
    <div class="ws_bullets">
    	<div>
            <a href="#wows0" title="plakat1"><img src="data3/tooltips/rich_guy.jpg" alt="rich_guy"/>1</a>
            <a href="#wows1" title="plakat2"><img src="data3/tooltips/rich_girl.jpg" alt="rich_girl"/>2</a>
            <a href="#wows2" title="plakat1"><img src="data3/tooltips/rich_ppl.jpg" alt="rick_ppl"/>3</a>
            <a href="#wows3" title="plakat2"><img src="data3/tooltips/rich_couple.jpg" alt="rich_couple"/>3</a>
    	</div>
    </div>
    <a style="display:none" href="http://wowslider.com">HTML Email Design Gallery by WOWSlider.com v2.0</a>
    <div class="ws_shadow"></div>
</div>
<script type="text/javascript" src="engine3/script.js"></script>
<!-- End WOWSlider.com BODY section -->

<br />

<div id="scooters">
	<?php include "include_scooters.php";?>
</div>

<div class="top"></div>
<div class="bodyContainer">
	<img src="images/lease.png" alt="lease" style="float:right; position:relative; left:40px; bottom:35px;" />
	<div id="services">
	<p class="text">
		Vespa vil i fremtiden kunne tilbyde leasing for et beløb på omkring kr. 500.- månedligt. <br />
        Mere information vil være at finde snarest, så snart beløbene er kommet på plads. <br />
		Der vil være fuld service på alle leasing produkter. <br />
	</p>
    </div>
</div>
<div class="bot"></div>

<br /><br />

<!--<div id="footer">
<?php include "include_footer.php";?>
</div>-->

    
</body>
</html>
