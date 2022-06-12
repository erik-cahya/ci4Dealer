<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<!-- start banner Area -->
<section class="banner-area">
    <div class="container">
        <div class="row fullscreen align-items-center justify-content-start">
            <div class="col-lg-12">
                <!-- single-slide -->
                <div class="row single-slide align-items-center d-flex">
                    <div class="col-md-6">
                        <div class="banner-content">
                            <h1>Pasarkan Motor Anda Dengan Cepat & Mudah</h1>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt quibusdam repellendus
                                dolorum totam iste quos id magnam quidem debitis aliquid deserunt culpa molestias, a
                                cum ab saepe aliquam voluptas architecto cumque sed, magni corporis, ratione
                                doloribus? Labore totam magni debitis earum nostrum, enim nam, explicabo voluptates
                                delectus mollitia harum. Tempore.</p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="banner-img">
                            <img class="img-fluid" src="img/myImg/header.svg" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- start product Area -->
<section class="mt-4">
    <!-- single product slide -->
    <div class="single-product-slider">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title">
                        <h1>Produk Kami</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore etdolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="row">

                <!-- Fake Data -->
                <?php
                $product = [
                    [
                        "judul" => "Honda Supra X 125 FI",
                        "harga" => 36180000
                    ],
                    [
                        "judul" => "Honda Supra GTR 150",
                        "harga" => 36180000
                    ],
                    [
                        "judul" => "Honda New Revo X",
                        "harga" => 40880000
                    ],
                    [
                        "judul" => "Honda BeAT Street",
                        "harga" => 61700000
                    ],
                    [
                        "judul" => "Honda SH 150i",
                        "harga" => 66200000
                    ],
                    [
                        "judul" => "Honda Forza",
                        "harga" => 72080000
                    ],
                    [
                        "judul" => "Honda ADV 150",
                        "harga" => 72800000
                    ],
                    [
                        "judul" => "Honda PCX E:HEV",
                        "harga" => 30700000
                    ],
                    [
                        "judul" => "Honda CB150 Verza",
                        "harga" => 23680000
                    ]

                ];

                ?>
                <?php $number = 1; ?>
                <?php foreach ($product as $pr) : ?>

                    <!-- set format number currency -->
                    <?php
                    $harga = "Rp." . number_format($pr["harga"], 2, ',', '.');
                    $diskon = $pr["harga"] * 50 / 100;
                    $diskon = "Rp." . number_format($diskon, 2, ',', '.');
                    ?>
                    <!-- single product -->
                    <div class="col-lg-3 col-md-6">
                        <div class="single-product">
                            <img class="img-fluid" src="img/product/e-p<?= $number++ ?>.png" alt="">
                            <div class="product-details">
                                <h6><?= $pr["judul"]; ?></h6>
                                <div class="price">
                                    <h6><?= $diskon; ?></h6>
                                    <h6 class="l-through"><?= $harga; ?></h6>
                                </div>
                                <div class="prd-bottom">
                                    <a href="#" class="social-info">
                                        <span class="ti-bag"></span>
                                        <p class="hover-text">View Product</p>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>



            </div>
        </div>
    </div>

</section>
<!-- end product Area -->

<!--================Contact Area =================-->
<section class="contact_area section_gap_bottom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="section-title">
                    <h1>Contact & Location</h1>
                    <p>Dealer kami berada di pusat kota Denpasar, Bali</p>
                </div>
            </div>
        </div>
        <div class="row row justify-content-center mb-4">
            <div class="col-lg-12">
                <div class="embed-responsive embed-responsive-16by9 ">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d246.51192586191996!2d115.22638475126163!3d-8.673396309172727!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd240f24881c587%3A0xe8413f111e0aa096!2sInstitut%20Teknologi%20Dan%20Bisnis%20STIKOM%20BALI!5e0!3m2!1sid!2sid!4v1654358853514!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="contact_info">
                    <div class="info_item">
                        <i class="lnr lnr-home"></i>
                        <h6>Denpasar, Bali Indonesia</h6>
                        <p>Jln. Tukad Badung XIV B</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="contact_info">
                    <div class="info_item">
                        <i class="lnr lnr-phone-handset"></i>
                        <h6><a href="#">+62 895 2264 8527</a></h6>
                        <p>Senin - Sabtu 09:00 - 18:00</p>
                    </div>

                </div>

            </div>

            <div class="col-md-4">
                <div class="contact_info">
                    <div class="info_item">
                        <i class="lnr lnr-envelope"></i>
                        <h6><a href="#">erikcp38@gmail.com</a></h6>
                        <p>Kirimkan pertanyaan anda kapan saja!</p>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>
<!--================Contact Area =================-->

<?= $this->endSection(); ?>