<?php
if (!isset($_SESSION)){
    session_start();
}
$con=mysqli_connect("localhost","root","","nirman") or die("Could not Connect My Sql");

/*$con=mysqli_connect("premium11","biplgmwr_nirman","JA#8i9rYhH)f","biplgmwr_nirman") or die("Could not Connect My Sql");*/

