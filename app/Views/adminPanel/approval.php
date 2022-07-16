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
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin Panel / </span>Approval Order Kendaraan</h4>

      <!-- Accordion -->
      <h5 class="mt-4">Form Penjualan</h5>
      <div class="row">
        <div class="col-md mb-4 mb-md-0">
          <div class="accordion mt-3" id="accordionExample">

            <div class="card accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionTwo" aria-expanded="false" aria-controls="accordionTwo">
                  Erik Cahya Pradana
                </button>
              </h2>
              <div id="accordionTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">ADV 150 XG</h5>
                      <p class="badge bg-label-warning me-1 float-end">Pending</p>
                    </div>
                    <div class="text-center">
                      <img src="<?= base_url(); ?>/admin/assets/img/elements/13.jpg" class="rounded" alt="product-image" width="280px">
                    </div>
                    <div class="card-body">
                      <form>
                        <div class="row">

                          <div class="mb-3 col-md-12">
                            <label for="firstName" class="form-label">Nama Pembeli</label>
                            <input class="form-control" type="text" id="firstName" name="firstName" value="" autofocus />
                          </div>

                          <div class="mb-3 col-md-12">
                            <label for="firstName" class="form-label">Nama Kendaraan</label>
                            <input class="form-control" type="text" id="firstName" name="firstName" value="" autofocus />
                          </div>

                          <div class="mb-3 col-md-6">
                            <label class="form-label" for="phoneNumber">Harga Kendaraan</label>
                            <div class="input-group input-group-merge">
                              <span class="input-group-text">Rp. </span>
                              <input type="text" id="phoneNumber" name="phoneNumber" class="form-control" />
                            </div>
                          </div>

                          <div class="mb-3 col-md-6">
                            <label for="organization" class="form-label">Tahun Kendaraan</label>
                            <input type="text" class="form-control" id="organization" name="organization" value="" />
                          </div>


                          <div class="mb-3 col-md-6">
                            <label for="organization" class="form-label">No Telepon Pembeli</label>
                            <input type="text" class="form-control" id="organization" name="organization" value="" />
                          </div>

                          <div class="mb-3 col-md-6">
                            <label for="address" class="form-label">E-Mail</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="Address" />
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-message">Alamat</label>
                          <textarea id="basic-default-message" class="form-control" placeholder="Hi, Do you have a moment to talk Joe?"></textarea>
                        </div>
                        <button type="submit" class="btn btn-outline-primary">Approve</button>
                        <button type="submit" class="btn btn-outline-danger">Reject</button>
                      </form>

                    </div>
                  </div>
                </div>
              </div>
            </div>




          </div>
        </div>

      </div>
      <!--/ Accordion -->




      </tbody>


    </div>
    <!--/ Basic Bootstrap Table -->


    <hr class="my-5" />




  </div>
  <!-- / Content -->


</div>
<?= $this->endSection(); ?>