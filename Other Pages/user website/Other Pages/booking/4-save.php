<?php
// (A) LOAD LIBRARY
require "2-reserve-lib.php";

// (B) SAVE
$_RSV->save($_POST["sessid"], $_POST["userid"], $_POST["seats"],$_POST["name"] ,$_POST["date"] ,$_POST["showtime"]);
echo '<script type="text/javascript">';
echo 'alert("Seats Booked Successfully");';
echo '</script>';
?>