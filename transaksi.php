<?php
    include('koneksi.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>TRANSAKSI</title>
</head>
<body>

<?php
    include ('tampilan/header.php');
    include ('tampilan/footer.php');
    include ('tampilan/sidebar.php');
?>

<div class="main-content bg-primary">
    <section class="section">
        <div class="section-header">
            <h1>TRANSAKSI</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item text-primary">Transaksi</div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>TRANSAKSI PEMBAYARAN</h3>
                        <div class="card-header-form">
                            <form action="proses_transaksi.php" method="post">
                        </div>
                    </div>

                    <!-- Form input -->
                    

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">NIS</span>
                        </div>
                        <input type="text" name="nis" class="form-control" placeholder="nis">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Tanggal Bayar</span>
                        </div>
                        <input type="date" name="tgl_bayar" class="form-control">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text">Bulan Bayar</label>
                        </div>
                        <select class="custom-select" name="bulan_dibayar">
                            <option selected>--pilih bulan--</option>
                            <option value="Januari">Januari</option>
                            <option value="Februari">Februari</option>
                            <option value="Maret">Maret</option>
                            <option value="April">April</option>
                            <option value="Mei">Mei</option>
                            <option value="Juni">Juni</option>
                            <option value="Juli">Juli</option>
                            <option value="Agustus">Agustus</option>
                            <option value="September">September</option>
                            <option value="Oktober">Oktober</option>
                            <option value="November">November</option>
                            <option value="Desember">Desember</option>
                        </select>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text">Tahun Bayar</label>
                        </div>
                        <select class="custom-select" name="tahun_dibayar">
                            <option selected>--pilih tahun--</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                        </select>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">ID SPP</span>
                        </div>
                        <input type="text" name="id_spp" class="form-control" placeholder="id spp">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Jumlah</span>
                        </div>
                        <input type="text" name="jumlah_bayar" class="form-control" placeholder="jumlah bayar">
                    </div>

                    <!-- Tambahan input BANK -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text">Bank</label>
                        </div>
                        <select class="custom-select" name="bank">
                            <option selected>--pilih bank--</option>
                            <option value="BRI">BRI-000501192247506-</option>
                            <option value="BNI">BNI--</option>
                            <option value="BCA">BCA--</option>
                            <option value="Mandiri">Mandiri--</option>
                            <option value="BSI">BSI-000501192247506-</option>
                            <option value="Dana">DANA-083839421020-</option>
                        </select>
                    </div>

                    <!-- Tombol submit -->
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-success">Bayar</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </section>
</div>

</body>
</html>
