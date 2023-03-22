<?php
    if(isset($_GET['show'])){
    $json = file_get_contents('json/gastos.json');
    echo $json;
}
?>