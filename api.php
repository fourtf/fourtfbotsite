<?php
if (!empty($_GET['handler']))
{
$fp = fsockopen("127.0.0.1", 5200, $errno, $errstr, 10);

if (!$fp)
{
	echo "{ success : false }";
}
else
{
        fwrite($fp, $_GET['handler']);
        while (!feof($fp)) {
           echo fgets($fp, 128);
        }
        fclose($fp);
}
}
else
{
	readfile("apidocs.php");
}
?>
