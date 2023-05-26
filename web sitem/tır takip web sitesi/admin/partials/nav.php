<?php include("../config/constants.php"); ?>
<?php include("admin-functions.php") ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $headTitle; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <style>
        .admin-nav-css ul {
            display: flex;
            flex-direction: row;
            width: 60%;
        }

        .admin-nav-css li {
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-dark bg-dark fixed-top text-white">
        <div class="container justify-content-md-center admin-nav-css">
            <ul class="navbar-nav mr-auto">
                <li><a href="index.php" class="nav-link nav-item <?php if (cssActivePage("index.php")) {
                                                                        echo "active";
                                                                    } ?>">Ana Sayfa</a></li>
                <li><a href="admin-page.php" class="nav-link nav-item <?php if (cssActivePage("admin-page.php")) {
                                                                            echo "active";
                                                                        } ?>">Admin</a></li>
                <li><a href="admin-list.php" class="nav-link nav-item <?php if (cssActivePage("admin-list.php")) {
                                                                            echo "active";
                                                                        } ?>">Listeler</a></li>
            </ul>
        </div>

    </nav>