<?php
session_start();
/* Nous testons que la variable existe et qu'elle a bien la longueur souhaitée */
if(!isset($_SESSION['code']) OR strlen($_SESSION['code']) !=5) exit("Wrong entry !!!! You might have done a mistake with the antispam code, please retry...");

/* Comparaison entre les deux valeurs si elles sont différentes on arrete tout sinon on continue et on envoie le mail */
if($_SESSION['code'] != $_POST['verif']) exit("Wrong entry !!!! You might have done a mistake with the antispam code, please retry...");



function Rec($text)
		{
			$text = trim($text); // delete white spaces after & before text
			if (1 === get_magic_quotes_gpc())
			{
				$stripslashes = create_function('$txt', 'return stripslashes($txt);');
			}
			else
			{
				$stripslashes = create_function('$txt', 'return $txt;');
			}

			// magic quotes ?
			$text = $stripslashes($text);
			$text = htmlspecialchars($text, ENT_QUOTES); // converts to string with " and ' as well
			$text = nl2br($text);
			return $text;
		};


function IsEmail($email)
		{
			$pattern = "^([a-z0-9_]|\\-|\\.)+@(([a-z0-9_]|\\-)+\\.)+[a-z]{2,7}$";
			return (eregi($pattern,$email)) ? true : false;
		};



	$nom     = (isset($_POST['nom']))     ? Rec($_POST['nom'])     : '';
	$email   = (isset($_POST['email']))   ? Rec($_POST['email'])   : '';
	$prenom     = (isset($_POST['prenom']))     ? Rec($_POST['prenom'])     : '';
        $country     = (isset($_POST['country']))     ? Rec($_POST['country'])     : '';
	$affiliation     = (isset($_POST['affiliation']))     ? Rec($_POST['affiliation'])     : '';
        $finance = (isset($_POST['finance']))     ? Rec($_POST['finance'])     : '';
        $email = (IsEmail($email)) ? $email : ''; // soit l'email est vide si erroné, soit il vaut l'email entré



// Remplacement de certains caractères spéciaux
		


if (($nom != '') && ($email != '') && ($prenom != '') &&  ($affiliation != '') && ($country != '') && ($title != '') )
		{

		  // les variables sont remplies, on génère puis envoie le mail
		  
		  $sujet="School Les HOUCHES 2013";
		  $adresse="leshouches2013@gmail.com";
		  $from="From: $prenom $nom <$email> \r\n";
		  $from.="Reply-To: $prenom $nom <$email>\n";


		  $message="$prenom $nom <$email> \n";
		  $message.="$title $affiliation  \n";
		  $message.="$address $country \n";
		  $message.="Phd in $PHD (with $ADVISOR)\n";
		  $message.="Applying for finance? $present \n";
		  $message.="\n\n Comments, Questions, and Financements:\n ";
		  $message.="$finance";

// Remplacement de certains caractères spéciaux
			$message = str_replace("&#039;","'",$message);
			$message = str_replace("&#8217;","'",$message);
			$message = str_replace("&quot;",'"',$message);
			$message = str_replace('<br>','',$message);
			$message = str_replace('<br />','',$message);
			$message = str_replace("&lt;","<",$message);
			$message = str_replace("&gt;",">",$message);
			$message = str_replace("&amp;","&",$message);

		  $message3="Inscription at the Les Houches 2013 School\n";
		  $message3.=$message;
		  $message3.="\n\n";
		  $message3.="$nom $prenom <$email> $title $affiliation $address $country $PHD $ADVISOR $present \n";

		  mail ($adresse,$sujet,$message3,$from);

		  $from="From: Les Houches School 2013 <please.no.reply@radium.net.espci.fr> \r\n";
		  $from.="Reply-To: Les Houches School 2013 <$adresse> \n";
		  $message2="Thank you for your registration for the Les Houches School: 'Statistical physics, Optimization, Inference and Message-Passing algorithms' \n";
		  $message2.=$message;
		  $message2.="\n";
		  $message2.="-----------------------\n";		  
		  $message2.="We will send you an e-mail to inform you about our selection of participants after the applications deadline. ";
		  $message2.="If you have some questions, you may contact us at $adresse.";
		  

		  mail ($email,$sujet,$message2,$from);

		  echo "Thank you for your application! You will receive a confirmation e-mail (if not please repeat the application or contact us).";
		  echo  "You can now hit the back button to come back on the site ";
		}

                else{
			// une des variables (ou plus) est vide ...
		       echo "One or more of the entry is empty (or your email is wrong), please push the back button and try again";
		};
?>
