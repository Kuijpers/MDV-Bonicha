<?php

ob_start();//this just buffers the header so that you dont recieve an error for returning to the same page

	$page_id = "Contact pagina"; // De tekst tussen de " " moet je veranderen voor de pagina titel ( <title></title> )
	
	// De includes hieronder zijn html bestanden welke in de map templates staan.
	// Als je 1 van de 2 menus niet wil gebruiken dan plaats je voor de include regel een //
	// // maakt er een comment van waardoor de browser deze niet leest.
	
include ('templates/header.html');
include ('templates/top.html');
include ('templates/topmenu.html');

?>

<div class="overall_body">



<!-- In dit onderstaande gedeelte komt de tekst en eventueel de foto's te staan welke je op de pagina wilt laten zien -->

	<div class="center_body">
<!-- Hier tussen de informatie aanpassen-->        		

<?php
	include ('lang/nl/mail.php');
	include ('config/config.php');
?>
    
    <h3> Contact Pagina </h3>
    <br />Familie J B Loves
<br />Weerdingerkanaal zz 233
<br />7831 A P Nieuw Weerdinge
<br />Tel : 0591 -316458
<br />Mobiel : 0621618784 of 0629351725
<br /> 

<?php
if (empty($_GET['m']))
	{
		$mode = "";	
	}
else
	{
		$mode = $_GET['m'];
	}

switch($mode)
	{
   
		default:

			include ('includes/contactform.php');

    	break;

		case 'c':
		
			include ('includes/contactform_check.php');
			
			if ($error == 0) // Wanneer er geen errors zijn kan de mail verstuurd worden.
				{	
					$comment_mail = nl2br($comment);
				
				
					include ('includes/send_to.php');
					include ('includes/send_from.php');
					
					header("Refresh: 0; URL=\"?m=b\"");
				}
		
		break;

		case 'b':
?>
<div id="contact">
	<fieldset>
    	<legend>
        	Bedankt voor uw bericht.
		</legend>
<?php		
		echo nl2br($MAIL['thanks']);
?>
	</legend>
</fieldset>
<?php
		
		break;
   
	}//end the switch
?>

             
 <!-- Informatie tot hier aanpassen -->               

	</div>

</div>

<?php

include ('templates/footer.html');

ob_flush();

?>