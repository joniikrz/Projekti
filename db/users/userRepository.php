<?php 
include_once '../databaseConnection.php';

class UserRepository{
    private $connection;

    function __construct(){
        $conn = new DatabaseConenction;
        $this->connection = $conn->startConnection();
    }
    

    function insertUser($user){

        $conn= $this->connection;
        $id=$user->getId();
        $emri = $user->getEmri();
        $mbiemri =$user->getMbiemri();
        $diteLindja = $user->getMbiemri();
        $email = $user->getEmail();
        $password = $user->getPassword();

        $sql = "INSERT INTO users (Id_User,Emri,Mbiemri,Ditelindja,Email,Passi) VALUES (?,?,?,?,?,?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$id,$emri,$mbiemri,$diteLindja,$email,$password]);

        echo "<script> alert('User has been inserted successfuly!'); </script>";

    }

    function getAllUsers(){
        $conn = $this->connection;

        $sql = "SELECT * FROM users";

        $statement = $conn->query($sql);
        $users = $statement->fetchAll();

        return $users;
    }



    function updateUser($id,$emri,$mbiemri,$diteLindja,$email,$password){
         $conn = $this->connection;

         $sql = "UPDATE users SET Emri=?, Mbiemri=?, Ditelindja=?, Email=?, Passi=? WHERE Id_User=?";

         $statement = $conn->prepare($sql);

         $statement->execute([$id,$emri,$mbiemri,$diteLindja,$email,$password]);

         echo "<script>alert('update was successful'); </script>";
    } 


    function deleteUser($id){
        $conn = $this->connection;

        $sql = "DELETE FROM users WHERE Id_User=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$id]);

        echo "<script>alert('delete was successful'); </script>";
   } 
}


?>