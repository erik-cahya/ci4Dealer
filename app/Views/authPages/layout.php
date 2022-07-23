<!DOCTYPE html>
<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="<?= base_url(); ?>/admin/assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title><?= $title; ?></title>
    <meta name="description" content="" />
    <link rel="icon" type="image/x-icon" href="<?= base_url(); ?>/admin/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="<?= base_url(); ?>/admin/assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/admin/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/admin/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/admin/assets/css/demo.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/admin/assets/vendor/css/pages/page-auth.css" />
    <script src="<?= base_url(); ?>/admin/assets/vendor/js/helpers.js"></script>
    <script src="<?= base_url(); ?>/admin/assets/js/config.js"></script>
</head>

<body>


    <!-- Content -->
    <?= $this->renderSection('content'); ?>
    <!-- / Content -->





    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="<?= base_url(); ?>/admin/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="<?= base_url(); ?>/admin/assets/vendor/libs/popper/popper.js"></script>
    <script src="<?= base_url(); ?>/admin/assets/vendor/js/bootstrap.js"></script>
    <script src="<?= base_url(); ?>/admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="<?= base_url(); ?>/admin/assets/vendor/js/menu.js"></script>
    <!-- Main JS -->
    <script src="<?= base_url(); ?>/admin/assets/js/main.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>