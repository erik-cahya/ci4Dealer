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

<!--================Contact Area =================-->
<section class="contact_area section_gap_bottom mt-4">
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
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d301.74178806913113!2d115.22370758552117!3d-8.675893136236466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd240ee18590569%3A0x8b343efb25cb3b29!2sGg.%20XVII%20No.25%2C%20Panjer%2C%20Denpasar%20Selatan%2C%20Kota%20Denpasar%2C%20Bali%2080234!5e0!3m2!1sid!2sid!4v1655047667532!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="contact_info">
                    <div class="info_item">
                        <i class="lnr lnr-home"></i>
                        <h6>Denpasar, Bali Indonesia</h6>
                        <p>Gg. XVII No.25, Panjer, Denpasar Selatan, <br>Kota Denpasar, Bali 80234</p>
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