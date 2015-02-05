<?php
$index = "myButtons";
$services = "myButtons";
$katalog = "myButtons";
$tema = "myButtons";
$historie = "myButtons";
$contact = "myButtons";
//This line gets the file name without the dot and extension
$menuLinkid = basename($_SERVER['PHP_SELF'],".php");
if ($menuLinkid == "index") {
	$index = 'myActiveButton';
} else if ($menuLinkid == "services") {
	$services = 'myActiveButton';
} else if ($menuLinkid == "katalog") {
	$katalog = 'myActiveButton';
} else if ($menuLinkid == "tema") {
	$tema = 'myActiveButton';
} else if ($menuLinkid == "historie") {
	$historie = 'myActiveButton';
} else if ($menuLinkid == "contact") {
	$contact = 'myActiveButton';
}
?>
<a class="<?php echo $index; ?>" href="index.php"><p>VESPA</p></a>
<a class="<?php echo $services; ?>" href="services.php"><p>SERVICES</p></a>
<a class="<?php echo $katalog; ?>" href="katalog.php"><p>KATALOG</p></a>
<a class="<?php echo $tema; ?>" href="tema.php"><p>TEMA</p></a>
<a class="<?php echo $historie; ?>" href="historie.php"><p>HISTORIE</p></a>
<a class="<?php echo $contact; ?>" href="contact.php"><p>KONTAKT</p></a>