<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo "Hi, " . $_SESSION['id'] ;
}
?>