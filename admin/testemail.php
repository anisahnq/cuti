<?php


	//mengabmil data dari tabel  

    error_reporting( E_ALL );    
    $from = "anisahnqomariyah@gmail.com";    
    $to = "diutta22@gmail.com";    
    $subject = "Checking PHP mail";    
    $message = "PHP mail berjalan dengan baik, test test";   
    $headers = "From:" . $from;    
    mail($to,$subject,$message, $headers);    
    echo "Pesan email sudah terkirim.";
?>