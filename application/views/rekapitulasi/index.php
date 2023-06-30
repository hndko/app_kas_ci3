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
          Rekapitulasi
        </h5>
        <table class="table datatable">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Keterangan</th>
              <th scope="col">Pemasukan</th>
              <th scope="col">Pengeluaran</th>
              <th scope="col">Saldo</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1; ?>
            <?php $saldo = 0 ?>
            <?php foreach ($result as $res) : ?>
              <tr>
                <th scope="row"><?= $no++ ?></th>
                <td><?= $res->tanggal ?></td>
                <td><?= $res->keterangan ?></td>
                <td>Rp <?= number_format($res->pemasukan, 0, ",", ".")  ?></td>
                <td>Rp <?= number_format($res->pengeluaran, 0, ",", ".")  ?></td>
                <td>
                  <?php
                  if ($res->pemasukan != null) {
                    $saldo += $res->pemasukan;
                  } else {
                    $saldo -= $res->pengeluaran;
                  }
                  ?>

                  Rp <?= number_format($saldo, 0, ",", ".")  ?>
                </td>
              </tr>
            <?php endforeach; ?>
            <tr>
              <td>Total</td>
              <td></td>
              <td></td>
              <td>Rp <?= number_format($sumMasuk->pemasukan, 0, ",", ".") ?></td>
              <td>Rp <?= number_format($sumKeluar->pengeluaran, 0, ",", ".") ?></td>
              <td>Rp <?= number_format(($sumMasuk->pemasukan - $sumKeluar->pengeluaran), 0, ",", ".") ?></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

</main>