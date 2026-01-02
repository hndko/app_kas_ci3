  <!-- Back to Top Button -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
    <i class="bi bi-arrow-up-short text-white"></i>
  </a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url() ?>assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>assets/vendor/chart.js/chart.umd.js"></script>
  <script src="<?= base_url() ?>assets/vendor/echarts/echarts.min.js"></script>
  <script src="<?= base_url() ?>assets/vendor/quill/quill.min.js"></script>
  <script src="<?= base_url() ?>assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="<?= base_url() ?>assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="<?= base_url() ?>assets/vendor/php-email-form/validate.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url() ?>assets/js/main.js"></script>

  <!-- Custom Scripts -->
  <script>
    $(document).ready(function() {
      // Auto close alerts after 3 seconds
      setTimeout(function() {
        $(".alert").alert('close');
      }, 3000);

      // Add loading animation to buttons on form submit
      $('form').on('submit', function() {
        $(this).find('button[type="submit"]').prop('disabled', true).html(
          '<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>Memproses...'
        );
      });
    });
  </script>

  </body>

  </html>