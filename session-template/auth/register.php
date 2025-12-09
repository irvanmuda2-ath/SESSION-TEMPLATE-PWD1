<?php

require_once  '../database.php';

class Register {

    private $mysqli;

    function __construct()
    {
        $this->mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME)  ;

    }

    function register(){
            
        $user = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (empty($user) || empty($email) || empty($password))
            echo "<script> alert ('Input tidak boleh kosong!') </script>";

        } else {
            $get_user = "SELECT * FROM user WHERE email = '$email'";
            $result = this->mysqli->query($get_user);
            $cek_user = $result->num_rows;

            if ($cek_user === 1) {
            echo "<script> alert ('email sudah digunakan.') </script>";
            
            } else {
                $pass = password_hash($password, PASSWORD_DEFAULT);

            $sql = "INSERT INTO users (username, email, password), email) VALUES ('" . $user . "', '" . $pass . "', '" . $email . "')";
            
            $query = $this->mysqli->prepare($sql) or  die ($this->mysqli->error);


            $query->execute ();

            if ($query) {
                header("location: loginFrom.php");
            echo "<script> alert ('email sudah digunakan.') </script>"

            }

        }

    }


}
