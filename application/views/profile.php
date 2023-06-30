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
            <div class="col-xl-4">

                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                        <img src="<?= base_url() ?>assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                        <h2><?= $account->nama_lengkap ?></h2>
                        <h3><?= $account->username ?></h3>
                    </div>
                </div>

            </div>

            <div class="col-xl-8">

                <div class="card">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered">

                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                            </li>

                        </ul>
                        <div class="tab-content pt-2">

                            <div class="tab-pane fade show active profile-edit pt-3" id="profile-edit">

                                <!-- Profile Edit Form -->
                                <form action="<?= base_url() ?>profile" method="post">
                                    <input type="hidden" name="user_id" value="<?= $account->user_id ?>">
                                    <div class="row mb-3">
                                        <label for="nama_lengkap" class="col-md-4 col-lg-3 col-form-label">Nama Lengkap</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="nama_lengkap" type="text" class="form-control" id="nama_lengkap" value="<?= $account->nama_lengkap ?>" autocomplete="off">
                                            <small class="form-text text-danger"><?= form_error('nama_lengkap') ?></small>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="username" class="col-md-4 col-lg-3 col-form-label">Username</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="username" type="text" class="form-control" id="username" value="<?= $account->username ?>">
                                            <small class="form-text text-danger"><?= form_error('username') ?></small>
                                        </div>
                                    </div>


                                    <div class="text-end">
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                </form><!-- End Profile Edit Form -->

                            </div>

                            <div class="tab-pane fade pt-3" id="profile-change-password">
                                <!-- Change Password Form -->
                                <form action="<?= base_url() ?>profile/password" method="post">
                                    <input type="hidden" name="user_id" value="<?= $account->user_id ?>">
                                    <div class="row mb-3">
                                        <label for="password" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="password" type="password" class="form-control" id="password" required>
                                        </div>
                                    </div>
                                    <div class="text-end">
                                        <button type="submit" class="btn btn-primary">Change Password</button>
                                    </div>
                                </form><!-- End Change Password Form -->

                            </div>

                        </div><!-- End Bordered Tabs -->

                    </div>
                </div>

            </div>
        </div>
    </section>

</main>