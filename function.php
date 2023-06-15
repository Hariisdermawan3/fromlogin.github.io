<?php 
function daftar($data){
    global $koneksi;

    $username = strtolower(stripcslashes($data['username']));
    $password = mysqli_real_escape_string($koneksi, $data['password']);
    $password2 = mysqli_real_escape_string($koneksi, $data['password2']);


    //Cek Username
    $result = mysqli_query($koneksi, "SELECT username FROM regis WHERE
     username = '$username'");
    if(mysqli_fetch_assoc($result)) {
        echo "<script>
            alert('username sudah terdaftar');
             </script>";
             return false;
    }

    if($password !== $password2){
        echo "<script>
              alert('user gagal ditambahkan');
              </script>";
              return false;
    }
   //end skripsi password
   $password = password_hash($password, PASSWORD_DEFAULT);
  //Tambah user baru ke database
   mysqli_query($koneksi, "INSERT INTO regis VALUES('', '$username', '$password')");

   return mysqli_affected_rows($koneksi);
}

?>