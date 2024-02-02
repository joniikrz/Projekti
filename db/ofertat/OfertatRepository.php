<?php 
include('C:\xampp\htdocs\Projekti\Projekti\db\DatabaseConnection.php');


class OfertatRepository{
    private $connection;

    function __construct(){
        $conn = new DatabaseConnection;
        $this->connection = $conn->startConnection();
    }
    

    function insertOferta($oferta){

        $conn= $this->connection;
        $id=$oferta->getId();
        $emri = $oferta->getEmri();
        $cmimi =$oferta->getCmimi();
        $koha = $oferta->getKoha();
        $lokacioni = $oferta->getLokacioni();
        $imgsrc = $oferta->getImgsrc();

        $sql = "INSERT INTO ofertat (Id,Emri,Cmimi,Koha,Lokacioni,Imgsrc) VALUES (?,?,?,?,?,?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$id,$emri,$cmimi,$koha,$lokacioni,$imgsrc]);

        echo "<script> alert('Ofertat has been inserted successfuly!'); </script>";

    }

    function getAllOfertat(){
        $conn = $this->connection;

        $sql = "SELECT * FROM ofertat";

        $statement = $conn->query($sql);
        $ofertat = $statement->fetchAll();

        return $ofertat;
    }



    function updateOfertat($id,$emri,$cmimi,$koha,$lokacioni,$imgsrc){
         $conn = $this->connection;

         $sql = "UPDATE travel SET Emri=?, Cmimi=?, Koha=?, Lokacioni=?, Imgsrc=? WHERE Id=?";

         $statement = $conn->prepare($sql);

         $statement->execute([$id,$emri,$cmimi,$koha,$lokacioni,$imgsrc]);

         echo "<script>alert('update was successful'); </script>";
    } 


    function deleteOferta($id){
        $conn = $this->connection;

        $sql = "DELETE FROM Ofertat WHERE Id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$id]);

        echo "<script>alert('delete was successful'); </script>";
   } 

}

?>