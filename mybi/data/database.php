<?php
$myhost="localhost";
$myuser="root";
$mypassw="";
$mybd="miby";

$link = mysqli_connect($myhost, $myuser, $mypassw, $mybd)

or die("Error " .mysqli_error($link));
?>