<?php 
define("SAYFALAR",
[
    'index' => "sayfalar/index.php",
    'iletisim' => "sayfalar/iletisim.php",
    'hakkimda' => "sayfalar/hakkimda.php",
    'faaliyet_alanlari' => "sayfalar/faaliyet_alanlari.php",
    'blog' => "sayfalar/blog.php",
    'blog_tek' => "sayfalar/blog_tek.php",
    'bulunamadi' => "sayfalar/bulunamadi.php",

]);
$sayfa = $_GET['sayfa'] ?? "index";
?>
<!doctype html>
<html class="no-js" lang="zxx">

<?php
 include_once "tema/head.php";
?>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <?php
    include_once "tema/header.php";
    ?>
    <!-- header-end -->

    <?php
        include_once SAYFALAR[$sayfa] ?? "sayfalar/bulunamadi.php";
    ?>
     

    <!-- footer_start -->
    <?php include_once "tema/footer.php";?>
    <!-- footer_end -->

    <?php include_once "tema/footer_script.php";?>

</body>

</html>