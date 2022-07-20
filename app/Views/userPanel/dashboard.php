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
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Seller /</span> Dashboard</h4>

            <div class="row row-cols-1 row-cols-md-3 g-4 mb-5">

                <div class="col">
                    <div class="card h-100">
                        <img class="card-img-top" src="<?= base_url(); ?>/admin/assets/img/elements/4.jpg" alt="Card image cap" />
                        <div class="card-body">
                            <div class="card-title">
                                <span class="card-title h5">Supra X 250 CC </span>
                                <span class="float-end badge bg-label-primary">Live Product</span>
                            </div>
                            <small class="text-muted">Rp. 25.000.000</small>
                            <p class="card-text mt-4">
                                This is a longer card with supporting text below as a natural lead-in to additional content.
                                This content is a little bit longer.
                            </p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Uploaded 20 Januari 2022</small>

                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow float-end" data-bs-toggle="dropdown">
                                <i class='bx bx-menu-alt-right'></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                            </div>
                        </div </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100">
                        <img class="card-img-top" src="<?= base_url(); ?>/admin/assets/img/elements/4.jpg" alt="Card image cap" />
                        <div class="card-body">
                            <div class="card-title">
                                <span class="card-title h5">Supra X 250 CC </span>
                                <span class="float-end badge bg-label-primary">Live Product</span>
                            </div>
                            <small class="text-muted">Rp. 25.000.000</small>
                            <p class="card-text mt-4">
                                This is a longer card with supporting text below as a natural lead-in to additional content.
                                This content is a little bit longer.
                            </p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Uploaded 20 Januari 2022</small>

                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow float-end" data-bs-toggle="dropdown">
                                <i class='bx bx-menu-alt-right'></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                            </div>
                        </div </div>
                    </div>

                </div>


                <!-- / Content -->




                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
        <!-- / Layout wrapper -->
        <?= $this->endSection();; ?>