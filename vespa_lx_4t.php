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
        <span><img src="data3/images/vespa_lx50_big.jpg" alt="vespa_lx50_big" title="" id="wows0"/></span>
        <span><img src="data3/images/vespa_lx50_big.jpg" alt="vespa_lx50_big" title="" id="wows1"/></span>
    </div>
    <div class="ws_bullets">
    	<div>
            <a href="#wows0" title="vespa_lx50_big"><img src="data3/tooltips/vespa_lx50_big.jpg" alt="vespa_lx50_big"/>1</a>
            <a href="#wows1" title="vespa_lx50_big"><img src="data3/tooltips/vespa_lx50_big.jpg" alt="vespa_lx50_big"/>2</a>
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
	<p class="text">
    <br>
	Model LX:<br><br>

		Vespa LX tilbyder en blanding af klassisk stil og moderne design med funktionalitet, sikkerhed og agility.<br>
		Den overgår alle andre scootere der produceres i dag med hensyn til stivhed og styrepræcision.<br><br>

		Den er naturligvis med den klassiske og populære runde forlygte, spejle i forkromet stål og baller af stål.<br>
		Sædehøjde giver køreren perfekt styring, og forhjulet med fem eger i aluminium garanterer større stabilitet.<br> 
        Den kraftfulde 200mm store bremseskiver foran sikrer stabilitet og effektivitet når der bremses.<br><br>
 
        LX modellen, er i stil med den Vespa der har eksisteret i generationer, men med et twist.<br>
		Med det umiskendelige udseende og praktiske kombinationen mellem komfort og moderne design, har Vespa skabt en ny klassiker.<br />        
        Tilbydes i disse <a class="custom_a" href="jquery_img-swap/farve.html">farver.</a>
    </p>
      
    <form method="link" action="katalog.php">
    <input type="submit" value="Se Pris" style="margin-left:60px; margin-top:20px;">
    </form>	
    
    <p class="text">
    	Tilbydes også gennem <a class="custom_a" href="services.php">Leasing aftale.</a>
        </p>
</div>
<div class="bot"></div>

<br /><br />

<div id="footer">
<?php include "include_footer.php";?>
</div>

    
</body>
</html>
