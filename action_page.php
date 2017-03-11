
<?php
// the message
$msg = "EMAIL: echo $_POST["name"];\nSecond line of text";

mail("someone@example.com","My subject",$msg);
?>
