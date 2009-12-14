<?PHP 
$to = "charlie.hoey@gmail.com";
$subject = "Webform Submission";
$headers = "From: " . $_POST[email];
$location = $_POST[location];
$forward = 1;
	

$date = date ("l, F jS, Y"); 
$time = date ("h:i A"); 

$msg = "Below is the result of your feedback form. It was submitted on $date at $time.\n\n"; 

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    foreach ($_POST as $key => $value) {
		if($key != "location") {
			$msg .= ucfirst ($key) ." : ". $value . "\n"; 
		}
    }
}
else {
    foreach ($_GET as $key => $value) { 
    	if($key != "location") {
        	$msg .= ucfirst ($key) ." : ". $value . "\n";
        }
    }
}

mail($to, $subject, $msg, $headers); 
if ($forward == 1) { 
    header ("Location:$location"); 
} 
else { 
    echo "Thank you for submitting our form. We will get back to you as soon as possible."; 
} 

?>