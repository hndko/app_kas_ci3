<body>
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="<?= base_url() ?>" class="logo d-flex align-items-center">
        <span class="logo-icon me-2">
          <i class="bi bi-wallet2" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); -webkit-background-clip: text; background-clip: text; -webkit-text-fill-color: transparent; color: transparent; font-size: 1.5rem;"></i>
        </span>
        <span class="d-none d-lg-block fw-bold" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); -webkit-background-clip: text; background-clip: text; -webkit-text-fill-color: transparent; color: transparent;">E-KAS</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <!-- Profile Dropdown -->
        <li class="nav-item dropdown pe-3">
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <div class="profile-avatar me-2">
              <img src="<?= base_url() ?>assets/img/profile-img.jpg" alt="Profile" class="rounded-circle" style="width: 36px; height: 36px; object-fit: cover; border: 2px solid #667eea;">
            </div>
            <div class="d-none d-md-block">
              <span class="dropdown-toggle fw-semibold"><?= $account->nama_lengkap ?></span>
              <small class="d-block text-muted" style="font-size: 0.75rem;">Administrator</small>
            </div>
          </a>

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?= $account->nama_lengkap ?></h6>
              <span class="text-muted small">@<?= $account->username ?></span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="<?= base_url() ?>profile">
                <i class="bi bi-person-gear me-2 text-primary"></i>
                <span>Profil Saya</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="<?= base_url() ?>">
                <i class="bi bi-speedometer2 me-2 text-secondary"></i>
                <span>Dashboard</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center text-danger" href="<?= base_url() ?>logout">
                <i class="bi bi-box-arrow-right me-2"></i>
                <span>Keluar</span>
              </a>
            </li>

          </ul>
        </li>

      </ul>
    </nav>

  </header>