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
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin Panel / </span>Tambah Data Kendaraan</h4>

      <div class="row">
        <div class="col-xl">
          <div class="card mb-4">
            <div class="card-body">

              <form action="/panel/saveKendaraan" method="POST">
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



    </div>
    <hr class="my-5" />
  </div>
  <!-- / Content -->


</div>
<?= $this->endSection(); ?>