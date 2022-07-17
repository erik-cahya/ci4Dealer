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

      <!-- Basic Bootstrap Table -->
      <div class="card">
        <h5 class="card-header">List Account</h5>
        <div class="table-responsive text-nowrap">
          <table class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Profile</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Status</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">

              <?php foreach ($dataUser as $user) : ?>
                <tr>
                  <td>1</td>
                  <td>
                    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                      <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-lg pull-up" title="Lilian Fuller">
                        <img src="<?= base_url(); ?>/admin/assets/img/avatars/<?= $user['avatar']; ?>" alt="Avatar" class="rounded-circle" />
                      </li>
                    </ul>
                  </td>
                  <td> <strong><?= $user['nama_user']; ?></strong></td>
                  <td><?= $user['username']; ?></td>

                  <td><span class="badge bg-label-primary me-1">Active</span></td>
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
              <?php endforeach; ?>






            </tbody>
          </table>
        </div>
      </div>
      <!--/ Basic Bootstrap Table -->


      <hr class="my-5" />




    </div>
    <!-- / Content -->

    <?= $this->endSection(); ?>