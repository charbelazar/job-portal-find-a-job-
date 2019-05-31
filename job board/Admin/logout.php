<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
//header("Location: ../../../../Finalproject/front/index.php"); // Redirecting To Home Page
header("Location: ../../Finalproject/front/index.php"); // Redirecting To Home Page
}
?>