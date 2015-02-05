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
               echo "<h2>" . $this->navn  ."</h2><br />";
               echo "<img src='" . $this->billede . "' alt='" . $this->navn . "' /><br /><br />";
               echo $this->beskrivelse . "<br />";
               echo "<b><u><h3>Pris kr. " . $this->pris . "</b></u></h3><br />";
               echo "<form method='get' action='' >";
               echo "<p><input type='hidden' name='vnr' value='".$this->vnr . "' />";
               echo "<select name='antal'>";
               echo "<option value='1' selected='selected'>1</option>";
               echo "<option value='2'>2</option>";
               echo "<option value='3'>3</option>";
               echo "</select>";
               echo "<input type='submit' value='Læg i kurv'  /></p>";
               echo "</form>";
               echo "<hr />";

	   }
}
 function list_faktura()
{
		  
$nummer=file_get_contents('fakturanummer.txt');
$nummer++;
file_put_contents('fakturanummer.txt',$nummer);
$faktura="<h2><Faktura nr: " .$nummer. "</h2>";
$faktura.="<h3>Kunde: </h3>";
$faktura.=$_GET['navn']." <br />";
$faktura.=$_GET['gade']." <br />";
$faktura.=$_GET['by']. " <br />";


$total=0;
$faktura.="<h3>Varer </h3>";
foreach($_SESSION['kurv'] as $vnr => $antal){
$faktura.=$antal." stk";
$faktura.=$_SESSION['katalog'] [$vnr] ->navn." ";
$pris=$_SESSION['katalog'][$vnr] -> pris;
$faktura.=" stykpris: ".$pris;
$antalpris=$antal*$pris;
$faktura.=" kr. " .$antalpris. " ";
$total=$total+$antalpris;
}

$faktura.="varekøb ialt kr. ".$total. "<br />";

$faktura.="Porto: 50 kr </br>";
$totalP=$total+50;
$_SESSION['total']=$total;
$faktura.="pris ialt kr. ". $total;
$_SESSION['faktura']=$faktura;

		 
echo $faktura;
}
 

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sune Oestergreen</title>
<link href="style/template_sune.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="http://www.epay.dk/js/standardwindow.js"></script>

</head>

<body>
<div id="wrapper_all">
<div id="name_logo"><a href="index.php" target="_parent"><img src="style/booze.png" alt="booze" /></a></div>
<div id="leftContainer"><a href="http://www.facebook.com" target="_new"><img src="style/facebook.png" alt="facebook" /></a>
<br />
<a href="http://www.twitter.com" target="_new"><img src="style/twitter.png" alt="twitter" /></a>
</div>
<div id="menuContainer">
<?php include_once("include_menu.php"); ?>
</div>

<div class="top"></div>
<div class="bodyContainer">

		  
    <?php  
		 if (isset($_GET['navn']) )list_faktura(); 
			 else header('Location: katalog.php'); 
	            ?>                    
	 
<form action='https://ssl.ditonlinebetalingssystem.dk/popup/default.asp'
                          method='post' name='ePay' target='ePay_window' id='ePay'>
          <input type='hidden' value='1' name='language'>
          <input type='hidden' value='8887969' name='merchantnumber'>
          <input type='hidden' value='208' name='currency'> 
          <input type='hidden' value=" <?php echo $_SESSION['total']*100; ?>"name='amount'>
          <input type='hidden' value='godkendt.php' name='accepturl'> 
          <input type='hidden' value='afvist.php' name='declineurl'>
          <input type='button' value='Betal med Dankort' onclick='open_ePay_window()'>
          <input type='button' value='Køb mere' onclick='location.href="eshop.php"'>   
  </form>

	 
	 

</div>
<div class="bot"></div>

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
   
</body>
</html>
