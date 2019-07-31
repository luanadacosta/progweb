<?php
    define('DB_SERVER', 'den1.mysql5.gear.host');
    define('DB_USERNAME', 'bdprojetoluana');
    define('DB_PASSWORD', 'At81~-05jZw2');
    define('DB_NAME', 'bdprojetoluana');

    $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    if(!$conn){
        die('<div class="alert-danger">Erro</div');
    }else{
        echo 'Deu Certo';
    }





?>