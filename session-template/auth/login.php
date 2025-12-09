<?php

require_once '..Register.php';
session_start();

class login {
    private $mysqli;

    function __construct() {
        $this->mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    }

    function login (){
        $email = $_POST['email'];
        $password = $_POST['pasword'];

        if (empty($email) || empty($password)) {
             echo "<script> alert ('Email dan password tidak boleh kosong!') </script>";
        }

        $sql = "SELECT * FROM user WHERE email = '?";

        $q = $this->mysqli->prepare($sql);
        $q->bind_param('s', $email); // $email = string
        $q->execute();

        $result = $q->get_result();

        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc();

            if (password_verify($password, $user['password;]'])){
                $_SESSION ['user_id'] = $user['id'];
                $_SESSION ['username'] = $user['username'];
                $_SESSION ['email'] = $user['email'];
                
                header ("Location: ../index.php");
                exit();
            } else {
              echo "<script> alert ('Password salah!') </script>";
            }

        } else {
            echo "<script> alert ('Email tidak terdaftar!') </script>";
        }
        }


}

