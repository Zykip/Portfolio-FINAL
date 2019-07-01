<?php
    require_once("../vendor/autoload.php");
    require_once("../private/assets/User.php");
    require_once("../private/assets/Connection.php");

    $bdd = new Connection("dbs110474", "dbu182479", "Azerty^^12");
?>

<!DOCTYPE html>
<html lang="en">
    
    <?php
        require_once("../private/website/head.php");
    ?>

<body class="dark-vertion black-bg">
    
        <?php
            require_once("../private/website/nav.php");
            require_once("../private/website/home.php");
            require_once("../private/website/about.php");
            require_once("../private/website/services.php");
            require_once("../private/website/project-slider.php");
            require_once("../private/website/skills.php");
            require_once("../private/website/footer.php");
        ?>

 <script src="assets/plugins/js/jquery.min.js"></script>
    <!-- popper -->
    <script src="assets/plugins/js/popper.min.js"></script>
    <!-- bootstrap -->
    <script src="assets/plugins/js/bootstrap.min.js"></script>
    <!-- owl carousel -->
    <script src="assets/plugins/js/owl.carousel.js"></script>
    <!-- validator -->
    <script src="assets/plugins/js/validator.min.js"></script>
    <!-- wow -->
    <script src="assets/plugins/js/wow.min.js"></script>
    <!-- mixin js-->
    <script src="assets/plugins/js/jquery.mixitup.min.js"></script>
    <!-- circle progress-->
    <script src="assets/plugins/js/circle-progress.js"></script>
    <!-- jquery nav -->
    <script src="assets/plugins/js/jquery.nav.js"></script>
    <!-- Fancybox js-->
    <script src="assets/plugins/js/jquery.fancybox.min.js"></script>
    <!-- Map api -->
    <!-- <script src="//maps.googleapis.com/maps/api/js?v=3.exp&amp;key=AIzaSyCRP2E3BhaVKYs7BvNytBNumU0MBmjhhxc"></script> -->
    <!-- isotope js-->
    <script src="assets/plugins/js/isotope.pkgd.js"></script>
    <script src="assets/plugins/js/packery-mode.pkgd.js"></script>
    <!-- Custom Scripts-->
    <!-- <script src="assets/js/map-init.js"></script> -->
    <script src="assets/js/custom-scripts.js"></script>

    </body>
</html>
