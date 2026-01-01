<main id="main" class="main">

  <div class="pagetitle">
    <h1><?= $title ?></h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
        <li class="breadcrumb-item active"><?= $title ?></li>
      </ol>
    </nav>
  </div>

  <section class="section dashboard">
    <!-- Income Section -->
    <div class="row mb-2">
      <div class="col-12">
        <h6 class="text-muted mb-3">
          <i class="bi bi-graph-up-arrow text-success me-2"></i>
          Ringkasan Pemasukan
        </h6>
      </div>
    </div>

    <div class="row g-4 mb-4">
      <!-- Income This Month -->
      <div class="col-xxl-4 col-md-6">
        <div class="dashboard-card income">
          <div class="d-flex align-items-center">
            <div class="card-icon">
              <i class="bi bi-cash-coin"></i>
            </div>
            <div class="ps-3">
              <p class="text-muted mb-1 small">Pemasukan Bulan Ini</p>
              <h5 class="mb-0 fw-bold text-success">Rp<?= number_format($sumPenerimaanThisMonth->pemasukan, 0, ",", ".") ?></h5>
            </div>
          </div>
          <div class="mt-3 pt-3 border-top">
            <small class="text-muted">
              <i class="bi bi-calendar-check me-1"></i>
              <?= date('F Y') ?>
            </small>
          </div>
        </div>
      </div>

      <!-- Income Last Month -->
      <div class="col-xxl-4 col-md-6">
        <div class="dashboard-card income">
          <div class="d-flex align-items-center">
            <div class="card-icon">
              <i class="bi bi-clock-history"></i>
            </div>
            <div class="ps-3">
              <p class="text-muted mb-1 small">Pemasukan Bulan Lalu</p>
              <h5 class="mb-0 fw-bold text-success">Rp<?= number_format($sumPenerimaanLastMonth->pemasukan, 0, ",", ".") ?></h5>
            </div>
          </div>
          <div class="mt-3 pt-3 border-top">
            <small class="text-muted">
              <i class="bi bi-calendar-minus me-1"></i>
              <?= date('F Y', strtotime('-1 month')) ?>
            </small>
          </div>
        </div>
      </div>

      <!-- Total Income -->
      <div class="col-xxl-4 col-xl-12">
        <div class="dashboard-card income">
          <div class="d-flex align-items-center">
            <div class="card-icon">
              <i class="bi bi-wallet2"></i>
            </div>
            <div class="ps-3">
              <p class="text-muted mb-1 small">Total Semua Pemasukan</p>
              <h5 class="mb-0 fw-bold text-success">Rp<?= number_format($sumPenerimaan->pemasukan, 0, ",", ".") ?></h5>
            </div>
          </div>
          <div class="mt-3 pt-3 border-top">
            <small class="text-muted">
              <i class="bi bi-bar-chart-line me-1"></i>
              Akumulasi keseluruhan
            </small>
          </div>
        </div>
      </div>
    </div>

    <!-- Expense Section -->
    <div class="row mb-2">
      <div class="col-12">
        <h6 class="text-muted mb-3">
          <i class="bi bi-graph-down-arrow text-danger me-2"></i>
          Ringkasan Pengeluaran
        </h6>
      </div>
    </div>

    <div class="row g-4 mb-4">
      <!-- Expense This Month -->
      <div class="col-xxl-4 col-md-6">
        <div class="dashboard-card expense">
          <div class="d-flex align-items-center">
            <div class="card-icon">
              <i class="bi bi-cash-stack"></i>
            </div>
            <div class="ps-3">
              <p class="text-muted mb-1 small">Pengeluaran Bulan Ini</p>
              <h5 class="mb-0 fw-bold text-danger">Rp<?= number_format($sumPengeluaranThisMonth->pengeluaran, 0, ",", ".") ?></h5>
            </div>
          </div>
          <div class="mt-3 pt-3 border-top">
            <small class="text-muted">
              <i class="bi bi-calendar-check me-1"></i>
              <?= date('F Y') ?>
            </small>
          </div>
        </div>
      </div>

      <!-- Expense Last Month -->
      <div class="col-xxl-4 col-md-6">
        <div class="dashboard-card expense">
          <div class="d-flex align-items-center">
            <div class="card-icon">
              <i class="bi bi-clock-history"></i>
            </div>
            <div class="ps-3">
              <p class="text-muted mb-1 small">Pengeluaran Bulan Lalu</p>
              <h5 class="mb-0 fw-bold text-danger">Rp<?= number_format($sumPengeluaranLastMonth->pengeluaran, 0, ",", ".") ?></h5>
            </div>
          </div>
          <div class="mt-3 pt-3 border-top">
            <small class="text-muted">
              <i class="bi bi-calendar-minus me-1"></i>
              <?= date('F Y', strtotime('-1 month')) ?>
            </small>
          </div>
        </div>
      </div>

      <!-- Total Expense -->
      <div class="col-xxl-4 col-xl-12">
        <div class="dashboard-card expense">
          <div class="d-flex align-items-center">
            <div class="card-icon">
              <i class="bi bi-wallet"></i>
            </div>
            <div class="ps-3">
              <p class="text-muted mb-1 small">Total Semua Pengeluaran</p>
              <h5 class="mb-0 fw-bold text-danger">Rp<?= number_format($sumPengeluaran->pengeluaran, 0, ",", ".") ?></h5>
            </div>
          </div>
          <div class="mt-3 pt-3 border-top">
            <small class="text-muted">
              <i class="bi bi-bar-chart-line me-1"></i>
              Akumulasi keseluruhan
            </small>
          </div>
        </div>
      </div>
    </div>

    <!-- Quick Actions -->
    <div class="row mb-2">
      <div class="col-12">
        <h6 class="text-muted mb-3">
          <i class="bi bi-lightning-charge text-warning me-2"></i>
          Aksi Cepat
        </h6>
      </div>
    </div>

    <div class="row g-4">
      <div class="col-md-6 col-lg-3">
        <a href="<?= base_url() ?>kas-masuk/create" class="text-decoration-none">
          <div class="card card-modern text-center p-4">
            <div class="mb-3">
              <span class="rounded-circle d-inline-flex align-items-center justify-content-center"
                style="width: 60px; height: 60px; background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);">
                <i class="bi bi-plus-circle text-white fs-4"></i>
              </span>
            </div>
            <h6 class="mb-0">Tambah Kas Masuk</h6>
          </div>
        </a>
      </div>
      <div class="col-md-6 col-lg-3">
        <a href="<?= base_url() ?>kas-keluar/create" class="text-decoration-none">
          <div class="card card-modern text-center p-4">
            <div class="mb-3">
              <span class="rounded-circle d-inline-flex align-items-center justify-content-center"
                style="width: 60px; height: 60px; background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);">
                <i class="bi bi-dash-circle text-white fs-4"></i>
              </span>
            </div>
            <h6 class="mb-0">Tambah Kas Keluar</h6>
          </div>
        </a>
      </div>
      <div class="col-md-6 col-lg-3">
        <a href="<?= base_url() ?>rekapitulasi" class="text-decoration-none">
          <div class="card card-modern text-center p-4">
            <div class="mb-3">
              <span class="rounded-circle d-inline-flex align-items-center justify-content-center"
                style="width: 60px; height: 60px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                <i class="bi bi-file-earmark-bar-graph text-white fs-4"></i>
              </span>
            </div>
            <h6 class="mb-0">Lihat Rekapitulasi</h6>
          </div>
        </a>
      </div>
      <div class="col-md-6 col-lg-3">
        <a href="<?= base_url() ?>profile" class="text-decoration-none">
          <div class="card card-modern text-center p-4">
            <div class="mb-3">
              <span class="rounded-circle d-inline-flex align-items-center justify-content-center"
                style="width: 60px; height: 60px; background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);">
                <i class="bi bi-person-gear text-white fs-4"></i>
              </span>
            </div>
            <h6 class="mb-0">Pengaturan Profil</h6>
          </div>
        </a>
      </div>
    </div>

  </section>

</main>