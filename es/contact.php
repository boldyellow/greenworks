<?php
	$yourEmail = "trdouglas@gmail.com"; // the email address you wish to receive these mails through
	$yourWebsite = "Green JobWorks"; // the name of your website
	$thanksPage = 'http://green.boldyellow.net/thanks.php'; // URL to 'thanks for sending mail' page; leave empty to keep message on the same page 
	$maxPoints = 4; // max points a person can hit before it refuses to submit - recommend 4
	$requiredFields = "name,email,reason,comments"; // names of the fields you'd like to be required as a minimum, separate each field with a comma
	
	
	// DO NOT EDIT BELOW HERE
	$error_msg = array();
	$result = null;
	
	$requiredFields = explode(",", $requiredFields);
	
	function clean($data) {
		$data = trim(stripslashes(strip_tags($data)));
		return $data;
	}
	function isBot() {
		$bots = array("Indy", "Blaiz", "Java", "libwww-perl", "Python", "OutfoxBot", "User-Agent", "PycURL", "AlphaServer", "T8Abot", "Syntryx", "WinHttp", "WebBandit", "nicebot", "Teoma", "alexa", "froogle", "inktomi", "looksmart", "URL_Spider_SQL", "Firefly", "NationalDirectory", "Ask Jeeves", "TECNOSEEK", "InfoSeek", "WebFindBot", "girafabot", "crawler", "www.galaxy.com", "Googlebot", "Scooter", "Slurp", "appie", "FAST", "WebBug", "Spade", "ZyBorg", "rabaz");
	
		foreach ($bots as $bot)
			if (stripos($_SERVER['HTTP_USER_AGENT'], $bot) !== false)
				return true;
	
		if (empty($_SERVER['HTTP_USER_AGENT']) || $_SERVER['HTTP_USER_AGENT'] == " ")
			return true;
		
		return false;
	}
	
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		if (isBot() !== false)
			$error_msg[] = "No bots please! UA reported as: ".$_SERVER['HTTP_USER_AGENT'];
			
		// lets check a few things - not enough to trigger an error on their own, but worth assigning a spam score.. 
		// score quickly adds up therefore allowing genuine users with 'accidental' score through but cutting out real spam :)
		$points = (int)0;
		
		$badwords = array("adult", "beastial", "bestial", "blowjob", "clit", "cum", "cunilingus", "cunillingus", "cunnilingus", "cunt", "ejaculate", "fag", "felatio", "fellatio", "fuck", "fuk", "fuks", "gangbang", "gangbanged", "gangbangs", "hotsex", "hardcode", "jism", "jiz", "orgasim", "orgasims", "orgasm", "orgasms", "phonesex", "phuk", "phuq", "pussies", "pussy", "spunk", "xxx", "viagra", "phentermine", "tramadol", "adipex", "advai", "alprazolam", "ambien", "ambian", "amoxicillin", "antivert", "blackjack", "backgammon", "texas", "holdem", "poker", "carisoprodol", "ciara", "ciprofloxacin", "debt", "dating", "porn", "link=", "voyeur", "content-type", "bcc:", "cc:", "document.cookie", "onclick", "onload", "javascript");
	
		foreach ($badwords as $word)
			if (
				strpos(strtolower($_POST['comments']), $word) !== false || 
				strpos(strtolower($_POST['name']), $word) !== false
			)
				$points += 2;
		
		if (strpos($_POST['comments'], "http://") !== false || strpos($_POST['comments'], "www.") !== false)
			$points += 2;
		if (isset($_POST['nojs']))
			$points += 1;
		if (preg_match("/(<.*>)/i", $_POST['comments']))
			$points += 2;
		if (strlen($_POST['name']) < 3)
			$points += 1;
		if (strlen($_POST['comments']) < 15 || strlen($_POST['comments'] > 1500))
			$points += 2;
		if (preg_match("/[bcdfghjklmnpqrstvwxyz]{7,}/i", $_POST['comments']))
			$points += 1;
		// end score assignments
	
		foreach($requiredFields as $field) {
			trim($_POST[$field]);
			
			if (!isset($_POST[$field]) || empty($_POST[$field]) && array_pop($error_msg) != "Por favor, rellene todos los campo requerido(s) y presentar de nuevo.\r\n")
				$error_msg[] = "Por favor, rellene todos los campo requerido(s) y presentar de nuevo.";
		}
	
		if (empty($_POST["name"])) { $nameError = "Nombre (requerido)"; }
		if (empty($_POST["email"])) { $emailError = "Correo Electr&oacute;nico (requerido)"; }
		if (!empty($_POST['email']) && !preg_match('/^([a-z0-9])(([-a-z0-9._])*([a-z0-9]))*\@([a-z0-9])(([a-z0-9-])*([a-z0-9]))+' . '(\.([a-z0-9])([-a-z0-9_-])?([a-z0-9])+)+$/i', strtolower($_POST['email'])))
			$emailInvalid = "Not a valid e-mail";
		if (empty($_POST["phone"])) { $phoneError = "Tel&eacute;fono (requerido)"; }
		if (empty($_POST["reason"])) { $reasonError = "Raz&oacute;n (requerido)"; }
		if (empty($_POST["comments"])) { $commentsError = "Mensaje (requerido)"; }
		

		if ($error_msg == NULL && $points <= $maxPoints) {
			$subject = "Website Form Submission";
			

			$message = "You received this e-mail message through your website: \n\n";
			foreach ($_POST as $key => $val) {
				if (is_array($val)) {
					foreach ($val as $subval) {
						$message .= ucwords($key) . ": " . clean($subval) . "\r\n";
					}
				} else {
					$message .= ucwords($key) . ": " . clean($val) . "\r\n";
				}
			}
			$message .= "\r\n";
			$message .= 'IP: '.$_SERVER['REMOTE_ADDR']."\r\n";
			$message .= 'Browser: '.$_SERVER['HTTP_USER_AGENT']."\r\n";
			$message .= 'Points: '.$points;
	
			if (strstr($_SERVER['SERVER_SOFTWARE'], "Win")) {
				$headers   = "From: $yourEmail\r\n";
			} else {
				$headers   = "From: $yourWebsite <$yourEmail>\r\n";	
			}
			$headers  .= "Reply-To: {$_POST['email']}\r\n";
	
			if (mail($yourEmail,$subject,$message,$headers)) {
				if (!empty($thanksPage)) {
					header("Location: $thanksPage");
					exit;
				} else {
					$result = 'Your mail was successfully sent.';
					$disable = true;
				}
			} else {
				$error_msg[] = 'Your mail could not be sent this time. ['.$points.']';
			}
		} else {
			if (empty($error_msg))
				$error_msg[] = 'Your mail looks too much like spam, and could not be sent this time. ['.$points.']';
		}
	}
	function get_data($var) {
		if (isset($_POST[$var]))
			echo htmlspecialchars($_POST[$var]);
	}
