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

    <section class="section dashboard">
        <div class="card">

            <div class="card-body">
                <h5 class="card-title d-flex justify-content-between">
                    Edit Data Kas keluar
                    <button type="button" class="btn btn-warning btn-sm" onclick="history.back()">
                        <i class="bi bi-skip-backward-circle"></i> Kembali
                    </button>
                </h5>
                <form action="<?= base_url() ?>kas-keluar/edit/<?= $res->kas_id ?>" method="post">
                    <div class="row mb-3">
                        <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                        <div class="col-sm-10">
                            <input type="date" name="tanggal" id="tanggal" class="form-control" value="<?= $res->tanggal ?>">
                            <small class="form-text text-danger"><?= form_error('tanggal') ?></small>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
                        <div class="col-sm-10">
                            <input type="number" name="jumlah" id="jumlah" class="form-control" autocomplete="off" value="<?= $res->pengeluaran ?>">
                            <small class="form-text text-danger"><?= form_error('jumlah') ?></small>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Keterangan</label>
                        <div class="col-sm-10">
                            <textarea name="keterangan" id="keterangan" class="form-control" cols="30" rows="4"><?= $res->keterangan ?></textarea>
                            <small class="form-text text-danger"><?= form_error('keterangan') ?></small>
                        </div>
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-success btn-sm">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

</main>