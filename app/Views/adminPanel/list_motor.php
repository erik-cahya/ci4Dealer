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
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin Panel / </span>List Penjualan Motor</h4>

      <!-- Basic Bootstrap Table -->
      <div class="card">
        <h5 class="card-header">List Motor</h5>
        <div class="table-responsive text-nowrap">
          <table class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Motor</th>
                <th>Nama Pemilik</th>
                <th>harga</th>
                <th>Status</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">

              <tr>
                <td>1</td>
                <td> <strong>ADV 150</strong></td>
                <td>Lorem Ipsum</td>
                <td>Rp. 25.000.000</td>

                <td><span class="badge bg-label-primary me-1">Live Product</span></td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">

                      <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                      <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                    </div>
                  </div>
                </td>
              </tr>


              <tr>
                <td>1</td>
                <td> <strong>PCX e:HEV</strong></td>
                <td>Kadek Bagus</td>
                <td>Rp. 45.000.000</td>

                <td><span class="badge bg-label-primary me-1">Live Product</span></td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">

                      <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                      <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                    </div>
                  </div>
                </td>
              </tr>


              <tr>
                <td>1</td>
                <td> <strong>Vario</strong></td>
                <td>Lily Siswani</td>
                <td>Rp. 15.000.000</td>

                <td><span class="badge bg-label-danger me-1">Sold Out</span></td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">

                      <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                      <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                    </div>
                  </div>
                </td>
              </tr>







            </tbody>
          </table>
          <br><br><br><br><br>
        </div>
      </div>
      <!--/ Basic Bootstrap Table -->
      <hr class="my-5" />
    </div>
    <!-- / Content -->
    <?= $this->endSection(); ?>