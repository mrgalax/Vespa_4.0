<?php

session_start();

 Class Vare
{
          public $vnr="";
          public $navn="";
          public $billede="";
          public $pris="";
          public $beskrivelse="";
          
          function udskriv()
          
       {    
			   echo "<div class='varer'>";
             //echo "<h2>" . $this->navn  ."</h2><br />";
               echo "<img src='" . $this->billede . "' alt='" . $this->navn . "' /><br />";
			   echo "<p class='text_katalog'>";
               echo $this->beskrivelse . "<br />";
			   echo "</p>";
               echo "<b><u><h3>Pris kr. " . $this->pris . "</b></u></h3>";
               echo "<form method='get' action='' >";
               echo "<input type='hidden' name='vnr' value='".$this->vnr . "' />";
               echo "<select name='antal'>";
               echo "<option value='1 blå' selected='selected'>Blå</option>";
               echo "<option value='1 hvid'>Hvid</option>";
               echo "<option value='1 sort'>Sort</option>";
               echo "</select>";
               echo "<input type='submit' value='Tilføj'  />";
               echo "</form>";
			 //echo "<hr />";
			   echo "</div>";

	   }
}

 function list_katalog(){
          //echo "<h1>Varer</h1>";
          foreach($_SESSION['katalog'] as $envare) $envare->udskriv();
}
 function list_kurv(){
          echo "<h3>Din Kurv <img src='img/xxx.png' width='5px' height='5px' /></h3>";
          $total=0;
          foreach($_SESSION['kurv'] as $vnr => $antal){
                 echo $antal." stk ";    
                 echo $_SESSION['katalog'][$vnr]->navn." ";
                 $pris=$_SESSION['katalog'][$vnr]->pris;
                 //echo " stykpris: ".$pris; 
                 echo " kr. ".$antal*$pris." ";
                 echo "<a href='?slet=ja&vnr=" . $vnr . "'>";
				 echo "<img src='images/fortrydknap.png' class='fortryd' alt='fortryd' />";
				 echo "</a><br />"; 
                 $total+=$antal*$pris;
            }
          if($total>0) {
			  echo "<br />Varekøb ialt kr. ".$total;
		  	  echo "<br /><br /><a href='?kasse=ja'><input type='button' value='til kassen' /></a>";
		  } else {
              echo "kurven er tom";
		  }
}

 function list_kundeinfo() {
	echo "<div class='kundeinfo'>";
	echo "<h1>Varen skal sendes til:</h1>";
		echo "<form action='betaling.php' method='get' onsubmit='if(tjek(this)) return true; else return false'>
		<input type='text' name='navn' size='25' /> Navn<br />
		<input type='text' name='gade' size='25' /> Gade<br />
		<input type='text' name='by' size='25' /> By<br />
		<input type='text' name='email' size='25' /> Email<br />
		<a href=''><input type='button' value='Køb mere' /></a>
		<input type='submit' value='Betaling'  />
 	</form>";
	echo "</div>";
	 
}


if(!isset($_SESSION['kurv']))
$_SESSION['kurv']=Array();
 
if(isset($_GET['vnr']) && isset($_GET['antal']))
$_SESSION['kurv'][$_GET['vnr']]=$_GET['antal']; 

if(isset($_GET['slet'])) unset($_SESSION['kurv'][$_GET['vnr']]);

if(!isset($_SESSION['katalog'])){
}
	
	$katalog=array();
	
          $a=new Vare();
          $a->vnr=10;
          $a->navn="Vespa 30";
          $a->billede="images/vespa.png";
          $a->pris="17700";
          $a->beskrivelse="Vespa 30";
      //læg varen ind i kataloget
          $katalog[10]=$a;
          
          $b=new Vare();
          $b->vnr=20;
          $b->navn="Vespa 45";
          $b->billede="images/vespa.png";
          $b->pris="18900";
          $b->beskrivelse="Vespa 45";
          $katalog[20]=$b;
          
          $c=new Vare();
          $c->vnr=30;
          $c->navn="Vespa 45 GTS";
          $c->billede="images/vespa.png";
          $c->pris="21500";
          $c->beskrivelse="Vespa 45 GTS";
          $katalog[30]=$c;
		       
     //gem katalog som session-variabel
          $_SESSION['katalog']=$katalog;
	

?>

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
            <a href="#wows0" title="plakat1"><img src="data3/tooltips/rich_guy.jpg" alt="rich_guy"/></a>
            <a href="#wows1" title="plakat2"><img src="data3/tooltips/rich_girl.jpg" alt="rich_girl"/></a>
            <a href="#wows2" title="plakat1"><img src="data3/tooltips/rich_ppl.jpg" alt="rick_ppl"/></a>
            <a href="#wows3" title="plakat2"><img src="data3/tooltips/rich_couple.jpg" alt="rich_couple"/></a>
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
		<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="images/udstyr_active.png" alt="salg" style="cursor:pointer" onmouseover="this.src='images/udstyr.png'" onmouseout="this.src='images/udstyr_active.png'"/> <br />
	</p>
   
        <div id="varer">

     			 <div id="kurv">
                <?php list_kurv() ?>
        		</div>
     	
				<?php
				if(!isset($_GET['kasse']))
                   list_katalog(); 
				else list_kundeinfo();    
		        ?>				  			  
		</div>
    
<script type="text/javascript">
               function tjek(f){
                    var alerttekst=""
                    if(f.navn.value=="")alerttekst+="navn mangler\n"
                    if(f.gade.value=="")alerttekst+=" gade mangler\n"
                    if(f.by.value=="")alerttekst+=" by mangler\n"
                    if(!f.email.value.match(/^[\w]{1}[\w\.\-_]*@[\w]{1}[\w\-_\.]*\.[\w]{2,6}$/i))
                    alerttekst+=f.email.value+" er ikke en gyldig emailadresse"                                        
                    if (alerttekst=="")return true
                    else {
                         alert(alerttekst);
                         return false
                    }
               }
</script>

&nbsp;&nbsp;&nbsp;(c)
</div>
<div class="bot"></div>

<br /><br />

<div id="footer">
<?php include "include_footer.php";?>
</div>

    
</body>
</html>
