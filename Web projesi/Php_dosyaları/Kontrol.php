<?php 
require "Yonlendirme.php";
session_start();
$email = $_POST['email'];
$password = $_POST['password'];
$Data_email='g211210019@sakarya.edu.tr';
$Data_password='g211210019';
 
if($email and $password){
{
    if($email==$Data_email && $password==$Data_password)
    {
        echo("<h2> Hoş Geldiniz  $email " );

    }
    else{
        echo("<h2> Bu bilgilere sahip bir kullanıcı bulunamadı. Bilgilerinizi kontrol ediniz.");
      
    }
    
}
 
if($db_email == $email and $db_password == $password){
echo "Giriş Başarılı Şekilde Yapıldı.";
include("session.php");
} else { echo "Kullanıcı adı veya parola yanlış.";
header("location:login.html");
}
 
} else {
header("location:login.php");
}
?>