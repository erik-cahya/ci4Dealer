<!-- Start Header Area -->
<header class="header_area sticky-header">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light main_box">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="/"><img src="img/fav.png" alt="">
                    <label class=" brandLabel ml-2">MotoShop</label>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item <?= ($title === "MotoShop | Dashboard") ? 'active' : ' ' ?>"><a class="nav-link" href="<?= base_url(); ?>/">Home</a></li>

                        <!-- Produk -->
                        <li class="nav-item submenu dropdown <?= ($title === "MotoShop | Product") ? 'active' : '' ?>">
                            <a href="#" class="nav-link dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true">Produk</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="<?= base_url(); ?>/product">Motor</a></li>
                            </ul>
                        </li>
                        <li class="nav-item <?= ($title === "MotoShop | About") ? 'active' : '' ?>"><a class="nav-link" href="<?= base_url(); ?>/about">Tentang Kami</a></li>
                        <li class="nav-item <?= ($title === "MotoShop | Form Penjualan") ? 'active' : '' ?>"><a class="nav-link" href="<?= base_url(); ?>/penjualan">Form Penjualan</a></li>

                    </ul>
                    <ul class="nav navbar-nav navbar-right mt-2">
                        <li></li>
                        <li class="nav-item ">
                            <a class="primary-btn mr-2" href="<?= base_url(); ?>/login">Login</a>
                            <a class="primary-btn mr-2" href="<?= base_url(); ?>/register">Register</a>

                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<!-- End Header Area -->