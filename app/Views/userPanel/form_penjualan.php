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
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Seller /</span> Ajukan Penjualan</h4>

            <!-- Card layout -->
            <div class="card mb-4">
                <h5 class="card-header">Profile Details</h5>
                <!-- Account -->
                <div class="card-body">
                    <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <img src="<?= base_url(); ?>/img/product/e-p1.png" alt="product-image" class="d-block rounded" height="200" width="200" id="uploadedAvatar" />

                        <div class="button-wrapper">
                            <label for="upload" class="btn btn-primary mb-4" tabindex="0">
                                <span class="d-none d-sm-block">Upload Image</span>
                                <i class="bx bx-upload d-block d-sm-none"></i>
                                <input type="file" id="upload" class="account-file-input" hidden accept="image/png, image/jpeg" />
                            </label>
                        </div>
                    </div>
                </div>
                <hr class="my-0" />
                <div class="card-body">

                    <form id="formAccountSettings" method="POST" onsubmit="return false">
                        <div class="row">
                            <div class="mb-3 col-md-12">
                                <label for="firstName" class="form-label">Nama Pemilik</label>
                                <input class="form-control" type="text" id="firstName" name="firstName" placeholder="Nama Pemilik Kendaraan" autofocus />
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="address" class="form-label">Nama Kendaraan</label>
                                <input type="text" class="form-control" id="address" name="address" placeholder="Masukkan Nama Kendaraan" />
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="state" class="form-label">Tahun Kendaraan</label>
                                <input class="form-control" type="text" id="state" name="state" placeholder="Masukkan Tahun Kendaraan" />
                            </div>

                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="phoneNumber">Harga Kendaraan</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text">Rp. </span>
                                    <input type="text" id="phoneNumber" name="phoneNumber" class="form-control" />
                                </div>
                            </div>

                            <div class=" mb-3 col-md-6">
                                <label class="form-label" for="phoneNumber">Nomor Telepon</label>
                                <input type="text" id="phoneNumber" name="phoneNumber" class="form-control" placeholder="Masukkan Nomor Telepon" />
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-message">Address</label>
                                <textarea id="basic-default-message" class="form-control" placeholder="Masukkan Alamat Lengkap"></textarea>
                            </div>
                        </div>
                        <div class="mt-2">
                            <button type="submit" class="btn btn-primary me-2">Save changes</button>
                            <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                        </div>
                    </form>
                </div>
                <!-- /Account -->
            </div>

            <!-- Card Groups -->


        </div>
        <!-- / Content -->


        <div class="content-backdrop fade"></div>
    </div>
    <!-- Content wrapper -->
</div>
<!-- / Layout page -->
<!-- / Layout wrapper -->
<?= $this->endSection();; ?>