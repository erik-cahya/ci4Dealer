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
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin Panel / </span>List Kendaraan</h4>

      <!-- Untuk menampilkan flash message -->
      <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
          <?= session()->getFlashdata('pesan'); ?>
        </div>
      <?php endif; ?>
      <!-- Untuk menampilkan flash message -->

      <div class="col">

        <div class="nav-align-top mb-4">

          <ul class="nav nav-tabs nav-fill" role="tablist">
            <li class="nav-item">
              <button type="button" class="nav-link <?= ($validation->hasError('namaLengkap') || $validation->hasError('email')) ? '' : 'active'; ?>" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-home" aria-controls="navs-justified-home" aria-selected="true">
                <i class="fa-solid fa-user"></i> List Kendaraan
                <span class="badge rounded-pill badge-center h-px-20 w-px-20 bg-label-danger"><?= $countProduct; ?></span>
              </button>
            </li>
            <li class="nav-item">
              <button type="button" class="nav-link <?= ($validation->hasError('namaLengkap') || $validation->hasError('email')) ? 'active' : ''; ?>" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-profile" aria-controls="navs-justified-profile" aria-selected="false">
                <i class="fa-solid fa-user-plus"></i> Tambah Data Kendaraan
              </button>
            </li>
          </ul>

          <div class="tab-content">
            <div class="tab-pane fade <?= ($validation->hasError('namaLengkap') || $validation->hasError('email')) ? '' : 'show active'; ?>" id="navs-justified-home" role="tabpanel">
              <!-- Page List Kendaraan -->
              <div class="table">
                <div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
                  <?php foreach ($product as $prd) : ?>
                    <div class="col">
                      <div class="card shadow-none bg-transparent border border-secondary" style="min-height:600px;">
                        <img class="card-img-top" src="<?= base_url(); ?>/img/product/e-<?= $prd["gambar_product"]; ?>" alt="Card image cap" />
                        <div class="card-body">
                          <div class="card-title">
                            <span class="card-title h5"><?= $prd["nama_product"]; ?> </span>
                          </div>
                          <span class="badge bg-label-danger"><?= number_to_currency($prd["harga_product"], 'IDR', 'id_ID') ?></span>
                          <p class="card-text mt-4">
                            <?= character_limiter($prd["detail_product"], 100); ?>
                          </p>
                        </div>
                        <div class="card-footer">

                          <small class="text-muted">Uploaded <?= date("d-m-Y", strtotime($prd["created_at"])) ?></small>

                          <button type="button" class="btn p-0 dropdown-toggle hide-arrow float-end" data-bs-toggle="dropdown">
                            <i class='bx bx-menu-alt-right'></i>
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="/admin/editKendaraan/<?= $prd["id_product"]; ?>"><i class="bx bx-edit-alt me-1"></i> Edit</a>

                            <!-- Button Delete -->
                            <form action="/admin/deleteKendaraan/<?= $prd['id_product']; ?>" method="POST">
                              <?= csrf_field(); ?>
                              <input type="hidden" name="_method" value="DELETE">
                              <button type="submit" class="dropdown-item" onclick="return confirm('Apakah Anda Ingin Delete Data ?');"><i class="bx bx-trash me-1"></i> Delete</button>
                            </form>
                            <!-- /* Button Delete -->

                          </div>
                        </div>
                      </div>
                    </div>
                  <?php endforeach; ?>
                  <!-- / Content -->
                </div>
              </div>
              <!-- /* Page List Kendaraan -->
            </div>


            <div class="tab-pane fade <?= ($validation->hasError('namaLengkap') || $validation->hasError('email')) ? 'show active' : ''; ?>" id="navs-justified-profile" role="tabpanel">
              <form action="/product/saveKendaraan" method="POST">
                <?= csrf_field(); ?>

                <div class="row">

                  <div class="mb-3">
                    <label class="form-label" for="namaKendaraan">Nama Kendaraan</label>
                    <div class="input-group input-group-merge">
                      <span id="namaKendaraan" class="input-group-text"><i class="fa-solid fa-motorcycle"></i></span>
                      <input type="text" class="form-control" id="namaKendaraan" name="namaKendaraan" placeholder="Nama Kendaraan" autofocus />
                    </div>
                  </div>

                  <div class="mb-3 col-md-6">
                    <label class="form-label" for="hargaKendaraan">Harga Kendaraan</label>
                    <div class="input-group input-group-merge <?= ($validation->hasError('hargaKendaraan')) ? 'border border-danger rounded' : ''; ?> ">
                      <span id="hargaKendaraan" class="input-group-text"><i class="fa-solid fa-money-bill-wave"></i></span>
                      <input type="text" id="hargaKendaraan" name="hargaKendaraan" class="form-control" placeholder="Harga Kendaraan" />
                    </div>
                    <div class="form-text" style="color:#ff3e1d;"><?= $validation->getError('hargaKendaraan'); ?></div>
                  </div>

                  <div class="mb-3 col-md-6">
                    <label class="form-label" for="tahunKendaraan">Tahun</label>
                    <div class="input-group input-group-merge <?= ($validation->hasError('tahunKendaraan')) ? 'border border-danger rounded' : ''; ?> ">
                      <span id="tahunKendaraan" class="input-group-text"><i class="fa-solid fa-calendar  "></i></span>
                      <input type="text" id="tahunKendaraan" name="tahunKendaraan" class="form-control" placeholder="Tahun Kendaraan" />
                    </div>
                    <div class="form-text" style="color:#ff3e1d;"><?= $validation->getError('tahunKendaraan'); ?></div>
                  </div>

                  <div class="mb-3">
                    <label class="form-label" for="detailKendaraan">Detail Kendaraan</label>
                    <div class="input-group input-group-merge">
                      <span id="detailKendaraan" class="input-group-text"><i class="fa-solid fa-info"></i></span>
                      <textarea id="detailKendaraan" name="detailKendaraan" class="form-control" placeholder="Detail Kendaraan"></textarea>
                    </div>
                  </div>

                  <div class="mb-3">
                    <label class="form-label" for="gambarKendaraan">Gambar</label>
                    <div class="input-group input-group-merge">
                      <span id="gambarKendaraan" class="input-group-text"><i class="fa-solid fa-motorcycle"></i></span>
                      <input type="text" class="form-control" id="gambarKendaraan" name="gambarKendaraan" placeholder="Gambar Kendaraan" />
                    </div>
                  </div>
                </div>

                <button type="submit" class="btn btn-danger">Save Data</button>
              </form>
            </div>

          </div>
        </div>
      </div>






      <hr class="my-5" />




    </div>
    <!-- / Content -->
    <?= $this->endSection(); ?>