?>



<!doctype html>
<html lang="en">

<head>
	
    <meta charset="utf-8">
	<meta http-equiv="cache-control" content="max-age=3600">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- <meta name="Robots" content="index,follow"> -->
	
	<meta property="og:title" content="Lorem Ipsum">
	<meta property="og:description" content="Lorem Ipsum">
	<meta property="og:type" content="website">
	<meta property="og:url" content="http://www.xyz.com/index.html">
	<meta property="og:image" content="ogshare.jpg">
	
	<title>Cont&aacute;ctenos | Green JobWorks</title>
	
	<!-- favicons
	================================================== -->
	<!-- Touch Icons - iOS and Android 2.1+ 180x180 pixels in size. --> 
	<link rel="apple-touch-icon" href="/path/to/apple-touch-icon.png">
	
	<!-- Firefox, Chrome, Safari, IE 11+ and Opera. 192x192 pixels in size. -->
	<!-- <link rel="icon" href="/path/to/favicon.png"> -->
	
	<!-- above the fold basic styles
	================================================== -->
	<style>
		.error { color: #f00; }
	</style>
	
	<!-- css
	================================================== -->
	<link rel="stylesheet" href="../_assets/css/styles.css">

	<!-- analytics
	================================================== -->

</head>

<body>
	
	
	<?php include '../_assets/includes/header_es.php';?>

	
     <section class="interior">
	     
		<div class="container">
			
			<div class="row">
				
				<div class="ten offset-by-one columns">
					
					<h6>Cont&aacute;ctenos</h6>
					
				</div>
				
			</div>
			
			
			<div class="row">
				
				<div class="ten offset-by-one columns">
				
					<h1>Contr&aacute;tenos o Aplique para Trabajar</h1>
					
					<p><b>Llame <span class="type-color">410-864-6194</span> o complete esta forma</b>&emsp;<small>(todos los espacios son requeridos)</small></p>
					
					<div style="display:none;">				

						<?php
						if (!empty($error_msg)) {
							echo '<p class="error">ERROR: '. implode("<br />", $error_msg) . "</p>";
						}
						if ($result != NULL) {
							echo '<p class="success">'. $result . "</p>";
						}
						?>
					
					</div>

					<form action="<?php echo basename(__FILE__); ?>" method="post">
						<noscript>
							<p><input type="hidden" name="nojs" id="nojs" /></p>
						</noscript>
						
						<div class="row">
							
							<div class="five columns">
								<label for="reason"><?php if ($reasonError) {echo "<span class='error'>" . $reasonError . "</span>"; } else { echo "Raz&oacute;n para Contactar"; } ?></label>
								<select class="u-full-width" name="reason" id="reason">
									<option value="" selected style="display:none;">Por favor, elija</option>
									
									<option <?php if ($_POST['reason'] == 'D&iacute;game acerca de sus servicios') { ?>selected="true" <?php }; ?>value="D&iacute;game acerca de sus servicios">D&iacute;game acerca de sus servicios</option>

									<option <?php if ($_POST['reason'] == 'Quiero aplicar a un trabajo') { ?>selected="true" <?php }; ?>value="Quiero aplicar a un trabajo">Quiero aplicar a un trabajo*</option>
								</select>
							</div>
							
							<div class="seven columns attention">
								<p>Solicitantes: <a href="#required">Lead nuestros requerimientos</a></p>
							</div>
						</div>
						
						
						<div class="row">
										
							<div class="four columns">
								<label for="name"><?php if ($nameError) {echo "<span class='error'>" . $nameError . "</span>"; } else { echo "Nombre "; } ?></label>
								<input class="u-full-width" type="text" name="name" id="name" placeholder="Nombre" value="<?php get_data("name"); ?>" />
							</div>
							
							<div class="four columns">
								<label for="email"><?php if ($emailError) { echo "<span class='error'>" . $emailError . "</span>"; } elseif ($emailInvalid) { echo "<span class='error'>" . $emailInvalid . "</span>"; } else { echo "Correo Electr&oacute;nico"; } ?></label>
								<input class="u-full-width" type="text" name="email" id="email" placeholder="name@email.com" value="<?php get_data("email"); ?>" />
							</div>
							
							<div class="four columns">
								<label for="phone"><?php if ($phoneError) {echo "<span class='error'>" . $phoneError . "</span>"; } else { echo "Tel&eacute;fono"; } ?></label>
								<input class="u-full-width" type="text" name="phone" id="phone" placeholder="Tel&eacute;fono" value="<?php get_data("phone"); ?>" />
							</div>
							
						</div>
						
						<div class="row">
							
							<div class="twelve columns">
						
								<label for="comments"><?php if ($commentsError) {echo "<span class='error'>" . $commentsError . "</span>"; } else { echo "Mensaje"; } ?></label>
								<textarea class="u-full-width" placeholder="" name="comments" id="comments"><?php get_data("comments"); ?></textarea>
							</div>
							
						</div>
						
							
						<div class="row">
							
							<div class="twelve columns">
						
								<input class="button-primary u-pull-right" type="submit" name="submit" id="submit" value="Submit" <?php get_data("comments"); ?> >
								
							</div>
							
						</div>

						<div id="required" class="row">
							
							<div class="twelve columns fine-print">
								
								<hr>
								
								<p>*<b>Requerimientos de la Solicitud</b></p>
								<ul>
									<li>D&iacute;ganos acerca de su experiencia en la construcci&oacute;n, su disponibilidad, su &eacute;tica en el trabajo y cualquier dato importante para nosotros.</li>
									<li>&iquest;Qu&eacute; tipo de trabajo est&aacute; aplicando usted? Por favor indique: asbestos, plomo, remediaci&oacute;n de moho, demolici&oacute;n, limpieza despu&eacute;s de construcci&oacute;n, mantenimiento de limpieza de facilidades, carpinter&iacute;a, etc.</li>
									<li>&iquest;Cu&aacute;ndo puede empezar?</li>
									<li>Nota: Usted debe ser mayor de 18 a&ntilde;os y autorizado para trabajar en Estados Unidos.</li>
								</ul>									
							</div>
							
						</div>
													
					</form>		

				</div>
				
			</div>
						
		</div>
	    
    </section>
	
	
	<?php include '../_assets/includes/footer_es.php';?>

	
</body>

</html>

