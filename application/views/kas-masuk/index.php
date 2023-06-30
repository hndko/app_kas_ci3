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
          History Kas Masuk
          <button type="button" class="btn btn-primary btn-sm" onclick="location.href='<?= base_url() ?>kas-masuk/create'">
            <i class="bi bi-plus-square"></i> Tambah
          </button>
        </h5>
        <?php if ($this->session->flashdata('success')) : ?>
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= $this->session->flashdata('message') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        <?php endif; ?>
        <table class="table datatable">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Keterangan</th>
              <th scope="col">Pemasukan</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1; ?>
            <?php foreach ($result as $res) : ?>
              <tr>
                <th scope="row"><?= $no++ ?></th>
                <td><?= $res->tanggal ?></td>
                <td><?= $res->keterangan ?></td>
                <td>Rp <?= number_format($res->pemasukan, 0, ",", ".")  ?></td>
                <td>
                  <button type="button" class="btn btn-success btn-sm" onclick="if (confirm('Apakah anda yakin ingin menghapus data ini?')) location.href='<?= base_url() ?>kas-masuk/edit/'+<?= $res->kas_id ?> ">
                    <i class="bi bi-pencil-square"></i>
                  </button>
                  <button type="button" class="btn btn-danger btn-sm" onclick="if (confirm('Apakah anda yakin ingin menghapus data ini?')) location.href='<?= base_url() ?>kas-masuk/delete/'+<?= $res->kas_id ?> ">
                    <i class="bi bi-trash3-fill"></i>
                  </button>
                </td>
              </tr>
            <?php endforeach; ?>
            <tr>
              <td>Total</td>
              <td class="d-none"></td>
              <td class="d-none"></td>
              <td>Rp <?= number_format($sumData->pemasukan, 0, ",", ".")  ?></td>
              <td class="d-none"></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

</main>