<?php

include_once '../controllers/c_produk.php';

$produk = new c_produk();

try {
    if (isset($_POST['tambah']) || isset($_POST['update'])) {

        $id = $_POST['id'];
        $id_outlet = $_POST['id_outlet'];
        $kode_invoice = $_POST['kode_invoice'];
        $id_member = $_POST['id_member'];
        $tgl = $_POST['tgl'];
        $batas_waktu = $_POST['batas_waktu'];
        $tanggal_bayar = $_POST['tanggal_bayar'];
        $status = $_POST['status'];
        $dibayar = $_POST['dibayar'];
        $id_user = $_POST['id_user'];
        $id_paket = $_POST['id_paket'];
        $qty = $_POST['qty'];
        $keterangan = $_POST['keterangan'];

        if ($_GET['aksi'] == 'tambah') {

            //memanggil method insert
            $produk->insert($id, $outlet, $jenis, $paket, $harga);
        } elseif ($_GET['aksi'] == 'update') {

            //memanggil method update
            $produk->update($id, $outlet, $jenis, $paket, $harga);
        }
    } elseif ($_GET['aksi'] == 'hapus') {

        $id = $_GET['id'];

        $produk->delete($id);
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
