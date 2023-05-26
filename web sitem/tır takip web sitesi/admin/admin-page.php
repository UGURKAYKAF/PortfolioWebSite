<?php
$headTitle = "Admin Sayfası";
?>


<?php include("partials/nav.php"); ?>
<br><br><br>
<div style="margin-left: 50px; margin-right: 50px;">
<h1  class="h2">Admin Ayarları</h1>

<a class="btn btn-primary" href="admin-ekle.php" role="button">Admin Ekle</a>
<br>
<br>
  <?php 
    sessionCheck("add",1);
    sessionCheck("delete",0);
    sessionCheck("update",0);
    sessionCheck("kullaniciYok",0);
    sessionCheck("yeniSifreYanlis",0);
    sessionCheck("yeniSifre",0);
  ?>

<div>
    <br>
<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">İsim</th>
      <th scope="col">Kullanıcı Adı</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
      <?php 

          $sql = "SELECT * FROM tbl_admin";
          if($res = mysqli_query($conn,$sql))
          {

            $count = mysqli_num_rows($res);
            $idSayisi = 1;

            if($count >0){

                while($rows = mysqli_fetch_assoc($res)){
                    $id = $rows["id"];
                    $isim = $rows["isim"];
                    $kullaniciAdi = $rows["kullanici_adi"];
                    ?>
                        <tr>
                          <th scope="row"><?= $idSayisi++ ?></th>
                          <td><?= $isim ?></td>
                          <td><?= $kullaniciAdi ?></td>
                          <td>
                            <a class="btn btn-primary" href="<?=SITEURL?>admin/admin-password-change.php?id=<?=$id?>" role="button">Şifre Değiştir</a>
                            <a class="btn btn-success" href="<?=SITEURL?>admin/admin-update.php?id=<?=$id?>" role="button">Güncelle</a>
                            <a class="btn btn-danger" href="<?=SITEURL?>admin/admin-delete.php?id=<?=$id?>" role="button">Sil</a></td>
                        </tr>
                    <?php 
                }

            }else{

            }
          }
      ?>

  </tbody>
</table>
</div>
</div>

<?php include("partials/footer.php"); ?>