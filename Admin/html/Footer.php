<!-- Footer -->
<footer class="content-footer footer bg-footer-theme" style="margin-top: 40px;">
  <div class="container-xxl d-flex flex-wrap justify-content-between py-3 flex-md-row flex-column">
    <div class="mb-2 mb-md-0">
      <a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/" 
         target="_blank" 
         class="footer-link fw-semibold me-4 d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-code-square me-2" viewBox="0 0 16 16">
          <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
          <path d="M6.854 4.646a.5.5 0 0 1 0 .708L4.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0zm2.292 0a.5.5 0 0 0 0 .708L11.793 8l-2.647 2.646a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708 0z"/>
        </svg>
        Developed by TYIT
      </a>
    </div>
    <div class="text-muted small">
      © <script>document.write(new Date().getFullYear())</script> All Rights Reserved
    </div>
  </div>
</footer>
<!-- / Footer -->

<div class="content-backdrop fade"></div>
</div>
<!-- Content wrapper -->
</div>
<!-- / Layout page -->
</div>

<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>
</div>
<!-- / Layout wrapper -->

<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="../assets/vendor/libs/jquery/jquery.js"></script>
<script src="../assets/vendor/libs/popper/popper.js"></script>
<script src="../assets/vendor/js/bootstrap.js"></script>
<script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="../assets/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

<!-- Main JS -->
<script src="../assets/js/main.js"></script>

<!-- Page JS -->
<script src="../assets/js/dashboards-analytics.js"></script>

<!-- GitHub Buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

<!-- Smooth scroll behavior polyfill -->
<script src="https://unpkg.com/smoothscroll-polyfill@0.4.4/dist/smoothscroll.min.js"></script>

<!-- Custom Scripts -->
<script>
  // Initialize tooltips
  $(function () {
    $('[data-bs-toggle="tooltip"]').tooltip()
  });
  
  // Current year for copyright
  document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("current-year").textContent = new Date().getFullYear();
  });
</script>
</body>
</html>