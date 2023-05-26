<?php
$headTitle = "Admin Ekle";
?>


<?php include("partials/nav.php"); ?>


<br><br><br>
<div style="margin-left: 50px;">

    <h1  class="h2" style="margin-left: 20%;">Admin Ekle</h1>
    <br><br>
    <?php  if(isset($_SESSION["add"])){
        echo "<div class='p-3 mb-2 bg-danger text-white text-center'>".$_SESSION["add"]."</div>";
        unset($_SESSION["add"]);
    } ?>
    <br><br>
    <div style="width: 100%; display: flex; justify-content: center;">

        <form style="width: 20%;" action="" method="POST">
        <div class="form-group">
            <label for="isim">İsim</label>
            <input type="text" class="form-control" id="isim" placeholder="İsminizi Giriniz" name="isim" required>
            
        </div>
        <br>
        <div class="form-group">
            <label for="kullanici">Kullanıcı Adı</label>
            <input type="text" class="form-control" id="kullanici" placeholder="Kullanıcı Adınızı Giriniz" name="kullaniciAdi" required>
            
        </div>
        <br>
        <div class="form-group">
            <label for="sifre">Şifre</label>
            <input type="password" class="form-control" id="sifre" placeholder="Şifrenizi Giriniz" name="sifre" required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary" name="submit">Admin Ekle</button>
    </form>
</div>
</div>

<?php include("partials/footer.php"); ?>

<!-- Veri Tabanı -->
<?php

if(isset($_POST["submit"])){
    checkPostHtml();
    $isim = $_POST["isim"];
    $kullaniciAdi = $_POST["kullaniciAdi"];
    $sifre = md5($_POST["sifre"]);

    $sql = "INSERT INTO tbl_admin SET
        isim='$isim',
        kullanici_adi='$kullaniciAdi',
        sifre='$sifre'";
    
    $res = mysqli_query($conn,$sql);

    if($res === true){
        //echo "veri eklendi";

        $_SESSION["add"] = "Admin Eklendi";

        header("location:".SITEURL."admin/admin-page.php");

    }else{
        $_SESSION["add"] = "Admin Eklemede Hata Oluştu";

        header("location:".SITEURL."admin/admin-ekle.php");
    }
    
}

?>