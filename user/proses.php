<?php
include 'koneksi.php';
        $email=($_POST['email']);
        $password=($_POST['no_identitas']);

        $query = mysqli_query("select email,no_identitas from tb_user where email='$email' and no_identitas='$password'");
  
        if ($query == true) {
            session_start();
            $_SESSION['email']=$result['email'];
            
            header("Location: user.php");
        }       
?>