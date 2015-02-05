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


<script type="text/javascript" src="scripts/jquery.js"></script>
	<script>
		!window.jQuery && document.write('<script src="scripts/jquery.js"><\/script>');
	</script>
	<script type="text/javascript" src="./fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="./fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="./fancybox/jquery.fancybox-1.3.4.css" media="screen" />
 	<link rel="stylesheet" href="fancybox/fancybox_style.css" />
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			*   Examples - images
			*/

			$("a#example1").fancybox({
				'overlayShow'	: false,
				'transitionIn'	: 'elastic',
				'transitionOut'	: 'elastic'
			});

			$("a#example2").fancybox({
				'overlayShow'	: false,
				'transitionIn'	: 'elastic',
				'transitionOut'	: 'elastic'
			});

			$("a#example3").fancybox({
				'overlayShow'	: false,
				'transitionIn'	: 'elastic',
				'transitionOut'	: 'elastic'	
			});

			$("a#example4").fancybox({
				'overlayShow'	: false,
				'transitionIn'	: 'elastic',
				'transitionOut'	: 'elastic'
			});

			$("a#example5").fancybox();

			$("a#example6").fancybox({
				'titlePosition'		: 'outside',
				'overlayColor'		: '#000',
				'overlayOpacity'	: 0.9
			});

			$("a#example7").fancybox({
				'titlePosition'	: 'inside'
			});

			$("a#example8").fancybox({
				'titlePosition'	: 'over'
			});

			$("a[rel=example_group]").fancybox({
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'titlePosition' 	: 'over',
				'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
					return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
				}
			});

			/*
			*   Examples - various
			*/

			$("#various1").fancybox({
				'titlePosition'		: 'inside',
				'transitionIn'		: 'none',
				'transitionOut'		: 'none'
			});

			$("#various2").fancybox();

			$("#various3").fancybox({
				'width'				: '75%',
				'height'			: '75%',
				'autoScale'			: false,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'type'				: 'iframe'
			});

			$("#various4").fancybox({
				'padding'			: 0,
				'autoScale'			: false,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none'
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
        <span><img src="data3/images/plakat1.jpg" alt="plakat1" title="" id="wows0"/></span>
        <span><img src="data3/images/plakat2.jpg" alt="plakat1" title="" id="wows1"/></span>
        <span><img src="data3/images/plakat3.jpg" alt="plakat1" title="" id="wows2"/></span>
    </div>
    <div class="ws_bullets">
    	<div>
            <a href="#wows0" title="plakat1"><img src="data3/tooltips/plakat1.jpg" alt="plakat1"/>1</a>
            <a href="#wows1" title="plakat2"><img src="data3/tooltips/plakat2.jpg" alt="plakat2"/>2</a>
            <a href="#wows2" title="plakat1"><img src="data3/tooltips/plakat3.jpg" alt="plakat3"/>3</a>
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
	<h2>iDesign - En Vespa.dk konkurrence!</h2>

    <p class="text">
    	Velkommen til vores første konkurrence i Danmark, hvor gevinsten er din helt even cuztomised Vespa LX 50!<br />
		Har du en fed ide til et lækkert paint-job, så vis os det og deltag i konkurrencen!<br /><br />
		Du kan uploade billedet <a class="custom_a" target="_blank" href="#">her</a>, så er du med i løbet om en Vespa LX 50!<br />
        Se et lille udvalg af andres uploads herunder.
    </p>   
    <p class="text">
        Deltag i vores <a class="custom_a" target="_blank" href="https://www.facebook.com/pages/Vespa/329133163800368">Facebook gruppe</a> og del din Vespa!<br />
        Download vores <a class="custom_a" href="app.php">Community App</a> til iPhone og Android.<br />
        Download gratis <a class="custom_a" href="posters.php">Vespa fan plakater.</a>
    </p>
    
    <div id="fancybox">
	<p>
		<a id="example1" href="./fancybox/example/1_b.jpg"><img alt="example1" src="./fancybox/example/1_s.jpg" /></a>

		<a id="example2" href="./fancybox/example/2_b.jpg"><img alt="example2" src="./fancybox/example/2_s.jpg" /></a>

		<a id="example3" href="./fancybox/example/3_b.jpg"><img alt="example3" src="./fancybox/example/3_s.jpg" /></a>
		
		<a id="example4" href="./fancybox/example/4_b.jpg"><img class="last" alt="example4" src="./fancybox/example/4_s.jpg" /></a>
	</p>
	</div>
    
</div>
<div class="bot"></div>

<br /><br />

<div id="footer">
<?php include "include_footer.php";?>
</div>

    
</body>
</html>
