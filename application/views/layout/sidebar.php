<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <!-- Menu Header -->
    <li class="nav-heading">Menu Utama</li>

    <li class="nav-item">
      <a class="nav-link <?= $title == 'Dashboard' ? '' : 'collapsed' ?>" href="<?= base_url() ?>">
        <i class="bi bi-grid-1x2-fill"></i>
        <span>Dashboard</span>
      </a>
    </li>

    <!-- Transaksi Section -->
    <li class="nav-heading">Transaksi Kas</li>

    <li class="nav-item">
      <a class="nav-link <?= $title == 'Penerimaan Kas' || strpos($title, 'Kas Masuk') !== false ? '' : 'collapsed' ?>" href="<?= base_url() ?>kas-masuk">
        <i class="bi bi-arrow-down-circle-fill text-success"></i>
        <span>Kas Masuk</span>
        <span class="badge bg-success-light text-success ms-auto">Pemasukan</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link <?= $title == 'Pengeluaran Kas' || strpos($title, 'Kas Keluar') !== false ? '' : 'collapsed' ?>" href="<?= base_url() ?>kas-keluar">
        <i class="bi bi-arrow-up-circle-fill text-danger"></i>
        <span>Kas Keluar</span>
        <span class="badge bg-danger-light text-danger ms-auto">Pengeluaran</span>
      </a>
    </li>

    <!-- Laporan Section -->
    <li class="nav-heading">Laporan</li>

    <li class="nav-item">
      <a class="nav-link <?= $title == 'Rekapitulasi' ? '' : 'collapsed' ?>" href="<?= base_url() ?>rekapitulasi">
        <i class="bi bi-file-earmark-bar-graph-fill text-primary"></i>
        <span>Rekapitulasi</span>
      </a>
    </li>

    <!-- Settings Section -->
    <li class="nav-heading">Pengaturan</li>

    <li class="nav-item">
      <a class="nav-link <?= $title == 'Profile' ? '' : 'collapsed' ?>" href="<?= base_url() ?>profile">
        <i class="bi bi-person-gear text-info"></i>
        <span>Profil Saya</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed text-danger" href="<?= base_url() ?>logout">
        <i class="bi bi-box-arrow-left text-danger"></i>
        <span>Keluar</span>
      </a>
    </li>

  </ul>

  <!-- Sidebar Footer -->
  <div class="sidebar-footer p-3 mt-auto">
    <div class="card bg-light border-0">
      <div class="card-body p-3 text-center">
        <i class="bi bi-shield-check text-success fs-4"></i>
        <p class="small text-muted mb-0 mt-2">Versi 1.0</p>
        <p class="small text-muted mb-0">© <?= date('Y') ?> E-KAS</p>
      </div>
    </div>
  </div>

</aside>