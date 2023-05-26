<?php
$headTitle = "Admin Guncelle";
?>
<?php include("partials/nav.php"); ?>

    <br><br><br>
    <div style="margin-left: 50px;">

        <h1  class="h2" style="margin-left: 20%;">Admin Guncelle</h1>
        <br><br>
       <?php
            $id = $_GET["id"];
            $sql = "SELECT * FROM tbl_admin WHERE id=$id";

            if($res = mysqli_query($conn,$sql)){
                    $count = mysqli_num_rows($res);

                    if($count === 1){
                            $row = mysqli_fetch_assoc($res);
                            $kullaniciAdi = $row["kullanici_adi"];
                            $isim = $row["isim"];
                    }else{
                        header("location:".SITEURL."admin/admin-page.php");
                    }
            }
       ?>
        <br><br>
        <div style="width: 100%; display: flex; justify-content: center;">

            <form style="width: 20%;" action="" method="POST">
            <div class="form-group">
                <label for="isim">İsim</label>
                <input value="<?=$isim?>" type="text" class="form-control" id="isim" placeholder="İsminizi Giriniz" name="isim" required>
                
            </div>
            <br>
            <div class="form-group">
                <label for="kullanici">Kullanıcı Adı</label>
                <input value="<?=$kullaniciAdi?>" type="text" class="form-control" id="kullanici" placeholder="Kullanıcı Adınızı Giriniz" name="kullaniciAdi" required>
                
            </div>
            <br>
            <button type="submit" class="btn btn-primary" name="submit">Admin Guncelle</button>
        </form>
    </div>
    </div>

    <?php
        if(isset($_POST["submit"])){
            checkPostHtml();
            echo $id;
            $isim = $_POST["isim"];
            $kullaniciAdi = $_POST["kullaniciAdi"];
            
            $sql = "UPDATE tbl_admin SET
            isim='$isim',
            kullanici_adi='$kullaniciAdi' WHERE id='$id'";

            if($res = mysqli_query($conn,$sql)){

                $_SESSION["update"] = "Admin Guncellendi";
                header("location:".SITEURL."admin/admin-page.php");
            }else{
                $_SESSION["update"] = "Admin Guncellemede Bir Hata Olustu";
                header("location:".SITEURL."admin/admin-page.php");
            }
        }
    ?>



<?php include("partials/footer.php"); ?>