<?php
session_start();
echo $_SESSION['time']->format("H:i:s") . "<br>";
