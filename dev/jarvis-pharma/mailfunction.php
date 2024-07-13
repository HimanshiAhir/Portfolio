<?php
include("config.php");
if(isset($_POST['submit']) && ($_POST['submit']=='Send Request'))
{
	date_default_timezone_set('Asia/Kolkata');
	$create_at=date("Y/m/d h:i:sa");
	$name = $_POST['txtName'];
	$email = $_POST['txtEmail'];
	$mobile = $_POST['txtMobile'];
	$message = $_POST['txtNote'];
	$qry = mysql_query("INSERT INTO contact(name, email, contact, message, create_at) VALUES ('$name', '$email', '$mobile', '$message', '$create_at')");

	if($qry)
	{
		require_once 'swift_mailer/swift_required.php';
		ini_set('display_errors', 'On');
		error_reporting(E_ALL);
		 $subject = 'Alpha Sandesh Contact Data Detail';
       $from = array('contact@alphasandesh.com' =>'Alpha Sandesh');
        $to = array('contact@alphasandesh.com','md@gbsind.com','bde@alphainfolab.com');
		
		$html ='<body style="background-image: linear-gradient(to right, #e5fffe, #e2fcf3, #e4f8e7, #eaf3db, #f3edd1, #f7ecd1, #fbebd2, #feead3, #fdefda, #fdf5e2, #fef9ea, #fffef2);"><div style="color:#979288;" align="center"> <br> <br><table style="font-family: arial, helvetica, sans-serif; color: #979288; font-size: 15px; line-height: 23px; width: 96%; max-width: 650px;box-shadow: 0 0 25px rgba(0,0,0,.1); border-radius: 6px;" border="0" cellspacing="0" cellpadding="0" align="center"><thead><tr><td style="background: #fff;text-align: center;padding: 20px 0;border-bottom: 1px solid #ddd; border-radius: 6px 6px 0 0;"> <img src="https://www.alphasandesh.com/img/sandeshlogo.svg" width="200"></td></tr></thead><tbody><tr><td style="border-bottom: 1px solid #ddd;border-radius: 0 0 6px 6px;" align="center" valign="middle" bgcolor="#fff"><table style="font-family: arial,helvetica,sans-serif; color: #000; font-size: 11px; line-height: 22px; text-align: left; width: 90%; margin: 6% auto; font-weight: 500;" border="0" cellspacing="0" cellpadding="0" align="center"><tr style="font-size:16px; color:#000;"><td align="left" width="30%"><strong>Name</strong><span style="float: right;"><strong>:</strong></span></td><td width="70%" style="padding-left: 10px;"> '."$name".'</td></tr><tr style="font-size:16px; color:#000;"><td align="left"><strong>Email</strong><span style="float: right;"><strong>:</strong></span></td><td style="padding-left: 10px;"> '."$email".'</td></tr><tr style="font-size:16px; color:#000;"><td align="left"><strong>Contact</strong><span style="float: right;"><strong>:</strong></span></td><td style="padding-left: 10px;"> '."$mobile".'</td></tr><tr style="font-size:16px; color:#000;"><td align="left"><strong>Message</strong><span style="float: right;"><strong>:</strong></span></td><td style="padding-left: 10px;"> '."$message".' </td></tr></table></td></tr></tbody></table> <br> <br></div></body>';

		$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com',587,'tls');
		$transport->setusername('ipv4.deals19@gmail.com');
		$transport->setPassword('ejlyjcrztetiefiu');

		$swift = Swift_Mailer::newInstance($transport);

		$message = new Swift_Message($subject);
		$message->setFrom($from);
		$message->setBody($html, 'text/html');
		$message->setTo($to);


		if($recipients = $swift->send($message))
		{
			echo "<script>location.href='thankyou.php'</script>";
		}
		else
		{

		}
	}
	else
	{
		echo "<script>alert('Unable to Registered error!')</script>";
	}

}
?>