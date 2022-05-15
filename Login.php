<?php

$kullanici_adi="b211210067@gmail.com";
$sifre="Selver1+";

if($kullanici_adi==$_POST['id'] && $sifre==$_POST['sifre'])
{
    echo "Hoşgeldiniz b211210067";
}
else{
    echo "Girilen bilgiler hatalıdır. 3 saniye içinde giriş ekranına yönelendirileceksiniz";
    header("Refresh: 3; url=Login.html");
}

?>