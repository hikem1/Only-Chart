<?php
session_start();
require_once ('./vendor/autoload.php');

        $title = "Only Chart";

?>
<!DOCTYPE html>
<html lang="fr">
        <head>
        <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title><?php echo $title; ?></title>
                <script src="./node_modules/@popperjs/core/dist/umd/popper.min.js" type="module"></script>
                <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js" defer></script>
                <script src="app/js/close_tab.js" defer></script>
                <script src="app/js/search_modal.js" defer></script>
                <script src="app/js/account_modal.js" defer></script>
                <script src="app/js/iframe.js" defer></script>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
                <link href="app/asset/style.css" rel="stylesheet">
                <link href="app/asset/graph.css" rel="stylesheet">
                <!-- <link href="app/asset/time.css" rel="stylesheet"> -->
                <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css" defer>
        </head>
        <body>