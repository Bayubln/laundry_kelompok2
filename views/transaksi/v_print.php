<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laporan Transaksi</title>
      <link rel="icon" type="image/x-icon" href="img/favoicon/icon3.ico">
</head>

<body>
    </a>
    <div class="row">
        <div class="col-2">
        </div>
        <div class="col-8">
            <br>
            <center>
            <?php 
                            if (isset($_POST['generate'])) {
                                if (isset($_POST['transaksi'])) { ?>
                <h1>Laporan Semua Transaksi</h1>
            </center>
                <table  border="1" cellspacing="0" cellpadding="10" width="100%">
                    <center>
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Kode Invoice</th>
                                <th scope="col">Tgl Transaksi</th>
                                <th scope="col">Tgl Pembayaran</th>
                                <th scope="col">Nama Pelanggan</th>
                                <th scope="col">Paket</th>
                                <th scope="col">Qty</th>
                                <th scope="col">Total</th>
                                <th scope="col">Status</th>
                                <th scope="col">Pembayaran</th>
                            </tr>
                        </thead>
                    </center>
                    <tbody>
                        <?php
$no = 1;
// manampilkan data dari method atau function tampil_data()
foreach ($transaksi->tampil_data() as $data) {
?>
                        <tr>
                        <tbody>
                <?php 
                $nomor = 1;
                foreach ($transaksi->tampil() as $t) { 
                ?>
                <tr>
                  <th scope="row"><?= $nomor++ ?></th>
                  <td><?= $t->kode_invoice ?></td>
                  <td><?= $t->member_nama ?></td>
                  <td><?= $t->tgl ?></td>
                  <td><?= $t->batas_waktu ?></td>
                  <td><?= $t->status ?></td>
                  <td><?= $t->dibayar ?></td>
                        </tr>
                        <?php }} else {
                            echo '<script>';
                            echo 'alert("Pilih Metode Laporan dulu");';
                            echo 'document.location.href="v_laporan.php"';
                            echo '</script>';
                        }}?>
                    </tbody>
                </table>
        </div>
        <div class="col-2">
        </div>
    </div>
    <script>window.print();</script>
</body>

</html>