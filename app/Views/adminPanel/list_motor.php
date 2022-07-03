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
                <th>Nama Account</th>
                <th>Username</th>
                <th>Jumlah Produk</th>
                <th>Status</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">


              <tr>
                <td>1</td>
                <td> <strong>Erik Cahya Pradana</strong></td>
                <td>erik.cahya</td>
                <td>35</td>

                <td><span class="badge bg-label-success me-1">Active User</span></td>
                <td>
                  <button class="btn btn-primary me-1" type="button" data-bs-toggle="collapse" data-bs-target="#produk1" aria-expanded="false" aria-controls="produk1">
                    Tampilkan Produk
                  </button>
                </td>
              </tr>
              <tr>
                <td colspan="6">
                  <div class="collapse multi-collapse" id="produk1">
                    <div class="row row-cols-1 row-cols-md-4 g-4">
                      <div class="col">
                        <div class="card text-bg-secondary h-100">
                          <img src="<?= base_url(); ?>/admin/assets/img/elements/2.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">ADV X550 HA</h5>
                            <p class="badge bg-label-success me-1">Live Product</p>
                          </div>
                          <div class="card-footer">
                            <div class="dropdown">
                              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class='bx bx-menu-alt-left'></i>
                              </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bxs-edit-alt me-1"></i> Edit</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card h-100">
                          <img src="<?= base_url(); ?>/admin/assets/img/elements/2.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">Suzuki Sakura 223</h5>
                            <p class="badge bg-label-success me-1">Live Product</p>
                          </div>
                          <div class="card-footer">
                            <div class="dropdown">
                              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class='bx bx-menu-alt-left'></i>
                              </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bxs-edit-alt me-1"></i> Edit</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card h-100">
                          <img src="<?= base_url(); ?>/admin/assets/img/elements/2.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="badge bg-label-success me-1">Live Product</p>
                          </div>
                          <div class="card-footer">
                            <div class="dropdown">
                              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class='bx bx-menu-alt-left'></i>
                              </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bxs-edit-alt me-1"></i> Edit</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                              </div>
                            </div>


                          </div>
                        </div>
                      </div>

                    </div>





                  </div>


                </td>
              </tr>



              <tr>
                <td>2</td>
                <td> <strong>Kadek Panji Kusuma</strong></td>
                <td>erik.cahya</td>
                <td>35</td>
                <td><span class="badge bg-label-success me-1">Active User</span></td>
                <td>
                  <button class="btn btn-primary me-1" type="button" data-bs-toggle="collapse" data-bs-target="#produk2" aria-expanded="false" aria-controls="produk2">
                    Tampilkan Produk
                  </button>
                </td>
              </tr>
              <tr>
                <td colspan="6">
                  <div class="collapse multi-collapse" id="produk2">
                    <div class="row row-cols-1 row-cols-md-4 g-4">
                      <div class="col">
                        <div class="card text-bg-secondary h-100">
                          <img src="<?= base_url(); ?>/admin/assets/img/elements/2.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">ADV X550 HA</h5>
                            <p class="badge bg-label-success me-1">Live Product</p>
                          </div>
                          <div class="card-footer">
                            <div class="dropdown">
                              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class='bx bx-menu-alt-left'></i>
                              </button>
                              <div class="dropdown-menu">

                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bxs-edit-alt me-1"></i> Edit</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>

                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card h-100">
                          <img src="<?= base_url(); ?>/admin/assets/img/elements/2.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">Suzuki Sakura 223</h5>
                            <p class="badge bg-label-success me-1">Live Product</p>
                          </div>
                          <div class="card-footer">
                            <div class="dropdown">
                              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class='bx bx-menu-alt-left'></i>
                              </button>
                              <div class="dropdown-menu">

                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bxs-edit-alt me-1"></i> Edit</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>

                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card h-100">
                          <img src="<?= base_url(); ?>/admin/assets/img/elements/2.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="badge bg-label-success me-1">Live Product</p>
                          </div>
                          <div class="card-footer">
                            <div class="dropdown">
                              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class='bx bx-menu-alt-left'></i>
                              </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bxs-edit-alt me-1"></i> Edit</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
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