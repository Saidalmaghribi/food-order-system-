<?php

/*start verification method*/

if ($_SERVER["REQUEST_METHOD"]=="POST") {
	$product=filter_var($_POST["product"],FILTER_SANITIZE_STRING); 
	$name=    filter_var($_POST["name"],FILTER_SANITIZE_STRING); 
	$email= filter_var($_POST["email"],FILTER_SANITIZE_STRING); 
	$phone=filter_var($_POST["phone"],FILTER_SANITIZE_NUMBER_INT); 
	$quantite=filter_var($_POST["quantite"],FILTER_SANITIZE_STRING); 
	$adress=filter_var($_POST["adress"],FILTER_SANITIZE_STRING); 
	$formErorr=array();

	if ($product=0) {
		$formErorr[]="please select one product";
	}
	if (empty($name)) {
		$formErorr[]="please Enter your name";
	}
	if (strlen($name)<3) {
		$formErorr[]="the name can't be less than 4 characters";
	}
	
	if (empty($adress)) {
		$formErorr[]="please Enter your adress";
	}
	if (strlen($email)<4) {
		$formErorr[]="please Enter your @email";
	}

	if (!empty($formErorr)) {
		foreach ($formErorr as $error ) {
		      $error;
		}
	}
	if (empty($formErorr)) {
				
       /**
 * This example shows how to handle a simple contact form.
 */

$msg = '';
//Don't run this unless we're handling a form submission
if (array_key_exists('email', $_POST)) {
    date_default_timezone_set('Etc/UTC');

    require 'PHPMailer-master/PHPMailerAutoload.php';

    //Create a new PHPMailer instance
   //Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages


//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "hayanisaid1995@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "said.www.com";
    $mail->setFrom('hayanisaid1995@gmail.com', 'First Last');
    //Send the message to yourself, or whoever should receive contact for submissions
    $mail->addAddress('hayanisaid1995@gmail.com', 'John Doe');
    //Put the submitter's address in a reply-to header
    //This will fail if the address provided is invalid,
    //in which case we should ignore the whole request
    if ($mail->addReplyTo($_POST['email'], $_POST['name'])) {
        $mail->Subject = 'PHPMailer contact form';
        //Keep it simple - don't use HTML
        $mail->isHTML(false);
        //Build a simple message body
        $mail->Body = <<<EOT
Email: {$_POST['email']}
Name: {$_POST['name']}
Message: {$_POST['adress']}
EOT;
        //Send the message, check for errors
        if (!$mail->send()) {
            //The reason for failing to send will be in $mail->ErrorInfo
            //but you shouldn't display errors to users - process the error, log it on your server.
            $msg = 'Sorry, something went wrong. Please try again later.';
        } else {
            $msg="your <strong>Order</strong> is Submitted";
        }
    } else {
        $msg = 'Invalid email address, message ignored.';
    }
}

	}

}
/*End verification method*/
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>system command</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script|Raleway" rel="stylesheet">
</head>
<body>
<!-- start header -->
 <div class="header">
	<div class="container">
		<div class="nav-menu">
			<ul class="unstyled-list navbar-right">
				<li><a href="">Contact</a></li>
				<li><a href="">privacy</a></li>
				<li><a href="">about</a></li>
			</ul>

			<div class="brand">
			<h2>Resturant & pizza</h2>
			  <div class="type-wrap">
            <div id="typed-strings">
                
                <p> laivraison at home.</p>
                <p>get your pizza now!1.</p>
                <p>Delecieus!</p>
            </div>
            <span id="typed" style="white-space:pre;"></span>
        </div>
		</div>
		</div>
		
		<div class="row">
			<div class="col-md-6 col-lg-6 col-sm-12">
				<div class="menu">
					<img src="images/menu.png" class="img-responsive">
				</div>
			</div>
			<div class="col-md-6 col-lg-6 col-sm-12">
				<div class="form">
					<form class="form-horisontal" method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
						<div class="row">
						<!-- start product field -->
							<div class="form-group">
								<div class="col-md-4">
									<label class="label-control" for="name">
										Choise from Menu
									</label>
								</div>
								<div class="col-md-8">
									<select class="form-control" name="product">
										<option value="0">select one</option>
										<option value="pizza">pizza</option>
										<option value="pizza italien">pizza italien</option>
										<option value="pizza name">pizza name</option>
										<option value="pizza name">pizza name</option>
									</select>
								</div>
							</div>
							<!-- End field name -->
							<!-- start product field -->
						<!-- start name field -->
							<div class="form-group">
								<div class="col-md-4">
									<label class="label-control" for="name" ">
										your name
									</label>
								</div>
								<div class="col-md-8">
									<input autocomplete="off" 
									class="form-control"
								    type="text" name="name"
								     placeholder="Ex: said"
								     id="name" 
								     >
									<i class="fa fa-user fa-fw"></i>
								</div>
							</div>
							<!-- End field name -->
							<!-- start email field -->
							<div class="form-group">
								<div class="col-md-4">
									<label class="label-control" for="email" >
										your email
									</label>
								</div>
								<div class="col-md-8">
									<input
									 class="form-control" 
									 type="email"
									  name="email"
									   placeholder="Exempel@yourEmail.com"
									   id="email"
									  >
									<i class="fa fa-envelope fa-fw"></i>
								</div>
							</div>
							<!-- End field email -->
							<!-- start phone field -->
							<div class="form-group">
								<div class="col-md-4">
									<label class="label-control" for="phone"  >
										your phone
									</label>
								</div>
								<div class="col-md-8">
									<input 
									class="form-control"
									 type="text"
									  name="phone"
									   placeholder="Ex:+1 232 123 231"
									   id="phone" 
									   >
									<i class="fa fa-mobile fa-fw"></i>
								</div>
							</div>
							<!-- End field phone -->
							<!-- start adress field -->
							<div class="form-group">
								<div class="col-md-4">
									<label class="label-control" for="phone">
									 Adress of livraison
									</label>
								</div>
								<div class="col-md-8">
									<input
									 class="form-control"
									  type="text"
									   name="adress"
									    placeholder="NY,street 2123"
									    id="laivraison"

									     >
									<i class="fa fa-mobile fa-fw"></i>
								</div>
							</div>
							<!-- End adress phone -->
							
							<div class="form-group">
								<div class="col-md-4">
									<label class="label-control" for="name">
										Number of amount
									</label>
								</div>
								<div class="col-md-8">
									<input
									 class="form-control"
									  type="number"
									   name="quantite"
									   id="quantite"
									   >
								</div>
							</div>
							<!-- End quantite name -->
							<!-- start submit field -->
							<div class="form-group">
								
								<div class="col-md-offset-4 col-md-8">
									<input class="btn btn-block" type="submit" value="Order">
									<i class="fa fa-send fa-fw"></i>
								</div>
							</div>
							<!-- End submit name -->
						</div>
					</form>
					<div class="error">
						<?php
                         if (isset($error)) { ?>
									<!-- start modal -->
									
									<div class="well">
									<div class="alert alert-danger">
										<?php
                                           echo $error . "<br>";
                                         
										?>
									</div>
									
									</div><!-- /.modal -->
									<!-- End modal -->
                       <?php

						}
						if (isset($msg)) {
							echo "<div class='alert alert-success'>";
							echo $msg;
							echo "  <i class='fa fa-exclamation'></i></div>";
						}
							?>
					</div>
				</div>
			</div>
		</div>
	</div>
 </div>
<!-- End header -->
<!-- start footer -->
<div class="footer">
	<div class="container">
		<span class="text-center">powred by<a href="http://hayani.webege.com/" target="_blank">HAYANI SAID</a>  &copy</span>
	</div>
</div>
<!-- Eend  footer -->
<!--javascript libs-->



<script language="Javascript" type="text/javascript" src="js/typed.js"></script>

<script language="Javascript" type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<script language="Javascript" type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
<script language="Javascript" type="text/javascript" src="js/javascript.js"></script>

</body>
</html>