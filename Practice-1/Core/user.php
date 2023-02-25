<?php
include 'Database.php';

 class user extends Database{
    public function register($username,$email,$password)
    {
        $sql = "INSERT INTO username (username,email,password) VALUES ('$username','$email','$password')";
        $this->exec($sql);
 


    }
    public function checkPreviousUser($username,$email)
    {
        $sql = "SELECT * FROM username WHERE username= '$username' OR email = '$email' ";
        return $this->fetch($sql);


    } 
    public function checkOneUser($username,$password)
    {
        $password = md5($password);
        $sql = "SELECT * FROM username WHERE username='$username' AND password='$password'";
        return $this->fetch($sql);

    }
 }

?>