<?php print "<!doctype html>
<html lang=\"en\">
<head>
<title>Form Confirmation Page</title>
</head>
<body>
<h1>The form information received is given below:</h1>";
foreach ($_POST as $key=> $value){
$message = $key . " : " . $value . "<br>\r\n";
print $message;
}
print "<hr>
<hr>
<hr>
<br>
<hr>
<hr>
<form action=\"#\">
<input type=\"button\" value  = \"Back\" onclick=\"javascript:history.go(-1)\" />
</form>
</body>
</html>"
?>
