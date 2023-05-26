<?php
include "partials/head.php";

?>


<div class="background">
  <div class="background-layer">
    <div class="container">
      <div class="container-background">
        <div class="giris">
          <a style="display: flex; align-items: center;">
            <img src="https://flowbite.com/docs/images/logo.svg" alt="">
            <span style="padding-left: 5px;">Kolay İş</span>
          </a>
          <form action="" method="post">
            <label>
              <p>Email</p>
              <input type="email" name="mail" id="">
            </label>
            <label>
              <p>Şifre</p>
              <input type="password" name="sifre" id="">
            </label>
            <p>
              <input class="button" type="submit" name="submit" value="Giriş Yap" formaction="mainpage.html">
            </p>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
include "partials/footer.php";
?>