<main id="main" class="main">

    <div class="pagetitle">
        <h1><?= $title ?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                <li class="breadcrumb-item active"><?= $title ?></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">
            <!-- Profile Card -->
            <div class="col-xl-4">
                <div class="card card-modern">
                    <div class="card-body profile-card-modern pt-4">
                        <img src="<?= base_url() ?>assets/img/profile-img.jpg" alt="Profile" class="profile-img">
                        <h2><?= $account->nama_lengkap ?></h2>
                        <h3>@<?= $account->username ?></h3>

                        <div class="mt-3">
                            <span class="badge bg-success-light text-success px-3 py-2">
                                <i class="bi bi-shield-check me-1"></i> Administrator
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Profile Edit -->
            <div class="col-xl-8">
                <div class="card card-modern">
                    <div class="card-body pt-3">
                        <!-- Tabs -->
                        <ul class="nav nav-tabs-modern nav-tabs nav-tabs-bordered">
                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-edit">
                                    <i class="bi bi-person-gear me-2"></i>Edit Profile
                                </button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">
                                    <i class="bi bi-key me-2"></i>Ubah Password
                                </button>
                            </li>
                        </ul>

                        <div class="tab-content pt-4">
                            <!-- Edit Profile Tab -->
                            <div class="tab-pane fade show active" id="profile-edit">
                                <form action="<?= base_url() ?>profile" method="post">
                                    <input type="hidden" name="user_id" value="<?= $account->user_id ?>">

                                    <!-- Nama Lengkap -->
                                    <div class="form-row-modern">
                                        <label class="form-label-modern">
                                            <i class="bi bi-person"></i>
                                            Nama Lengkap
                                        </label>
                                        <div class="input-icon-wrapper">
                                            <input name="nama_lengkap"
                                                type="text"
                                                class="form-control"
                                                id="nama_lengkap"
                                                value="<?= $account->nama_lengkap ?>"
                                                placeholder="Masukkan nama lengkap"
                                                autocomplete="off">
                                            <i class="bi bi-person input-icon-left"></i>
                                        </div>
                                        <?php if (form_error('nama_lengkap')): ?>
                                            <small class="text-danger"><i class="bi bi-exclamation-circle me-1"></i><?= form_error('nama_lengkap') ?></small>
                                        <?php endif; ?>
                                    </div>

                                    <!-- Username -->
                                    <div class="form-row-modern">
                                        <label class="form-label-modern">
                                            <i class="bi bi-at"></i>
                                            Username
                                        </label>
                                        <div class="input-icon-wrapper">
                                            <input name="username"
                                                type="text"
                                                class="form-control"
                                                id="username"
                                                value="<?= $account->username ?>"
                                                placeholder="Masukkan username">
                                            <i class="bi bi-at input-icon-left"></i>
                                        </div>
                                        <?php if (form_error('username')): ?>
                                            <small class="text-danger"><i class="bi bi-exclamation-circle me-1"></i><?= form_error('username') ?></small>
                                        <?php endif; ?>
                                    </div>

                                    <div class="d-flex justify-content-end mt-4">
                                        <button type="submit" class="btn btn-modern-primary">
                                            <i class="bi bi-check-circle me-1"></i> Simpan Perubahan
                                        </button>
                                    </div>
                                </form>
                            </div>

                            <!-- Change Password Tab -->
                            <div class="tab-pane fade" id="profile-change-password">
                                <form action="<?= base_url() ?>profile/password" method="post">
                                    <input type="hidden" name="user_id" value="<?= $account->user_id ?>">

                                    <!-- New Password -->
                                    <div class="form-row-modern">
                                        <label class="form-label-modern">
                                            <i class="bi bi-lock"></i>
                                            Password Baru
                                        </label>
                                        <div class="input-icon-wrapper">
                                            <input name="password"
                                                type="password"
                                                class="form-control"
                                                id="password"
                                                placeholder="Masukkan password baru"
                                                required>
                                            <i class="bi bi-lock input-icon-left"></i>
                                        </div>
                                    </div>

                                    <!-- Confirm Password -->
                                    <div class="form-row-modern">
                                        <label class="form-label-modern">
                                            <i class="bi bi-lock-fill"></i>
                                            Konfirmasi Password
                                        </label>
                                        <div class="input-icon-wrapper">
                                            <input name="confirm_password"
                                                type="password"
                                                class="form-control"
                                                id="confirm_password"
                                                placeholder="Ulangi password baru">
                                            <i class="bi bi-lock-fill input-icon-left"></i>
                                        </div>
                                    </div>

                                    <div class="alert alert-modern alert-warning mt-3">
                                        <i class="bi bi-exclamation-triangle"></i>
                                        <span>Password minimal 6 karakter dan gunakan kombinasi huruf & angka</span>
                                    </div>

                                    <div class="d-flex justify-content-end mt-4">
                                        <button type="submit" class="btn btn-modern-success">
                                            <i class="bi bi-shield-lock me-1"></i> Ubah Password
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>