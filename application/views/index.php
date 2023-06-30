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
    <div class="row">
      <div class="col-lg-12">
        <div class="row">
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card sales-card">
              <div class="card-body">
                <h5 class="card-title">Penerimaan <span>| Bulan Ini</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-cash"></i>
                  </div>
                  <div class="ps-3">
                    <h6>Rp<?= number_format($sumPenerimaanThisMonth->pemasukan, 0, ",", ".") ?></h6>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card revenue-card">
              <div class="card-body">
                <h5 class="card-title">Penerimaan <span>| Bulan Lalu</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-cash"></i>
                  </div>
                  <div class="ps-3">
                    <h6>Rp<?= number_format($sumPenerimaanLastMonth->pemasukan, 0, ",", ".") ?></h6>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <div class="col-xxl-4 col-xl-12">

            <div class="card info-card customers-card">
              <div class="card-body">
                <h5 class="card-title">Semua Penerimaan</h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-cash"></i>
                  </div>
                  <div class="ps-3">
                    <h6>Rp<?= number_format($sumPenerimaan->pemasukan, 0, ",", ".") ?></h6>

                  </div>
                </div>

              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="row">
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card sales-card">
              <div class="card-body">
                <h5 class="card-title">Pengeluaran <span>| Bulan Ini</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-cash-stack"></i>
                  </div>
                  <div class="ps-3">
                    <h6>Rp<?= number_format($sumPengeluaranThisMonth->pengeluaran, 0, ",", ".") ?></h6>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card revenue-card">
              <div class="card-body">
                <h5 class="card-title">Pengeluaran <span>| Bulan Lalu</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-cash-stack"></i>
                  </div>
                  <div class="ps-3">
                    <h6>Rp<?= number_format($sumPengeluaranLastMonth->pengeluaran, 0, ",", ".") ?></h6>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <div class="col-xxl-4 col-xl-12">

            <div class="card info-card customers-card">
              <div class="card-body">
                <h5 class="card-title">Semua Pengeluaran</h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-cash-stack"></i>
                  </div>
                  <div class="ps-3">
                    <h6>Rp<?= number_format($sumPengeluaran->pengeluaran, 0, ",", ".") ?></h6>
                  </div>
                </div>

              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

</main>