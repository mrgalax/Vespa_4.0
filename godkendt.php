<?php
session_start();

if (isset($_GET['date']) && isset($_SESSION['faktura'])) { 
	$date=$_GET['date'];
	$_SESSION['faktura']="<h1>Tak for dit køb!</h1><br /><p>Her er din faktura, den vil også blive sendt til dig på mail</p>".$_SESSION['faktura']."<br />".date('l jS \of F Y ');

$to = $_SESSION['email'];
		$subject = "Varer bestilt og betalt fra Eshop";
		$message = "<html><body>";
		$message .= $_SESSION['faktura'];
		$message .= "</body></html>";
		$from = "no-reply@dildoshoppen.dk";
		$headers = "From:" . $from;
		$headers .= "\r\nContent-Type: text/html; charset=utf-8\r\n";
		mail($to,$subject,$message,$headers);

	
}
else header('Location: index.php');

$f=file_get_contents('faktura.php');
$f.=$_SESSION['faktura'];
file_put_contents('faktura.php',$f);


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
          <meta http-equiv="content-type" content="text/html; charset=utf-8" />
          <title>eshop</title>
         <link href="style/template_sune.css" rel="stylesheet" type="text/css" />
  </head>
     <body>
          <div id="wrapper">
			    <div id="header">
				
			    </div>
                <div id="content">
					<?php echo $_SESSION['faktura']; 
					
					
					session_destroy(); ?> 
					<br />
					<a href="index.php" >Tilbage til e-shoppen</a>
					
                </div>
				<div id="footer">
				</div>
          </div>

		
     </body>
</html>