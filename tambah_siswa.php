<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
?>
<!DOCTYPE html>
<html>
<head>
  <title>Tambah Santri</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <style>
    .form-control:focus {
      border-color: #80bdff;
      box-shadow: 0 0 0 0.2rem rgba(0,123,255,.25);
    }
    .wizard-step {
      text-align: center;
      padding: 20px;
    }
    .wizard-step-icon {
      font-size: 2rem;
      color: #fff;
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
  <?php
    include ('tampilan/header.php');
    include ('tampilan/sidebar.php');
  ?>

<div class="main-content bg-primary">
  <section class="section">
    <div class="section-header">
      <h1>TAMBAH SANTRI</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="dashboard.php">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="siswa.php">Data Santri</a></div>
        <div class="breadcrumb-item text-primary">Tambah Santri</div>
      </div>
    </div>
    
    <div class="row">
      <div class="col-12">
        <div class="card bg-primary">
          <div class="card-body bg-primary">
            <div class="row mt-4">
              <div class="col-12 col-lg-8 offset-lg-2">
                <div class="wizard-steps">
                  <div class="wizard-step wizard-step-active">
                    <div class="wizard-step-icon">
                      <i class="fas fa-school"></i>
                    </div>
                    <div class="wizard-step-label text-white">
                      Formulir Santri
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <form class="wizard-content mt-2" method="post" action="proses_tambahsiswa.php" id="formTambahSiswa">
              <div class="wizard-pane">
                
                <!-- NISN -->
                <div class="form-group row align-items-center mb-3">
                  <label class="col-md-4 text-md-right text-white">NIS<span class="text-warning">*</span></label>
                  <div class="col-lg-4 col-md-6">
                    <input type="text" name="nis" class="form-control" required placeholder="Masukkan NIS">
                    <small class="text-light">Nomor Induk Santri</small>
                  </div>
                </div>
                
                <!-- NIS -->
                <div class="form-group row align-items-center mb-3">
                  <label class="col-md-4 text-md-right text-white">KOBONG <span class="text-warning">*</span></label>
                  <div class="col-lg-4 col-md-6">
                    <input type="text" name="nis" class="form-control" required placeholder="Masukkan Kobong">
                    <small class="text-light">Nama Kobong</small>
                  </div>
                </div>
                
                <!-- NAMA -->
                <div class="form-group row align-items-center mb-3">
                  <label class="col-md-4 text-md-right text-white">NAMA <span class="text-warning">*</span></label>
                  <div class="col-lg-4 col-md-6">
                    <input type="text" name="nama" class="form-control" required placeholder="Masukkan Nama Lengkap">
                  </div>
                </div>
                
                <!-- KELAS -->
                <div class="form-group row align-items-center mb-3">
                  <label class="col-md-4 text-md-right text-white">KELAS <span class="text-warning">*</span></label>
                  <div class="col-lg-4 col-md-6">
                    <select class="form-control form-select" name="id_kelas" id="selectKelas" required>
                      <option value="">-- Pilih Kelas --</option>
                      <?php
                      $query_kelas = "SELECT * FROM kelas ORDER BY nama_kelas ASC";
                      $result_kelas = mysqli_query($koneksi, $query_kelas);
                      if(!$result_kelas){
                        die ("Query Error: ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
                      }
                      while($row_kelas = mysqli_fetch_assoc($result_kelas)){
                      ?>
                      <option value="<?php echo $row_kelas['id_kelas']; ?>">
                        <?php echo $row_kelas['nama_kelas']; ?> 
                        <?php if(isset($row_kelas['kompetensi_keahlian'])): ?>
                          - <?php echo $row_kelas['kompetensi_keahlian']; ?>
                        <?php endif; ?>
                      </option>
                      <?php } ?>
                    </select>
                    <small class="text-light">Pilih kelas untuk siswa</small>
                  </div>
                </div>
                
                <!-- ALAMAT -->
                <div class="form-group row align-items-center mb-3">
                  <label class="col-md-4 text-md-right text-white">ALAMAT</label>
                  <div class="col-lg-4 col-md-6">
                    <textarea name="alamat" class="form-control" rows="3" placeholder="Masukkan Alamat Lengkap"></textarea>
                  </div>
                </div>
                
                <!-- NO TELP -->
                <div class="form-group row align-items-center mb-3">
                  <label class="col-md-4 text-md-right text-white">NO TELP</label>
                  <div class="col-lg-4 col-md-6">
                    <input type="text" name="no_telp" class="form-control" placeholder="Masukkan Nomor Telepon">
                    <small class="text-light">Format: 08xxxxxxxxxx</small>
                  </div>
                </div>
                
                <!-- SPP -->
                <div class="form-group row align-items-center mb-3">
                  <label class="col-md-4 text-md-right text-white">SPP <span class="text-warning">*</span></label>
                  <div class="col-lg-4 col-md-6">
                    <select class="form-control form-select" name="id_spp" id="selectSPP" required>
                      <option value="">-- Pilih SPP --</option>
                      <?php
                      $query_spp = "SELECT * FROM spp ORDER BY tahun DESC";
                      $result_spp = mysqli_query($koneksi, $query_spp);
                      if(!$result_spp){
                        die ("Query Error: ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
                      }
                      while($row_spp = mysqli_fetch_assoc($result_spp)){
                      ?>
                      <option value="<?php echo $row_spp['id_spp']; ?>">
                        Tahun <?php echo $row_spp['tahun']; ?>
                        <?php if(isset($row_spp['nominal'])): ?>
                          - Rp. <?php echo number_format($row_spp['nominal'], 0, ',', '.'); ?>
                        <?php endif; ?>
                      </option>
                      <?php } ?>
                    </select>
                    <small class="text-light">Pilih tahun SPP</small>
                  </div>
                </div>

                <!-- TOMBOL AKSI -->
                <div class="form-group row mt-4">
                  <div class="col-md-4"></div>
                  <div class="col-lg-4 col-md-6">
                    <div class="d-flex gap-2">
                      <button type="submit" name="simpan" class="btn btn-success btn-lg flex-fill">
                        <i class="fas fa-save"></i> SIMPAN DATA
                      </button>
                      <button type="submit" name="kirim" class="btn btn-primary btn-lg flex-fill">
                        <i class="fas fa-paper-plane"></i> KIRIM
                      </button>
                      <a href="siswa.php" class="btn btn-secondary btn-lg">
                        <i class="fas fa-arrow-left"></i> KEMBALI
                      </a>
                    </div>
                  </div>
                </div>

              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?php include ('tampilan/footer.php'); ?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
// Validasi form
document.getElementById('formTambahSiswa').addEventListener('submit', function(e) {
    const nisn = document.querySelector('input[name="nisn"]').value;
    const nis = document.querySelector('input[name="nis"]').value;
    const nama = document.querySelector('input[name="nama"]').value;
    const kelas = document.querySelector('select[name="id_kelas"]').value;
    const spp = document.querySelector('select[name="id_spp"]').value;
    
    if (!nisn || !nis || !nama || !kelas || !spp) {
        e.preventDefault();
        alert('Mohon lengkapi semua field yang wajib diisi (*)');
        return false;
    }
    
    if (!/^\d+$/.test(nisn)) {
        e.preventDefault();
        alert('NISN harus berupa angka');
        return false;
    }
    
    if (!/^\d+$/.test(nis)) {
        e.preventDefault();
        alert('NIS harus berupa angka');
        return false;
    }
    
    if (!confirm('Apakah data yang dimasukkan sudah benar?')) {
        e.preventDefault();
        return false;
    }
});

document.getElementById('selectKelas').addEventListener('change', function() {
    this.style.backgroundColor = this.value ? '#e8f5e8' : '';
});

document.getElementById('selectSPP').addEventListener('change', function() {
    this.style.backgroundColor = this.value ? '#e8f5e8' : '';
});

document.querySelector('input[name="no_telp"]').addEventListener('input', function() {
    let value = this.value.replace(/\D/g, '');
    if (value.length > 0 && !value.startsWith('0')) {
        value = '0' + value;
    }
    this.value = value;
});
</script>
</body>
</html>
