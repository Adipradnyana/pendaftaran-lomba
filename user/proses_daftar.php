<?php
include "class_user.php";
$user = new user();

$data = array(
    'nama'          =>$_POST['nama'],
    'email'         =>$_POST['email'],
    'username'      =>$_POST['username'],
    'password'      =>$_POST['password'],
);

$exec = $user->tambah_data($data);
if($exec){
    echo "<script>alert('Behasil Mendaftar! Silahkan Login');
    window.location='login.php'</script>";
}else{
echo "<script>alert('Gagal Mendaftar!');
     window.location='daftar.php'</script>";
}

?>