<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  include ('tampilan/header.php');
  include ('tampilan/sidebar.php');
  include ('tampilan/footer.php');
?>
 <!-- Main Content -->
      <div class="main-content bg-primary">
        <section class="section">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-stats">
                  <div class="card-stats-title">DATA KELAS -
                    <div class="dropdown d-inline">
                      <a class="font-weight-600 dropdown-toggle" data-toggle="dropdown" href="#" id="orders-month">KITAB KUNING</a>
                      <ul class="drop down-menu dropdown-menu-sm">
                        <li class="dropdown-title">TAHFIDZ</li>
                        <li><a href="kelas.php" class="dropdown-title">KITAB KUNING</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-stats-items">
                    <div class="card-stats-item">
                      <div class="card-stats-item-count">33</div>
                      <div class="card-stats-item-label">Santri</div>
                    </div>
                    <div class="card-stats-item">
                      <div class="card-stats-item-count">12</div>
                      <div class="card-stats-item-label">B Lunas</div>
                    </div>
                    <div class="card-stats-item">
                      <div class="card-stats-item-count">21</div>
                      <div class="card-stats-item-label">Lunas</div>
                    </div>
                  </div>
                </div>
                <div class="card-icon shadow-info bg-primary">
                  <i class="fas fa-users"></i>
                
        </section>
      </div>
    </div>
  </div>
</body>
