<?php
include "koneksi.php";

class user extends database {
    function __contruct(){
        parent:: __construct();
        // session_start();
		// if ($_SESSION['nim']==""){
		// 	echo "<script>alert('Anda belum login, silahkan login terlebih dahulu');window.location = 'login.php'</script>";
		// }
		
    }

    function login($data){
        
        $qry = "SELECT * FROM user WHERE (username = '".$data['username']."') AND password = '".$data['password']."' "  or die(mysqli_error($this->conn));
		$exec = mysqli_query($this->conn, $qry);
		$data = mysqli_fetch_array($exec);
		return $data;
    }

    function tambah_data($data){
        $qry = mysqli_query($this->conn, "insert into user values 
        ('".$data['nama']."',
         '".$data['email']."',
         '".$data['username']."',
         '".$data['password']."')")
         or die(mysqli_error($this->conn)); 
         return $qry;
    }

}



?>