<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Site Title -->
    <title><?= $title; ?></title>

    <!-- CDN Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <!-- Bootstap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <!-- CSS ============================================= -->
    <link rel="stylesheet" href="<?= base_url(); ?>/css/linearicons.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/owl.carousel.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/nice-select.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/nouislider.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/ion.rangeSlider.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/css/ion.rangeSlider.skinFlat.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/css/magnific-popup.css">

    <link rel="stylesheet" href="<?= base_url(); ?>/css/main.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/main2.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/util.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/fonts/iconic/css/material-design-iconic-font.min.css">
</head>

<body>

    <?= $this->include('components/navbar'); ?>
    <?= $this->renderSection('content'); ?>
    <?= $this->include('components/footer'); ?>


    <!-- Resource JavaScript -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
    <script src='https://npmcdn.com/isotope-layout@3.0.6/dist/isotope.pkgd.js'></script>
    <!-- <script src="js/vendor/jquery-2.2.4.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="<?= base_url(); ?>/js/vendor/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>/js/jquery.ajaxchimp.min.js"></script>
    <script src="<?= base_url(); ?>/js/jquery.nice-select.min.js"></script>
    <script src="<?= base_url(); ?>/js/jquery.sticky.js"></script>
    <script src="<?= base_url(); ?>/js/nouislider.min.js"></script>
    <script src="<?= base_url(); ?>/js/countdown.js"></script>
    <script src="<?= base_url(); ?>/js/jquery.magnific-popup.min.js"></script>
    <script src="<?= base_url(); ?>/js/owl.carousel.min.js"></script>


    <!-- <script src="js/vendor/isotope/isotope.pkgd.min.js"></script> -->


    <!--gmaps Js-->

    <script src="<?= base_url(); ?>/js/main.js"></script>
    <script src="<?= base_url(); ?>/js/maincoza.js"></script>
</body>

</html>