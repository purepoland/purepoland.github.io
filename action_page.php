<html>
<body>
<?php
$to="benjamin.persick@scceagles.com";
$subject="Pure Poland Message";
$email=$_REQUEST['Email'];
$message=$_REQUEST['Message'];
$headers="From: $email";
$sent=mail($to,$subject,$message,$headers);
if($sent)
{print(<a href="https://www.purepoland.github.io/">Thank you for contacting us! Click here to return to the homepage.</a>)}
else
{print "We eoncountered an error sending your message.";}
</body>
</html>