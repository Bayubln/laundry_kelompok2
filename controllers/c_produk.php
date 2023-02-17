<?php

include_once 'c_koneksi.php';

class c_produk{

    function tampil(){

        $conn = new c_koneksi();

        $sql = "SELECT tb_paket.id, tb_paket.nama AS nama_paket, tb_paket.username, tb_outlet.nama AS outlet_nama, tb_user.role FROM tb_user JOIN tb_outlet ON tb_user.id_outlet = tb_outlet.id ORDER BY tb_outlet.nama ASC";

        $query = mysqli_query($conn->koneksi(), $sql);

        while($q = mysqli_fetch_object($query) ){

            $hasil[] = $q;
    }

        return $hasil;
}

    function insert($id,$id_outlet,$jenis,$nama_paket,$harga){

        $conn = new c_koneksi();

        $sql = "INSERT INTO tb_user VALUES ('$id','$id_outlet','$jenis','$nama_paket','$harga')";

        $query = mysqli_query($conn->koneksi(),$sql);


        if ($query) {
            echo "<script>alert('Data Berhasil Ditambahkan');window.location='../views/produk/v_list_produk.php'</script>";
         }

         else{

            echo "data gagal ditambahkan";
         }

    }

    function edit($id){

        $conn = new c_koneksi();
        
        $sql = "SELECT tb_user.id, tb_user.nama AS user_nama, tb_user.username, tb_outlet.nama AS outlet_nama, tb_user.role FROM tb_user JOIN tb_outlet ON tb_user.id_outlet = tb_outlet.id WHERE tb_user.id=$id";
        $query = mysqli_query($conn->koneksi(),$sql);

        
        while ($q = mysqli_fetch_object($query)) {
                
        $hasil[] = $q;

        }

        return $hasil;
    }

    function update($id, $nama, $username, $password,$id_outlet,$role){

        $conn = new c_koneksi();

        $sql = "UPDATE tb_paket SET  nama='$nama', password='$password', id_outlet='$id_outlet', role=$role WHERE id='$id'";

        $query = mysqli_query($conn->koneksi(), $sql);
        

        if ($query) {

            echo "<script>alert('Data Berhasil Di Ubah');window.location='../views/produk/v_list_produk.php'</script>";

         }

         else{

            echo "data gagal diubah";
         }


    }

    function delete($id){

        $conn = new c_koneksi();

        $query = "DELETE FROM tb_paket WHERE id = $id";

        mysqli_query($conn->koneksi(),$query);

        header("location:../views/produk/v_list_produk.php");
    }
    

}

?>