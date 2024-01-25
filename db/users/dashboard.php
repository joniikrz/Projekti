<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <table border="1">
             <tr>
                 <th>ID</th>
                 <th>Emri</th>
                 <th>Mbiemri</th>
                 <th>Ditelindja</th>
                 <th>Email</th>
                 <th>Password</th>
                 <th>Edit</th>
                 <th>Delete</th>
                 <th>Add</th>
                 
             </tr>

             <?php 
             include_once '../userRepository.php';

             $userRepository = new UserRepository();

             $users = $userRepository->getAllUsers();

             foreach($users as $user){
                echo 
                "
                <tr>
                     <td>$user[Id_User]</td>
                     <td>$user[Emri]</td>
                     <td>$user[Mbiemri] </td>
                     <td>$user[Ditelindja] </td>
                     <td>$user[Email] </td>
                     <td>$user[Passi] </td>
                     <td><a href='edit.php?id=$user[Id_User]'>Edit</a> </td>
                     <td><a href='delete.php?id=$user[Id_User]'>Delete</a></td>
                     <td><a href='register.php'>Add</a></td>
                     
                </tr>
                ";
             }

             
             
             ?>
    </table>
</body>
</html>