<?php
/**
 * (c) pedro moreira 2010-2016
 */
session_start();
$session=true;

if(!isset($_SESSION['theme'])) { $session=false;}

if($session) {
	$theme = $_SESSION['theme'];
	$cssfile = "css".$theme.".css";
} else {
	$cssfile="css0.css";
}
session_write_close();
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="<?php echo $cssfile ?>"></link>
</head>
<body>
<?php if ($session) include('info.inc'); else include('form.inc');?>
</body>
</html>