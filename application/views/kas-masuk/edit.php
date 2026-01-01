<main id="main" class="main">

    <div class="pagetitle">
        <h1><?= $title ?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url() ?>kas-masuk">Kas Masuk</a></li>
                <li class="breadcrumb-item active"><?= $title ?></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-8">
                <div class="card card-modern">
                    <div class="card-header-modern">
                        <h5>
                            <i class="bi bi-pencil-square"></i>
                            Edit Data Kas Masuk
                        </h5>
                        <button type="button" class="btn btn-modern-warning btn-sm" onclick="history.back()">
                            <i class="bi bi-arrow-left-circle me-1"></i> Kembali
                        </button>
                    </div>

                    <div class="card-body">
                        <form action="<?= base_url() ?>kas-masuk/edit/<?= $res->kas_id ?>" method="post">
                            <!-- Tanggal -->
                            <div class="form-row-modern">
                                <label class="form-label-modern">
                                    <i class="bi bi-calendar-event"></i>
                                    Tanggal Transaksi
                                </label>
                                <div class="input-icon-wrapper">
                                    <input type="date"
                                        name="tanggal"
                                        id="tanggal"
                                        class="form-control"
                                        value="<?= $res->tanggal ?>">
                                    <i class="bi bi-calendar3 input-icon-left"></i>
                                </div>
                                <?php if (form_error('tanggal')): ?>
                                    <small class="text-danger"><i class="bi bi-exclamation-circle me-1"></i><?= form_error('tanggal') ?></small>
                                <?php endif; ?>
                            </div>

                            <!-- Jumlah -->
                            <div class="form-row-modern">
                                <label class="form-label-modern">
                                    <i class="bi bi-cash-coin"></i>
                                    Jumlah Pemasukan (Rp)
                                </label>
                                <div class="input-icon-wrapper">
                                    <input type="number"
                                        name="jumlah"
                                        id="jumlah"
                                        class="form-control"
                                        placeholder="Contoh: 500000"
                                        autocomplete="off"
                                        value="<?= $res->pemasukan ?>">
                                    <i class="bi bi-currency-dollar input-icon-left"></i>
                                </div>
                                <?php if (form_error('jumlah')): ?>
                                    <small class="text-danger"><i class="bi bi-exclamation-circle me-1"></i><?= form_error('jumlah') ?></small>
                                <?php endif; ?>
                            </div>

                            <!-- Keterangan -->
                            <div class="form-row-modern">
                                <label class="form-label-modern">
                                    <i class="bi bi-card-text"></i>
                                    Keterangan
                                </label>
                                <textarea name="keterangan"
                                    id="keterangan"
                                    class="form-control"
                                    rows="4"
                                    placeholder="Tuliskan keterangan transaksi..."><?= $res->keterangan ?></textarea>
                                <?php if (form_error('keterangan')): ?>
                                    <small class="text-danger"><i class="bi bi-exclamation-circle me-1"></i><?= form_error('keterangan') ?></small>
                                <?php endif; ?>
                            </div>

                            <!-- Submit Button -->
                            <div class="d-flex justify-content-end gap-2 mt-4">
                                <button type="button" class="btn btn-outline-secondary" onclick="history.back()">
                                    <i class="bi bi-x-circle me-1"></i> Batal
                                </button>
                                <button type="submit" class="btn btn-modern-success">
                                    <i class="bi bi-check-circle me-1"></i> Update Data
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Info Sidebar -->
            <div class="col-lg-4">
                <div class="card card-modern">
                    <div class="card-body">
                        <h5 class="card-title">
                            <i class="bi bi-info-circle text-info"></i> Detail Transaksi
                        </h5>
                        <div class="d-flex flex-column gap-2">
                            <div class="d-flex justify-content-between">
                                <span class="text-muted">ID Transaksi</span>
                                <span class="fw-bold">#<?= $res->kas_id ?></span>
                            </div>
                            <div class="d-flex justify-content-between">
                                <span class="text-muted">Tanggal Input</span>
                                <span class="fw-bold"><?= date('d M Y', strtotime($res->tanggal)) ?></span>
                            </div>
                            <div class="d-flex justify-content-between">
                                <span class="text-muted">Jumlah</span>
                                <span class="fw-bold text-success">Rp<?= number_format($res->pemasukan, 0, ',', '.') ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>