<?php
try{
    $db = new PDO("mysql:host=localhost;dbname=banner_project;charset=UTF8","root","");

}catch(PDOException $Hata){
    echo "Bağlantı Hatası";

}

?>