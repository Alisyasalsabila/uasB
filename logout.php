<?php
//menjalankan session: selalu diletakkan di awal
session_start();
session_destroy();
header('location: ./guest.php')
?>