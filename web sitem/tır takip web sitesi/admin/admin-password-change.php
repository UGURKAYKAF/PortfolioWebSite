<?php
$headTitle = "Admin Şifre Değiştir";
?>
<?php include("partials/nav.php"); ?>

    <br><br><br>
    <div style="margin-left: 50px;">

        <h1  class="h2" style="margin-left: 20%;">Admin Şifre Değiştir</h1>
        <br><br>
       
        <br><br>
        <div style="width: 100%; display: flex; justify-content: center;">

            <form style="width: 20%;" action="" method="POST">
            <div class="form-group">
                <label for="eskiSifre">Eski Şifre</label>
                <input  type="password" class="form-control" id="eskiSifre" placeholder="Eski Şifrenizi Giriniz" name="eskiSifre" required>
                
            </div>
            <br>
            <div class="form-group">
                <label for="yeniSifre">Yeni Şifre</label>
                <input  type="password" class="form-control" id="yeniSifre" placeholder="Yeni Şifrenizi Giriniz" name="yeniSifre" required>
                
            </div>
            <br>
            <div class="form-group">
                <label for="yeniSifreTekrar">Yeni Şifre (Tekrar)</label>
                <input  type="password" class="form-control" id="yeniSifreTekrar" placeholder="Yeni Şifrenizi Giriniz (Tekrar)" name="yeniSifreTekrar" required>
                
            </div>
            <br>
            <button type="submit" class="btn btn-primary" name="submit">Sifre Değiştir</button>
        </form>
    </div>
    </div>

    <?php
      if(isset($_GET["id"]) && isset($_POST["submit"])){
        checkPostHtml();
        $id = $_GET["id"];
        $eskiSifre = md5($_POST["eskiSifre"]);
        $yeniSifre = md5($_POST["yeniSifre"]);
        $yeniSifreTekrar = md5($_POST["yeniSifreTekrar"]);

        $sql = "SELECT * FROM tbl_admin WHERE id=$id AND sifre='$eskiSifre'";

        if($res = mysqli_query($conn,$sql)){
            $count = mysqli_num_rows($res);
            if($count === 1){
                if($yeniSifre === $yeniSifreTekrar){
                    $sql2 = "UPDATE tbl_admin SET sifre='$yeniSifre' WHERE id=$id";
                    if($res2 = mysqli_query($conn,$sql2)){
                        $_SESSION["yeniSifre"] = "Şifre Başarıyla Değiştirildi";
                        header("location:".SITEURL."admin/admin-page.php");
                    }else{
                        $_SESSION["yeniSifre"] = "Şifre Değiştirme İşleminde Bir Hata Oluştu";
                        header("location:".SITEURL."admin/admin-page.php");
                    }
                }else{
                    $_SESSION["yeniSifreYanlis"] = "Girdiğiniz Yeni Şifre Uyuşmuyor";
                    header("location:".SITEURL."admin/admin-page.php");
                }
            }else{
                $_SESSION["kullaniciYok"] = "Kullanici Bulunamadı";
                header("location:".SITEURL."admin/admin-page.php");

            }
        }
    }
    ?>

<?php include("partials/footer.php"); ?>