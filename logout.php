<?php 
    session_start();
    session_destroy();
    $referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : './index.php';
    header('Location: ' . $referer);
?>
