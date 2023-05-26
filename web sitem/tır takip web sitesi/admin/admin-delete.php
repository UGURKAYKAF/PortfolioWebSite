<?php
    include "../config/constants.php";

    $id = $_GET["id"];
    $sql = "DELETE FROM tbl_admin WHERE id=$id";
    
    if($res = mysqli_query($conn,$sql)){

        $_SESSION["delete"] = "Admin Silindi";
        header("location:".SITEURL."admin/admin-page.php");
        
    }else{
        
        $_SESSION["delete"] = "Admin Silmede Hata Oluştu";
        header("location:".SITEURL."admin/admin-page.php");
    }

?>