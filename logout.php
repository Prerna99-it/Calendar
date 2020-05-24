<?php
session_start();
if(session_destroy()) // Destroying All Sessions {
header("Location: home1.html"); // Redirecting To Home Page

?>