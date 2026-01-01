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

  <section class="section">
    <!-- Summary Cards -->
    <div class="row g-4 mb-4">
      <div class="col-lg-4">
        <div class="dashboard-card income">
          <div class="d-flex align-items-center">
            <div class="card-icon">
              <i class="bi bi-arrow-down-circle"></i>
            </div>
            <div class="ps-3">
              <p class="text-muted mb-1 small">Total Pemasukan</p>
              <h4 class="mb-0 fw-bold text-success">Rp<?= number_format($sumMasuk->pemasukan, 0, ",", ".") ?></h4>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="dashboard-card expense">
          <div class="d-flex align-items-center">
            <div class="card-icon">
              <i class="bi bi-arrow-up-circle"></i>
            </div>
            <div class="ps-3">
              <p class="text-muted mb-1 small">Total Pengeluaran</p>
              <h4 class="mb-0 fw-bold text-danger">Rp<?= number_format($sumKeluar->pengeluaran, 0, ",", ".") ?></h4>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <?php $saldoAkhir = $sumMasuk->pemasukan - $sumKeluar->pengeluaran; ?>
        <div class="dashboard-card" style="<?= $saldoAkhir >= 0 ? '' : '--before-bg: var(--warning-gradient);' ?>">
          <div class="d-flex align-items-center">
            <div class="card-icon" style="background: <?= $saldoAkhir >= 0 ? 'linear-gradient(135deg, #4facfe 0%, #00f2fe 100%)' : 'linear-gradient(135deg, #f093fb 0%, #f5576c 100%)' ?>;">
              <i class="bi bi-wallet2"></i>
            </div>
            <div class="ps-3">
              <p class="text-muted mb-1 small">Saldo Akhir</p>
              <h4 class="mb-0 fw-bold <?= $saldoAkhir >= 0 ? 'text-primary' : 'text-danger' ?>">
                Rp<?= number_format($saldoAkhir, 0, ",", ".") ?>
              </h4>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Rekapitulasi Table -->
    <div class="card card-modern">
      <div class="card-header-modern">
        <h5>
          <i class="bi bi-file-earmark-bar-graph"></i>
          Laporan Rekapitulasi Kas
        </h5>
        <button class="btn btn-outline-primary btn-sm" onclick="window.print()">
          <i class="bi bi-printer me-1"></i> Cetak
        </button>
      </div>

      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-hover datatable">
            <thead class="table-light">
              <tr>
                <th scope="col" width="50">#</th>
                <th scope="col">
                  <i class="bi bi-calendar3 me-1"></i>Tanggal
                </th>
                <th scope="col">
                  <i class="bi bi-card-text me-1"></i>Keterangan
                </th>
                <th scope="col" class="text-end">
                  <i class="bi bi-arrow-down-circle text-success me-1"></i>Pemasukan
                </th>
                <th scope="col" class="text-end">
                  <i class="bi bi-arrow-up-circle text-danger me-1"></i>Pengeluaran
                </th>
                <th scope="col" class="text-end">
                  <i class="bi bi-wallet me-1"></i>Saldo
                </th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1; ?>
              <?php $saldo = 0 ?>
              <?php foreach ($result as $res) : ?>
                <tr>
                  <td class="text-muted"><?= $no++ ?></td>
                  <td>
                    <span class="badge bg-light text-dark">
                      <i class="bi bi-calendar-event me-1"></i>
                      <?= date('d M Y', strtotime($res->tanggal)) ?>
                    </span>
                  </td>
                  <td><?= $res->keterangan ?></td>
                  <td class="text-end">
                    <?php if ($res->pemasukan): ?>
                      <span class="fw-semibold text-success">
                        +Rp<?= number_format($res->pemasukan, 0, ",", ".") ?>
                      </span>
                    <?php else: ?>
                      <span class="text-muted">-</span>
                    <?php endif; ?>
                  </td>
                  <td class="text-end">
                    <?php if ($res->pengeluaran): ?>
                      <span class="fw-semibold text-danger">
                        -Rp<?= number_format($res->pengeluaran, 0, ",", ".") ?>
                      </span>
                    <?php else: ?>
                      <span class="text-muted">-</span>
                    <?php endif; ?>
                  </td>
                  <td class="text-end">
                    <?php
                    if ($res->pemasukan != null) {
                      $saldo += $res->pemasukan;
                    } else {
                      $saldo -= $res->pengeluaran;
                    }
                    ?>
                    <span class="fw-bold <?= $saldo >= 0 ? 'text-primary' : 'text-danger' ?>">
                      Rp<?= number_format($saldo, 0, ",", ".") ?>
                    </span>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
            <tfoot class="table-light">
              <tr class="fw-bold">
                <td colspan="3" class="text-end">
                  <i class="bi bi-calculator me-1"></i>Total:
                </td>
                <td class="text-end text-success">
                  Rp<?= number_format($sumMasuk->pemasukan, 0, ",", ".") ?>
                </td>
                <td class="text-end text-danger">
                  Rp<?= number_format($sumKeluar->pengeluaran, 0, ",", ".") ?>
                </td>
                <td class="text-end <?= $saldoAkhir >= 0 ? 'text-primary' : 'text-danger' ?>">
                  Rp<?= number_format($saldoAkhir, 0, ",", ".") ?>
                </td>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </section>

</main>