<?= $this->extend('layouts/layoutPanel'); ?>
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
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin Panel / </span>Manage Account |

        <span class="badge rounded-pill bg-label-primary"><?= $countUser; ?></span>
      </h4>

      <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
          <?= session()->getFlashdata('pesan'); ?>
        </div>
      <?php endif; ?>

      <div class="col">

        <div class="nav-align-top mb-4">

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
                              <a class="dropdown-item" href="/admin/editUser/<?= $user["id_user"]; ?>"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                              <!-- /*Button Edit -->


                              <!-- Button Delete -->
                              <form action="/admin/<?= $user['id_user']; ?>" method="POST">
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


          </div>
        </div>
      </div>






      <hr class="my-5" />




    </div>
    <!-- /* Content -->
  </div>






  <?= $this->endSection(); ?>