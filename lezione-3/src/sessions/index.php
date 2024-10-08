<?php

session_start();

echo 'Welcome to page #1';
$_SESSION['time'] = new DateTime();
echo '<br /><a href=".\page.php">Next page</a>';
