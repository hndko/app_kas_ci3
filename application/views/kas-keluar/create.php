<main id="main" class="main">

    <div class="pagetitle">
        <h1><?= $title ?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url() ?>kas-keluar">Kas Keluar</a></li>
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
                            <i class="bi bi-dash-circle"></i>
                            Tambah Data Kas Keluar
                        </h5>
                        <button type="button" class="btn btn-modern-warning btn-sm" onclick="history.back()">
                            <i class="bi bi-arrow-left-circle me-1"></i> Kembali
                        </button>
                    </div>

                    <div class="card-body">
                        <form action="<?= base_url() ?>kas-keluar/create" method="post">
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
                                        value="<?= set_value('tanggal', date('Y-m-d')) ?>">
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
                                    Jumlah Pengeluaran (Rp)
                                </label>
                                <div class="input-icon-wrapper">
                                    <input type="number"
                                        name="jumlah"
                                        id="jumlah"
                                        class="form-control"
                                        placeholder="Contoh: 250000"
                                        autocomplete="off"
                                        value="<?= set_value('jumlah') ?>">
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
                                    placeholder="Tuliskan keterangan pengeluaran..."><?= set_value('keterangan') ?></textarea>
                                <?php if (form_error('keterangan')): ?>
                                    <small class="text-danger"><i class="bi bi-exclamation-circle me-1"></i><?= form_error('keterangan') ?></small>
                                <?php endif; ?>
                            </div>

                            <!-- Submit Button -->
                            <div class="d-flex justify-content-end gap-2 mt-4">
                                <button type="reset" class="btn btn-outline-secondary">
                                    <i class="bi bi-x-circle me-1"></i> Reset
                                </button>
                                <button type="submit" class="btn btn-modern-primary">
                                    <i class="bi bi-check-circle me-1"></i> Simpan Data
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Tips Sidebar -->
            <div class="col-lg-4">
                <div class="card card-modern">
                    <div class="card-body">
                        <h5 class="card-title">
                            <i class="bi bi-info-circle text-primary"></i> Informasi
                        </h5>
                        <ul class="list-unstyled">
                            <li class="mb-2">
                                <i class="bi bi-arrow-right-circle text-primary me-2"></i>
                                Catat semua pengeluaran dengan detail
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-arrow-right-circle text-primary me-2"></i>
                                Simpan bukti transaksi jika ada
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-arrow-right-circle text-primary me-2"></i>
                                Review laporan secara berkala
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>