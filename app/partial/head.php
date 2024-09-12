<?php
session_start();
require_once ('./vendor/autoload.php');
if(isset($_SESSION['selected_instrument'])){
        $zbInstrument = unserialize($_SESSION['selected_instrument']);
        $title = $zbInstrument->getName();
}else{
        $title = "Only Chart";
}
?>
<!DOCTYPE html>
<html lang="fr">
        <head>
        <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title><?php echo $title; ?></title>
                <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js" defer></script>
                <script src="app/js/time.js" type="module"></script>
                <script src="app/js/search_modal.js" defer></script>
                <script src="app/js/account_modal.js" defer></script>
                <link href="app/asset/style.css" rel="stylesheet">
                <link href="app/asset/graph.css" rel="stylesheet">
                <link href="app/asset/time.css" rel="stylesheet">
                <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css" defer>
        </head>