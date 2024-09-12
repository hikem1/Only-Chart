<?php  
if(isset($_SESSION['selected_instrument'])){
    $zbInstrumentSelected = unserialize($_SESSION['selected_instrument']);
    if($zbInstrumentSelected->getGraph_link()){
        $iframeSrc = $zbInstrumentSelected->getGraph_link();
    }else{
        $iframeSrc = "";
    }
} 
?>

<iframe src="<?php echo $iframeSrc ?>" frameborder="0"></iframe>