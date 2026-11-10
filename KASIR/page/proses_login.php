<?php
include("koneksi.php");

 if (isset($_POST['username']) && isset($_POST['password'])) {
     echo 'disini';
     $username = $_POST['username'];
     $password = $_POST['password'];

     $sql = "select * from user where username='$username' AND password='$password'";
     //$query = mysqli_query(mysql:$koneksi, query: $sql);

     //$jumlah = mysqli_num_rows(result: $query);
    // if ($jumlah > 0) {
         header(header: 'location: registrasi.php');
         echo 'halo disini';
     } else {
         header(header: 'Location: login.php?error=login');
     }
 //} else {
     echo 'username dan password harus diisi';
 //}
?>