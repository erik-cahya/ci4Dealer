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
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin Panel / </span>Manage Account</h4>

      <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
          <?= session()->getFlashdata('pesan'); ?>
        </div>
      <?php endif; ?>

      <div class="col">

        <div class="nav-align-top mb-4">

          <ul class="nav nav-tabs nav-fill" role="tablist">
            <li class="nav-item">
              <button type="button" class="nav-link <?= ($validation->hasError('namaLengkap') || $validation->hasError('email')) ? '' : 'active'; ?>" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-home" aria-controls="navs-justified-home" aria-selected="true">
                <i class="fa-solid fa-user"></i> Account User
                <span class="badge rounded-pill badge-center h-px-20 w-px-20 bg-label-danger"><?= $countUser; ?></span>
              </button>
            </li>
            <li class="nav-item">
              <button type="button" class="nav-link <?= ($validation->hasError('namaLengkap') || $validation->hasError('email')) ? 'active' : ''; ?>" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-profile" aria-controls="navs-justified-profile" aria-selected="false">
                <i class="fa-solid fa-user-plus"></i> Tambah User Baru
              </button>
            </li>
          </ul>

          <div class="tab-content">
            <div class="tab-pane fade <?= ($validation->hasError('namaLengkap') || $validation->hasError('email')) ? '' : 'show active'; ?>" id="navs-justified-home" role="tabpanel">
              <div class="table-responsive text-nowrap" style="position: relative;height: 500px;overflow: auto; display: block;">
                <table class="table">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Profile</th>
                      <th>Nama</th>
                      <th>Username</th>
                      <th>E-Mail</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody class="table-border-bottom-0">

                    <?php $no = 1; ?>
                    <?php foreach ($dataUser as $user) : ?>
                      <tr>
                        <td><?= $no; ?></td>
                        <td>
                          <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-lg pull-up" title="<?= $user['nama_user']; ?>">
                              <img src="<?= base_url(); ?>/admin/assets/img/avatars/<?= $user['avatar']; ?>" alt="Avatar" class="rounded-circle" />
                            </li>
                          </ul>
                        </td>
                        <td> <strong><?= $user['nama_user']; ?></strong></td>
                        <td><?= $user['username']; ?></td>

                        <td><?= $user['email']; ?></td>
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">

                              <!-- Button Edit -->
                              <a class="dropdown-item" href="/panel/editUser/<?= $user["id_user"]; ?>"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                              <!-- /*Button Edit -->


                              <!-- Button Delete -->
                              <form action="/panel/<?= $user['id_user']; ?>" method="POST">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="dropdown-item" onclick="return confirm('Apakah Anda Ingin Menghapus Account ?');"><i class="bx bx-trash me-1"></i> Delete</button>
                              </form>
                              <!-- /* Button Delete -->
                            </div>
                          </div>
                        </td>
                      </tr>
                      <?php $no++ ?>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="tab-pane fade <?= ($validation->hasError('namaLengkap') || $validation->hasError('email')) ? 'show active' : ''; ?>" id="navs-justified-profile" role="tabpanel">
              <form action="/panel/saveUser" method="POST">
                <?= csrf_field(); ?>
                <div class="row">
                  <div class="mb-3">
                    <label class="form-label" for="namaLengkap">Nama Lengkap</label>
                    <div class="input-group input-group-merge <?= ($validation->hasError('namaLengkap')) ? 'border border-danger rounded' : ''; ?>">
                      <span id="namaLengkap" class="input-group-text"><i class="fa-solid fa-user"></i></span>
                      <input type="text" class="form-control" id="namaLengkap" name="namaLengkap" placeholder="Nama Lengkap..." autofocus />
                    </div>
                    <div class="form-text" style="color:#ff3e1d;"><?= $validation->getError('namaLengkap'); ?></div>
                  </div>

                  <div class="mb-3 col-md-6">
                    <label class="form-label" for="username">Username</label>
                    <div class="input-group input-group-merge">
                      <span id="username" class="input-group-text"><i class="fa-solid fa-user-pen"></i></span>
                      <input type="text" class="form-control" id="username" name="username" placeholder="Username..." autofocus />
                    </div>
                  </div>

                  <div class="mb-3 col-md-6">
                    <label class="form-label" for="password">Password</label>
                    <div class="input-group input-group-merge">
                      <span id="password" class="input-group-text"><i class="fa-solid fa-user-lock"></i></span>
                      <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password..." autofocus />
                    </div>
                  </div>

                  <div class="mb-3 col-md-6">
                    <label class="form-label" for="noTelepon">No Telepon</label>
                    <div class="input-group input-group-merge <?= ($validation->hasError('noTelepon')) ? 'border border-danger rounded' : ''; ?> ">
                      <span id="noTelepon" class="input-group-text"><i class="fa-solid fa-phone"></i></span>
                      <input type="text" id="noTelepon" name="noTelepon" class="form-control" placeholder="Masukkan No Telepon..." />
                    </div>
                    <div class="form-text" style="color:#ff3e1d;"><?= $validation->getError('noTelepon'); ?></div>
                  </div>

                  <div class="mb-3 col-md-6">
                    <label class="form-label" for="email">Email</label>
                    <div class="input-group input-group-merge <?= ($validation->hasError('email')) ? 'border border-danger rounded' : ''; ?>">
                      <span id="email" class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                      <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan E-Mail..." autofocus />
                    </div>
                    <div class="form-text" style="color:#ff3e1d;"><?= $validation->getError('email'); ?></div>
                  </div>


                  <div class="mb-3">
                    <label class="form-label" for="alamat">Alamat</label>
                    <div class="input-group input-group-merge">
                      <span id="alamat" class="input-group-text"><i class="fa-solid fa-location-dot"></i></span>
                      <textarea id="alamat" name="alamat" class="form-control" placeholder="Masukkan Alamat User..."></textarea>
                    </div>
                  </div>

                  <div class="mb-3">
                    <label class="form-label" for="avatarUser">Gambar</label>
                    <div class="input-group input-group-merge">
                      <span id="avatarUser" class="input-group-text"><i class="fa-solid fa-motorcycle"></i></span>
                      <input type="text" class="form-control" id="avatarUser" name="avatarUser" placeholder="Gambar Kendaraan" />
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Save changes</button>





              </form>
            </div>

          </div>
        </div>
      </div>






      <hr class="my-5" />




    </div>
    <!-- /* Content -->
  </div>






  <?= $this->endSection(); ?>