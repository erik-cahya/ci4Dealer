<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Form Penjualan</h1>
                <nav class="d-flex align-items-center">
                    <a href="/">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="/product">Form Penjualan</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!--================Checkout Area =================-->
<section class="checkout_area section_gap">
    <div class="container">

        <div class="billing_details">
            <div class="row justify-content-center  ">
                <div class="col-lg-8">
                    <h3>Form Penjualan Motor</h3>
                    <form class="row contact_form" action="#" method="post" novalidate="novalidate">
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" id="first" name="name">
                            <span class="placeholder" data-placeholder="First name"></span>
                        </div>

                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" id="last" name="name">
                            <span class="placeholder" data-placeholder="Last name"></span>
                        </div>

                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="productPrice" name="productPrice" placeholder="Harga Barang ">
                        </div>

                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="productName" name="productName" placeholder="Nama Barang">
                        </div>

                        <div class="col-md-12 form-group">
                            <textarea class="form-control" name="message" id="message" rows="1" placeholder="Alamat"></textarea>
                        </div>

                        <div class="col-md-6 form-group p_star">
                            <label for="uploadImage" class="mr-3">Upload File</label>
                            <input type="file" id="uploadImage" name="uploadImage">
                        </div>

                        <div class="col-md-12 form-group p_star">
                            <a class="tp_btn" href="#">Submit Data</a>
                        </div>


                    </form>
                </div>

            </div>
        </div>
    </div>
</section>
<!--================End Checkout Area =================-->


<?= $this->endSection(); ?>