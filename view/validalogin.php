<?php

session_cache_expire(1);
session_start();

if(!isset($_SESSION["usuario"])){
    echo "<script>";
    echo " window.location='View/login.php'";
    echo "</script>";
}
