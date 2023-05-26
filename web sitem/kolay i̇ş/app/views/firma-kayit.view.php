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
              <p>Firma Adı</p>
              <input type="text" required>
            </label>
            <label>
              <p>MERSİS Numarası</p>
              <input type="text" required>
            </label>
            <label>
              <p>Şirket Kuruluş Tarihi</p>
              <input type="date" name="dogumTarihi" required>
            </label>
            <label>
              <p>Firma Email Adresi</p>
              <input type="email" name="mail" required>
            </label>
            <label>
              <p>Firma Şifresi</p>
              <input type="password" name="sifre" required>
            </label>
            <p>
              <input class="button" type="submit" name="submit" value="Firmayı Kayıt Et" formaction="giris.html">
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