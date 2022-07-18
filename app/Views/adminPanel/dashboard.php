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
      <div class="row">

        <div class="col-4 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="card-title d-flex align-items-start justify-content-between">
                <div class="avatar flex-shrink-0">
                  <img src="<?= base_url(); ?>/admin/assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded" />
                </div>
                <div class="dropdown">
                  <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                    <a class="dropdown-item" href="javascript:void(0);">View More</a>
                  </div>
                </div>
              </div>
              <span class="fw-semibold d-block mb-1">Total Seller</span>
              <h3 class="card-title mb-2"><?= $countUser; ?></h3>
            </div>
          </div>
        </div>

        <div class="col-4 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="card-title d-flex align-items-start justify-content-between">
                <div class="avatar flex-shrink-0">
                  <img src="<?= base_url(); ?>/admin/assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded" />
                </div>
                <div class="dropdown">
                  <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                    <a class="dropdown-item" href="javascript:void(0);">View More</a>
                  </div>
                </div>
              </div>
              <span class="fw-semibold d-block mb-1">Total Produk </span>
              <h3 class="card-title mb-2"><?= $countProduct; ?></h3>
            </div>
          </div>
        </div>

        <div class="col-4 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="card-title d-flex align-items-start justify-content-between">
                <div class="avatar flex-shrink-0">
                  <img src="<?= base_url(); ?>/admin/assets/img/icons/unicons/wallet.png" alt="User" class="rounded" />
                </div>
                <div class="dropdown">
                  <button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                    <a class="dropdown-item" href="javascript:void(0);">View More</a>

                  </div>
                </div>
              </div>
              <span class="d-block mb-1">Total Penjualan</span>
              <h3 class="card-title text-nowrap mb-2">6</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 col-12">
          <div class="card">
            <h5 class="card-header">Users</h5>
            <div class="card-body">


              <?php foreach ($dataUser as $user) : ?>
                <div class="d-flex mb-3">
                  <div class="flex-shrink-0">
                    <img src="<?= base_url(); ?>/admin/assets/img/avatars/<?= $user["avatar"]; ?>" alt="facebook" class="me-3 rounded-circle" height="40" />
                  </div>
                  <div class="flex-grow-1 row">
                    <div class="col-8 col-sm-7 mb-sm-0 mb-2">
                      <h6 class="mb-0"><?= $user["nama_user"]; ?></h6>
                      <small class="text-muted">Active User</small>
                    </div>
                    <div class="col-4 col-sm-5 text-end">
                      <button type="button" class="btn btn-icon btn-outline-warning">
                        <i class="bx bxs-edit-alt"></i>
                      </button>
                      <button type="button" class="btn btn-icon btn-outline-danger">
                        <i class="bx bx-trash-alt"></i>
                      </button>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>




              <!-- /Social Accounts -->
            </div>
          </div>
        </div>

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