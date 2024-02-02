<?php 
include('C:\xampp\htdocs\Projekti\Projekti\db\DatabaseConnection.php');

class TravelRepository{
    private $connection;

    function __construct(){
        $conn = new DatabaseConnection;
        $this->connection = $conn->startConnection();
    }
   

    function insertTravel($travel){

        $conn= $this->connection;
        $id=$travel->getId();
        $emri = $travel->getEmri();
        $cmimi =$travel->getCmimi();
        $koha = $travel->getKoha();
        $lokacioni = $travel->getLokacioni();
        $imgsrc = $travel->getImgsrc();

        $sql = "INSERT INTO travel (Id,Emri,Cmimi,Koha,Lokacioni,Imgsrc) VALUES (?,?,?,?,?,?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$id,$emri,$cmimi,$koha,$lokacioni,$imgsrc]);

        echo "<script> alert('Travel has been inserted successfuly!'); </script>";

    }

    function getAllTravels(){
        $conn = $this->connection;

        $sql = "SELECT * FROM travel";

        $statement = $conn->query($sql);
        $travel = $statement->fetchAll();

        return $travel;
    }



    function updateTravel($id,$emri,$cmimi,$koha,$lokacioni,$imgsrc){
         $conn = $this->connection;

         $sql = "UPDATE travel SET Emri=?, Cmimi=?, Koha=?, Lokacioni=?, Imgsrc=? WHERE Id=?";

         $statement = $conn->prepare($sql);

         $statement->execute([$id,$emri,$cmimi,$koha,$lokacioni,$imgsrc]);

         echo "<script>alert('update was successful'); </script>";
    }


    function deleteTravel($id){
        $conn = $this->connection;

        $sql = "DELETE FROM travel WHERE Id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$id]);

        echo "<script>alert('delete was successful'); </script>";
   }


}

?>