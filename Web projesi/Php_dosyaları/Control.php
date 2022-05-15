<?php 
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
        header("Refresh: 3; url=http://eraysen.epizy.com/Web%20projesi/Html_dosyalari/Hakkimda.html");
    }
    else{
        echo("<h2> Bu bilgilere sahip bir kullanıcı bulunamadı. Bilgilerinizi kontrol ediniz.");
        header("Refresh: 3; url=http://eray-macbook-air.local/dashboard/login.php");
    }
    
}
 
if($db_email == $email and $db_password == $password){
echo "Giriş Başarılı Şekilde Yapıldı.";
}
}
?>