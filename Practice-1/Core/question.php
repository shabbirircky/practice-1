<?php
include 'Database.php';


class question extends Database{
    public function addQuestion($Titlle,$Description,$user_id)
    {
        $created_at = date('Y-m-d H:i:s');
        $sql = "INSERT INTO question (Titlle,Description,user_id,created_at) VALUES ('$Titlle','$Description','$user_id','$created_at') ";
        $this->exec($sql);
        return true;
    }

}


?>