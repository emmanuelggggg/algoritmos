<?php
    include_once "app/Config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "layouts/head.template.php"?>
    <title>Home | algoritmos </title>
    
</head>
<body data-sidebar="dark" data-layout-mode="light">
    <div id="layout-wrapper">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                

                <a href="index.php" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="<?= BASE_PATH?>public/assets/images/logo-light.svg" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="<?= BASE_PATH?>public/assets/images/logo-light.png" alt="" height="19">
                    </span>
                </a>
            </div>
        </div>

        <?php include_once "layouts/sidebarMenu.template.php"?>
    </div>   
        
    <?php include "layouts/scripts.template.php" ?>
</body>
</html>