<div class="login-page">
    <!-- Left Side - Brand/Welcome -->
    <div class="login-left">
        <div class="brand-text">
            <div class="brand-icon">
                <i class="bi bi-wallet2"></i>
            </div>
            <h1>Aplikasi Kas</h1>
            <p>Kelola keuangan dengan mudah, cepat, dan aman. Sistem pencatatan kas masuk & keluar yang modern.</p>
        </div>
    </div>

    <!-- Right Side - Login Form -->
    <div class="login-right">
        <div class="login-card">
            <!-- Flash Messages -->
            <?php if ($this->session->flashdata('success')) : ?>
                <div class="alert alert-modern alert-success alert-dismissible fade show" role="alert">
                    <i class="bi bi-check-circle-fill"></i>
                    <?= $this->session->flashdata('message') ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
            <?php if ($this->session->flashdata('danger')) : ?>
                <div class="alert alert-modern alert-danger alert-dismissible fade show" role="alert">
                    <i class="bi bi-exclamation-triangle-fill"></i>
                    <?= $this->session->flashdata('message') ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>

            <h5 class="card-title">Selamat Datang! 👋</h5>
            <p class="card-subtitle">Silakan masuk ke akun Anda</p>

            <form method="post" action="<?= base_url() ?>login" novalidate>
                <!-- Username Input -->
                <div class="form-floating-icon">
                    <input type="text"
                        name="username"
                        class="form-control"
                        id="username"
                        placeholder="Masukkan username"
                        autocomplete="off"
                        required>
                    <i class="bi bi-person input-icon"></i>
                </div>

                <!-- Password Input -->
                <div class="form-floating-icon">
                    <input type="password"
                        name="password"
                        class="form-control"
                        id="password"
                        placeholder="Masukkan password"
                        required>
                    <i class="bi bi-lock input-icon"></i>
                </div>

                <!-- Submit Button -->
                <button class="btn btn-modern-primary w-100" type="submit">
                    <i class="bi bi-box-arrow-in-right me-2"></i>Masuk
                </button>
            </form>

            <div class="text-center mt-4">
                <small class="text-muted">
                    <i class="bi bi-shield-check me-1"></i>
                    Data Anda aman dan terenkripsi
                </small>
            </div>
        </div>
    </div>
</div>