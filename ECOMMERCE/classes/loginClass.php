<?php

namespace class\login;

require_once 'db.php';

class loginClass
{
    public function login($email, $password)
    {
        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        if ($row['email'] == $email && $row['password'] == $password) {
            return true;
        } else {
            return false;
        }
    }
}