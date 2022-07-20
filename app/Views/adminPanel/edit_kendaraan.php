<?= $this->extend('layouts/templateAdminPanel'); ?>
<?= $this->section('content'); ?>

<!-- Layout container -->
<div class="layout-page">

    <!-- Navbar -->
    <?= $this->include('components/navbarAdminPanel'); ?>
    <!-- /* Navbar -->

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->


        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin Panel /</span> Edit User</h4>

            <div class="row">
                <div class="col-md-12">

                    <div class="nav-align-top mb-4">
                        <ul class="nav nav-pills mb-3" role="tablist">
                            <li class="nav-item">
                                <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-home" aria-controls="navs-pills-justified-home" aria-selected="true">
                                    <i class="tf-icons bx bx-home"></i> Data Kendaraan
                                </button>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="navs-pills-justified-home" role="tabpanel">

                                <h5 class="card-header">Detail Kendaraan</h5>
                                <!-- Account -->
                                <div class="card-body">
                                    <div class="d-flex align-items-start align-items-sm-center gap-4">
                                        <img src="<?= base_url(); ?>/img/product/e-<?= $dataKendaraan['gambar_product']; ?>" alt="user-avatar" class="d-block rounded" height="350" width="350" id="uploadedAvatar" />
                                        <div class="button-wrapper">
                                            <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                                <span class="d-none d-sm-block">Upload new photo</span>
                                                <i class="bx bx-upload d-block d-sm-none"></i>
                                                <input type="file" id="upload" class="account-file-input" hidden accept="image/png, image/jpeg" />
                                            </label>

                                            <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-0" />
                                <div class="card-body">



                                    <form action="/panel/updateKendaraan/<?= $dataKendaraan["id_product"]; ?>" method="POST">
                                        <?= csrf_field(); ?>
                                        <div class="row">

                                            <div class="mb-3">
                                                <label class="form-label" for="namaKendaraan">Nama Kendaraan</label>
                                                <div class="input-group input-group-merge">
                                                    <span id="namaKendaraan" class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                                    <input type="text" class="form-control" id="namaKendaraan" name="namaKendaraan" value="<?= $dataKendaraan["nama_product"]; ?>" autofocus />
                                                </div>
                                            </div>

                                            <div class="mb-3 col-md-6">
                                                <label class="form-label" for="hargaKendaraan">Harga Kendaraan</label>
                                                <div class="input-group input-group-merge ">
                                                    <span id="hargaKendaraan" class="input-group-text"><i class="fa-solid fa-phone"></i></span>
                                                    <input type="text" id="hargaKendaraan" name="hargaKendaraan" class="form-control" value="<?= $dataKendaraan["harga_product"]; ?>" />
                                                </div>
                                            </div>

                                            <div class="mb-3 col-md-6">
                                                <label class="form-label" for="tahun">Tahun Kendaraan</label>
                                                <div class="input-group input-group-merge">
                                                    <span id="tahun" class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                                                    <input type="text" class="form-control" id="tahun" name="tahun" value="<?= $dataKendaraan["tahun"]; ?>" autofocus />
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="detailKendaraan">Detail Kendaraan</label>
                                                <div class="input-group input-group-merge">
                                                    <span id="detailKendaraan" class="input-group-text"><i class="fa-solid fa-location-dot"></i></span>
                                                    <textarea id="detailKendaraan" name="detailKendaraan" class="form-control" rows="6"><?= $dataKendaraan["detail_product"]; ?></textarea>
                                                </div>
                                            </div>

                                        </div>
                                        <button type=" submit" class="btn btn-primary">Save changes</button>
                                    </form>
                                </div>
                                <!-- /Account -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col">

                </div>
            </div>
        </div>

        <!-- /* Content -->






        <?= $this->endSection(); ?>