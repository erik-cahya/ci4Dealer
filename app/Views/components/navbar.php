<!-- Start Header Area -->
<header class="header_area sticky-header">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light main_box">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="/"><img src="<?= base_url(); ?>/img/fav.png" alt="">
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
                        <li class="nav-item <?= ($title === "MotoShop | Dashboard") ? 'active' : ' ' ?>"><a class="nav-link" href="<?= base_url("/"); ?>">Home</a></li>

                        <!-- Produk -->

                        <li class="nav-item <?= ($title === "MotoShop | Product") || ($title === "MotoShop | Detail Product") ? 'active' : '' ?>"><a class="nav-link" href="<?= base_url("/product"); ?>">Produk</a></li>


                    </ul>
                    <ul class="nav navbar-nav navbar-right mt-2">
                        <li></li>
                        <li class="nav-item ">
                            <?php if (session()->get("usernameSession") == null) : ?>
                                <a class="primary-btn mr-4" href="<?= base_url("/login"); ?>">Login</a>
                            <?php else : ?>
                                <a class="primary-btn mr-4" href="<?= base_url("/logout"); ?>">Logout</a>
                            <?php endif; ?>


                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<!-- End Header Area -->