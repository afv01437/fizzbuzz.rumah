<?php 
$start=1;
if (isset($_GET['start']) && $_GET['start']>=1) {
	$start=round($_GET['start']);
}
$stop=100;
if (isset($_GET['stop']) && $_GET['stop']>$start) {
	$stop=round($_GET['stop']);
}

$result = "Start=$start<br />";
$result .= "Stop=$stop<br />";

for($i=$start;$i<=$stop;$i++) {
	$result .= $i." " ;
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Fizz-Buzz</title>
</head>

<body>
<form action="" method="get">
  <p>Start:
  <input name="start" type="text" value="1" />
  </p>
  <p>Stop:
  <input name="stop" type="text" value="100" />
  </p>
  <p>
    <input type="submit" name="send" id="send" value="Submit" />
  </p>
</form>
<?php echo $result ?>
</body>
</html>