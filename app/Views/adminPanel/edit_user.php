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
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin Panel /</span> Edit User</h4>

            <div class="row">
                <div class="col-md-12">

                    <div class="nav-align-top mb-4">
                        <ul class="nav nav-pills mb-3" role="tablist">
                            <li class="nav-item">
                                <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-home" aria-controls="navs-pills-justified-home" aria-selected="true">
                                    <i class="tf-icons bx bx-home"></i> Data User
                                </button>
                            </li>
                            <li class="nav-item">
                                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-profile" aria-controls="navs-pills-justified-profile" aria-selected="false">
                                    <i class="tf-icons bx bx-user"></i> Account
                                </button>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="navs-pills-justified-home" role="tabpanel">

                                <h5 class="card-header">Profile Details</h5>
                                <!-- Account -->
                                <div class="card-body">
                                    <div class="d-flex align-items-start align-items-sm-center gap-4">
                                        <img src="<?= base_url(); ?>/admin/assets/img/avatars/<?= $dataUser['avatar']; ?>" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar" />
                                        <div class="button-wrapper">
                                            <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                                <span class="d-none d-sm-block">Upload new photo</span>
                                                <i class="bx bx-upload d-block d-sm-none"></i>
                                                <input type="file" id="upload" class="account-file-input" hidden accept="image/png, image/jpeg" />
                                            </label>

                                            <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-0" />
                                <div class="card-body">



                                    <form action="/admin/updateUser/<?= $dataUser["id_user"]; ?>" method="POST">
                                        <?= csrf_field(); ?>
                                        <div class="row">
                                            <div class="mb-3">
                                                <label class="form-label" for="namaLengkap">Nama Lengkap</label>
                                                <div class="input-group input-group-merge">
                                                    <span id="namaLengkap" class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                                    <input type="text" class="form-control" id="namaLengkap" name="namaLengkap" placeholder="Nama Lengkap..." value="<?= $dataUser["nama_user"]; ?>" autofocus />
                                                </div>
                                            </div>

                                            <div class="mb-3 col-md-6">
                                                <label class="form-label" for="noTelepon">No Telepon</label>
                                                <div class="input-group input-group-merge ">
                                                    <span id="noTelepon" class="input-group-text"><i class="fa-solid fa-phone"></i></span>
                                                    <input type="text" id="noTelepon" name="noTelepon" class="form-control" value="<?= $dataUser["no_telepon"]; ?>" />
                                                </div>
                                            </div>

                                            <div class="mb-3 col-md-6">
                                                <label class="form-label" for="email">Email</label>
                                                <div class="input-group input-group-merge">
                                                    <span id="email" class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                                                    <input type="text" class="form-control" id="email" name="email" value="<?= $dataUser["email"]; ?>" autofocus />
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="alamat">Alamat</label>
                                                <div class="input-group input-group-merge">
                                                    <span id="alamat" class="input-group-text"><i class="fa-solid fa-location-dot"></i></span>
                                                    <textarea id="alamat" name="alamat" class="form-control"><?= $dataUser["alamat"]; ?></textarea>
                                                </div>
                                            </div>

                                        </div>
                                        <button type=" submit" class="btn btn-primary">Save changes</button>
                                    </form>
                                </div>
                                <!-- /Account -->
                            </div>

                            <div class="tab-pane fade" id="navs-pills-justified-profile" role="tabpanel">
                                <div class="card-header d-flex align-items-center justify-content-between">
                                    <h5 class="mb-0">Edit User Account</h5>
                                </div>
                                <div class="card-body">
                                    <form action="/admin/updateAccount/<?= $dataUser["id_account"]; ?>" method="POST">
                                        <input type="hidden" class="form-control" name="id_user" id="id_user" value="<?= $dataUser["id_user"]; ?>" />
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="username">Username</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                                                    <span id="username2" class="input-group-text"><i class="bx bx-user"></i></span>
                                                    <input type="text" class="form-control" name="username" id="username" value="<?= $dataUser["username"]; ?>" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="password">Password</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                                                    <span id="password2" class="input-group-text"><i class="bx bx-buildings"></i></span>
                                                    <input type="text" name="password" id="password" class="form-control" value="<?= $dataUser["password"]; ?>" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <h5 class="card-header">Delete Account</h5>
                        <div class="card-body">
                            <div class="mb-3 col-12 mb-0">
                                <div class="alert alert-warning">
                                    <h6 class="alert-heading fw-bold mb-1">Are you sure you want to delete your account?</h6>
                                    <p class="mb-0">Once you delete your account, there is no going back. Please be certain.</p>
                                </div>
                            </div>
                            <form action="/admin/<?= $dataUser['id_user']; ?>" method="POST">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger deactivate-account" onclick="return confirm('Apakah Anda Ingin Delete Data ?');"><i class="bx bx-trash me-1"></i> Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col">

                </div>
            </div>
        </div>

        <!-- /* Content -->






        <?= $this->endSection(); ?>