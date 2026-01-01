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
    <div class="card card-modern">
      <div class="card-header-modern">
        <h5>
          <i class="bi bi-arrow-down-circle"></i>
          Riwayat Kas Masuk
        </h5>
        <a href="<?= base_url() ?>kas-masuk/create" class="btn btn-modern-success btn-sm">
          <i class="bi bi-plus-circle me-1"></i> Tambah Data
        </a>
      </div>

      <div class="card-body">
        <!-- Flash Message -->
        <?php if ($this->session->flashdata('success')) : ?>
          <div class="alert alert-modern alert-success alert-dismissible fade show" role="alert">
            <i class="bi bi-check-circle-fill"></i>
            <?= $this->session->flashdata('message') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        <?php endif; ?>

        <!-- Summary Cards -->
        <div class="row g-3 mb-4">
          <div class="col-md-4">
            <div class="border rounded-3 p-3 bg-light">
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0">
                  <span class="rounded-circle d-inline-flex align-items-center justify-content-center bg-success bg-opacity-10"
                    style="width: 45px; height: 45px;">
                    <i class="bi bi-cash-coin text-success fs-5"></i>
                  </span>
                </div>
                <div class="flex-grow-1 ms-3">
                  <p class="text-muted mb-0 small">Total Pemasukan</p>
                  <h5 class="mb-0 text-success fw-bold">Rp<?= number_format($sumData->pemasukan, 0, ",", ".") ?></h5>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="border rounded-3 p-3 bg-light">
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0">
                  <span class="rounded-circle d-inline-flex align-items-center justify-content-center bg-primary bg-opacity-10"
                    style="width: 45px; height: 45px;">
                    <i class="bi bi-list-ol text-primary fs-5"></i>
                  </span>
                </div>
                <div class="flex-grow-1 ms-3">
                  <p class="text-muted mb-0 small">Jumlah Transaksi</p>
                  <h5 class="mb-0 text-primary fw-bold"><?= count($result) ?> Data</h5>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="border rounded-3 p-3 bg-light">
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0">
                  <span class="rounded-circle d-inline-flex align-items-center justify-content-center bg-info bg-opacity-10"
                    style="width: 45px; height: 45px;">
                    <i class="bi bi-calculator text-info fs-5"></i>
                  </span>
                </div>
                <div class="flex-grow-1 ms-3">
                  <p class="text-muted mb-0 small">Rata-rata</p>
                  <h5 class="mb-0 text-info fw-bold">Rp<?= count($result) > 0 ? number_format($sumData->pemasukan / count($result), 0, ",", ".") : 0 ?></h5>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Table -->
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
                <th scope="col">
                  <i class="bi bi-cash me-1"></i>Pemasukan
                </th>
                <th scope="col" width="120">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1; ?>
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
                  <td>
                    <span class="fw-semibold text-success">
                      Rp<?= number_format($res->pemasukan, 0, ",", ".") ?>
                    </span>
                  </td>
                  <td>
                    <div class="btn-group" role="group">
                      <a href="<?= base_url() ?>kas-masuk/edit/<?= $res->kas_id ?>"
                        class="btn btn-outline-primary btn-sm"
                        title="Edit">
                        <i class="bi bi-pencil"></i>
                      </a>
                      <button type="button"
                        class="btn btn-outline-danger btn-sm"
                        title="Hapus"
                        onclick="if (confirm('Apakah Anda yakin ingin menghapus data ini?')) location.href='<?= base_url() ?>kas-masuk/delete/<?= $res->kas_id ?>'">
                        <i class="bi bi-trash"></i>
                      </button>
                    </div>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>

</main>