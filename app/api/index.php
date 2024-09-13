<?php
session_start();
date_default_timezone_set('Europe/Paris');
header("Access-Control-Allow-Origin: *");

require_once ('../../vendor/autoload.php');

use App\Service\ZbClient;
use App\Repository\ZbInstrumentRepository;
use App\Service\EncryptService;

if($_SERVER['REQUEST_METHOD'] === 'GET'){
    
    if(isset($_GET['search'])){
        $zbInstrumentRepository = new ZbInstrumentRepository;
        $zbInstruments = $zbInstrumentRepository->findAllByKeyword($_GET["search"]);
        $_SESSION['search_results'] = $zbInstruments;
        
        $referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : './index.php';
        header('Location: ' . $referer);
    }

    if(isset($_GET['id'])){
        if(isset($_SESSION['selected_instrument'])){
            foreach($_SESSION['selected_instrument'] as $SerializedSelectedZbInstruments){
                $zbInstrument = unserialize($SerializedSelectedZbInstruments);
                if($zbInstrument->getId() === intval($_GET['id'])){
                    unset($_SESSION['search_results']);
                    $referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : './index.php';
                    header('Location: ' . $referer);
                }
            }
        }

        $SerializedZbInstruments = $_SESSION['search_results'];
        $zbInstrumentRepository = new ZbInstrumentRepository;
        $ZbInstruments = [];
        foreach($SerializedZbInstruments as $SerializedZbInstrument){
            $zbInstrument = unserialize($SerializedZbInstrument);
            if($zbInstrument->getId() === intval($_GET['id'])){
                $zbInstrumentRepository->findGraphLink($zbInstrument);
                $_SESSION['selected_instrument'][] = serialize($zbInstrument);
                unset($_SESSION['search_results']);
                $referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : './index.php';
                header('Location: ' . $referer);
            }
        }
    }

    if(isset($_GET['removeInstrument'])){
        if(isset($_SESSION['selected_instrument'])){
            $_SESSION['selected_instrument'] = array_filter($_SESSION['selected_instrument'], function($obj){
                return unserialize($obj)->getId() !== intval($_GET['removeInstrument']);
            });
        }
    }

    
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(isset($_POST['email']) && isset($_POST['password'])){
        unset($_SESSION['log']);

        $encryptService = new EncryptService();
        $encryptService = $encryptService->encrypt($_POST['password']);

        $zbClient = new ZbClient();
        $status = $zbClient->log($_POST['email'], $encryptService->getEncrypt());

        $_SESSION['log']['status'] = $status;

        if($status){
            $_SESSION['log']['email'] = $_POST['email'];
            $_SESSION['log']['password'] = $encryptService->getEncrypt();
        }else{
            $_SESSION['log']['error'] = $zbClient->getLogError();
        }

        $referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : './index.php';
        header('Location: ' . $referer);
    }

}


?>
