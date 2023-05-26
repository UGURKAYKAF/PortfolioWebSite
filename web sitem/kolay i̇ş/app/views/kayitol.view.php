<?php
include "partials/head.php";

?>

<div class="background">
  <div class="background-layer">
    <div class="container">
      <div class="container-background">
        <div class="kayit">
          <a style="display: flex; align-items: center;">
            <img src="https://flowbite.com/docs/images/logo.svg" alt="">
            <span style="padding-left: 5px;">Kolay İş</span>
          </a>
          <form action="" method="post">
            <label>
              <p>İsim</p>
              <input type="text" required>
            </label>
            <label>
              <p>Soyisim</p>
              <input type="text" required>
            </label>
            <label>
              <p>Doğum Tarihi</p>
              <input type="date" name="dogumTarihi" required>
            </label>
            <label>
              <p>Email</p>
              <input type="email" name="mail" required>
            </label>
            <label>
              <p>Cinsiyet</p>
              <label>
                <input value="erkek" type="radio" name="cinsiyet" required>
                Erkek
              </label>
              <label>
                <input value="kadin" type="radio" name="cinsiyet">
                Kadın
              </label>
              <p>Şifre</p>
              <input type="password" name="sifre" required>
            </label>
            <p>
              <input class="button" type="submit" name="submit" value="Kayıt Ol" formaction="giris.html">
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