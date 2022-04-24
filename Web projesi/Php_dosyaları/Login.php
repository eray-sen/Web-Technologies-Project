<?php include"Kontrol.php";
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../Css_dosyaları/Login.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    />
    <style>

body {
    width: 50%;
    margin-left:25%;
    margin-top:15%;

  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  background-image: url("https://resim.haber61.net/upload/old/20190213_2_34900339_41611777_Web.jpg");
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
.card {
  overflow: hidden;
  border: 2px;
  border-radius: 20px;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.711);
}
.row {
  width: 90%;
}
.card-body {
  padding: 2rem;
}
.title {
  margin-bottom: 2rem;
  font-family: Ubuntu;
  font-style: oblique;
  margin-left:25%;
}
.form-input {
  position: relative;
}
.form-input input {
  width: 80%;
  height: 45px;
  padding-left: 40px;
  margin-bottom: 20px;
  margin-left:10%;
  box-sizing: border-box;
  box-shadow: none;
  border: 1px solid #00000020;
  border-radius: 50px;
  outline: none;
  background: transparent;
}
.form-input span {
  position: absolute;
  top: 10px;
  padding-left: 15px;
  color: #007bff;
}
.form-input input::placeholder {
  color: rgba(0, 0, 0, 0.286);
  padding-left: 0px;
}
.form-input input:focus,
.form-input input:valid {
  border: 2px solid;
}
.form-input input:focus::placeholder {
  color: #454b69;
}
.custom-checkbox .custom-control-input:checked ~ .custom-control-label::before {
  background-color: #002fff !important;
  border: 0px;
}
.form-box button[type="submit"] {
  border: none;
  border-radius: 50px;
  background: #002fff;
  color: #fff;
  font-size: 90%;
  font-weight: bold;
  letter-spacing: 0.1rem;
  transition: 0.5s;
  padding-left: 70px;
  padding-right: 70px;
  padding-top: 12px;
  padding-bottom: 12px;
}
.form-box button[type="submit"]:hover {
  background-color: #4eccac;
  color: #0a2f74;
  cursor: pointer;
}
</style>
    <title>Login Form</title>
  </head>
  <body>
    <div class="container">
      <div class="row px-3">
        <div class="col-lg-10 col-xl-9 card flex-row mx-auto px-0">

          <div class="card-body">
            <h2 class="title tex-center mt-4">Hoş Geldiniz</h2>

            <form action=<?php echo htmlspecialchars("Kontrol.php") ?> method="POST" class="form-box px-3"> 
              <div class="form-input">
                <span><i class="fa-solid fa-envelope"></i></span>
                <input
                  type="email"
                  placeholder="E-mail Adresiniz"
                  name="email"
                  tabindex="10"
                  required
                  autocomplete="off"
                />
              </div>

              <div class="form-input">
                <span><i class="fa fa-key"></i></span>
                <input
                  type="password"
                  name="password"
                  placeholder="Şifreniz"
                  required
                />
              </div>
              <div class="mb-3"></div>
              <div class="d-flex justify-content-center">
                <button
                  type="submit"
                  class="btn btn-block text-uppercase"
                  name="btn"
                >
                  Giriş Yap
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script> -->
  </body>
</html>
