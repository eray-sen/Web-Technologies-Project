<?php
//email gönderimi için gerekli olan dosyaları dahil ediyoruz.
include 'PHPMailer/class.phpmailer.php';
include 'PHPMailer/class.smtp.php';

//İletişim formumuzdan gelen bilgileri alıyoruz.
$adisoyadi=$_POST['name'];
$eposta=$_POST['email'];
$mesaj=$_POST['message'];
 
// $mail = new PHPMailer(); //ilgili PHPMailer class'ımızdan bir nesne türetiyoruz.
$mail->IsSMTP();
$mail->SMTPAuth = true; 
$mail->Host = 'smtp.gmail.com'; //SMTP için kullanılacak sunucu adresi
$mail->Port = 587; //TLS protokolünün kullanacağı port numarası
$mail->SMTPSecure = 'tls'; //kullanacağımız güvenlik protokolü SSL veya TLS olabilir.
$mail->Username = 'erraysen3@gmail.com'; //Email gönderecek adres
$mail->Password = 'cge544u9591_no172fb'; ////Email gönderecek adresin şifresi
$mail->SetFrom($mail->Username, 'Eray Şen');
$mail->AddAddress('eray.sen2@ogr.sakarya.edu.tr', '
'); //Bu emaili gideceği e-posta adresi
$mail->CharSet = 'UTF-8'; //Karakterlerin düzgün görünmesi için utf-8 ekliyoruz.
$mail->Subject ="Web sitesinin iletişim bölümünden mesaj var"; //emailimizin konusu

//email içeriğimiz
$icerik = "Gönderen:".$name.
 " E-mail:".$email.
 " Mesaj:".$message ;
 
$mail->MsgHTML($icerik);

//Artık emailimizi gönderiyoruz, yukarıdaki bilgilerde bir hata varsa bu satırda hata verecektir.
if($mail->Send()) {
     //E-posta gönderildi
     echo "Email başarıyla gönderildi";
} else {
    // Bir hata oluştu, hata mesajı yazdırıyoruz
    echo $mail->ErrorInfo;
}
 
?>