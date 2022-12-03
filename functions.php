<?php 
require 'database.php';
    $ReklamSorgusu = $db->prepare("SELECT * FROM bannerlar ORDER BY gosterim_sayisi ASC LIMIT 1 ");
    $ReklamSorgusu->execute();
    $ReklamSayisi=$ReklamSorgusu->rowCount();
    $ReklamKaydi = $ReklamSorgusu->fetch(PDO::FETCH_ASSOC);




    $ReklamGuncelle = $db->prepare("UPDATE bannerlar SET gosterim_sayisi=gosterim_sayisi+1 WHERE id = ? LIMIT 1");
    $ReklamGuncelle->execute([$ReklamKaydi["id"]]);

?>