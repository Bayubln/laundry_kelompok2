<?php

include_once '../controllers/c_pengguna.php';

$outlet = new c_pengguna();

try {
    if (isset($_POST['tambah']) || isset($_POST['update'])) {        
    
    $id = $_POST['id']; 
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id_outlet = $_POST['id_outlet'];
    $role = $_POST['role'];   

        if ($_GET['aksi'] == 'tambah') {

            //memanggil method insert
            $outlet->insert ($id,$nama,$username,$password,$id_outlet,$role);

        } elseif ($_GET['aksi'] == 'update') {

            //memanggil method update
            $outlet->update ($id,$nama,$username,$password,$id_outlet,$role);

        }
    }elseif ($_GET['aksi'] == 'hapus') {

            $id = $_GET['id'];

            $outlet->delete($id);
        }
    } 
    catch (Exception $e) {
        echo $e->getMessage();
    }


?>