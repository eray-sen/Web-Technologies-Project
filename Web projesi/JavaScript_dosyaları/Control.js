function ControlForm() {
  var name = document.getElementById("name").value;
  if (name == "") {
    // document.querySelector('.status').innerHTML = "Name cannot be empty";
    alert("Ad - soy ad boş bırakılamaz!");
    return false;
  }
  var email = document.getElementById("email").value;
  if (email == "") {
    // document.querySelector(".status").innerHTML = "Email cannot be empty";
    alert("E-mail boş bırakılamaz!");
    return false;
  } else {
    var re =
      /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (!re.test(email)) {
      //   document.querySelector(".status").innerHTML = "Email format invalid";
      alert("E-mail geçerli formatta değil!");
      return false;
    }
  }
  var message = document.getElementById("message").value;
  if (message == "") {
    // document.querySelector(".status").innerHTML = "Message cannot be empty";
    alert("Mesaj kısmı boş bırakılamaz!");
    return false;
  }
  //   document.querySelector(".status").innerHTML = "Mesajınız Gönderiliyor...";
  alert("Mesajınız Gönderildi, Desteğiniz İçin Teşekkürler.");
}
