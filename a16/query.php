<?php
class crud extends koneksi{
    public function lihatData(){
        $sql ="SELECT * FROM user_detail";
        $result = $this->koneksi->prepare($sql);
        $result->execute();
        return $result;
    }

    public function insertData($email, $pass, $name){
        try{
            $sql = "insert into user_detail(user_email, user_password, user_fullname, level) values
            (:email, :pass, :name, 2)";
            $result= $this->koneksi->prepare($sql);
            $result->bindParam(":email",$email);
            $result->bindParam(":pass",$pass);
            $result->bindParam(":name",$name);
            $result->execute();
            return true;
        }catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }
}
?>

