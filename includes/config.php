<?php
session_start(); // Session start

// Error messages
error_reporting(E_ALL);
ini_set("display_errors", 1);

// Autoload of classes
function __autoload($class_name)
{
 include "classes/" . $class_name . ".class.php";
}

