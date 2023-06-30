<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link <?= $title == 'Dashboard' ? '' : 'collapsed' ?>" href="<?= base_url() ?>">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link <?= $title == 'Penerimaan Kas' ? '' : 'collapsed' ?>" href="<?= base_url() ?>kas-masuk">
        <i class="bi bi-plus-circle-dotted"></i>
        <span>Penerimaan Kas</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link <?= $title == 'Pengeluaran Kas' ? '' : 'collapsed' ?>" href="<?= base_url() ?>kas-keluar">
        <i class="bi bi-dash-circle-dotted"></i>
        <span>Pengeluaran Kas</span>
      </a>

    <li class="nav-item">
      <a class="nav-link <?= $title == 'Rekapitulasi' ? '' : 'collapsed' ?>" href="<?= base_url() ?>rekapitulasi">
        <i class="bi bi-file-earmark-bar-graph"></i>
        <span>Rekapitulasi</span>
      </a>
    </li>
  </ul>

</aside>