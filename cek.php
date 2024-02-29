<?php
session_start();

if($_SESSION['level'] == "user"){
    echo "Anda bukan admin";
    exit;
}