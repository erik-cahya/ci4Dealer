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
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin Panel / </span>Approval Penjualan</h4>

      <!-- Accordion -->
      <h5 class="mt-4">Form Penjualan</h5>
      <div class="row">
        <div class="col-md mb-4 mb-md-0">
          <div class="accordion mt-3" id="accordionExample">

            <div class="card accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionTwo" aria-expanded="false" aria-controls="accordionTwo">
                  1. Erik Cahya Pradana
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
                            <label for="firstName" class="form-label">First Name</label>
                            <input class="form-control" type="text" id="firstName" name="firstName" value="John" autofocus />
                          </div>

                          <div class="mb-3 col-md-12">
                            <label for="firstName" class="form-label">Nama Kendaraan</label>
                            <input class="form-control" type="text" id="firstName" name="firstName" value="John" autofocus />
                          </div>

                          <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">Harga Kendaraan</label>
                            <input class="form-control" type="text" id="email" name="email" value="john.doe@example.com" placeholder="john.doe@example.com" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="organization" class="form-label">Tahun Kendaraan</label>
                            <input type="text" class="form-control" id="organization" name="organization" value="ThemeSelection" />
                          </div>


                          <div class="mb-3 col-md-6">
                            <label for="organization" class="form-label">No Telepon</label>
                            <input type="text" class="form-control" id="organization" name="organization" value="ThemeSelection" />
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

            <div class="card accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionThree" aria-expanded="false" aria-controls="accordionThree">
                  2. Kadek Panji Kusuma
                </button>
              </h2>

              <div id="accordionThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">ADV 150 XG</h5>
                      <p class="badge bg-label-danger me-1 float-end">Reject</p>
                    </div>
                    <div class="text-center">
                      <img src="<?= base_url(); ?>/admin/assets/img/elements/13.jpg" class="rounded" alt="product-image" width="280px">
                    </div>
                    <div class="card-body">
                      <form>
                        <div class="row">

                          <div class="mb-3 col-md-12">
                            <label for="firstName" class="form-label">First Name</label>
                            <input class="form-control" type="text" id="firstName" name="firstName" value="John" autofocus />
                          </div>

                          <div class="mb-3 col-md-12">
                            <label for="firstName" class="form-label">Nama Kendaraan</label>
                            <input class="form-control" type="text" id="firstName" name="firstName" value="John" autofocus />
                          </div>

                          <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">Harga Kendaraan</label>
                            <input class="form-control" type="text" id="email" name="email" value="john.doe@example.com" placeholder="john.doe@example.com" />
                          </div>



                          <div class="mb-3 col-md-6">
                            <label for="organization" class="form-label">Tahun Kendaraan</label>
                            <input type="text" class="form-control" id="organization" name="organization" value="ThemeSelection" />
                          </div>


                          <div class="mb-3 col-md-6">
                            <label for="organization" class="form-label">No Telepon</label>
                            <input type="text" class="form-control" id="organization" name="organization" value="ThemeSelection" />
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