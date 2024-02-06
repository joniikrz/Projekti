
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../dashboard.css">
</head>
<body>
    <div class="container">
        <div class="list">
            <?php
            include ('C:\xampp\htdocs\Projekti\Projekti\db\users\UserRepository.php');
            $userRepository = new UserRepository();
            $users = $userRepository->getAllUsers();

            foreach ($users as $user) {
                echo "
                <div class='card'>
                    <div class='details'>
                        <p>ID: $user[Id_User]</p>
                        <p>Name: $user[Emri]</p>
                        <p>Surname: $user[Mbiemri]</p>
                        <p>Email: $user[Email]</p>
                        <p>Password: $user[Passi]</p>
                        <p>Role: $user[Role]</p>
                        <a href='edit.php?id=$user[Id_User]'>Edit</a>
                        <a href='delete.php?id=$user[Id_User]'>Delete</a>
                        <a href='changeRole.php?id=$user[Id_User]'>Change Role</a>
                    </div>
                </div>";
            }
            ?>
        </div>
    </div>
    <div class="butonat">
        <button><a href="register.php">ADD</a></button>
        <button><a href="../travel/dashboard.php">Travel Dashboard</a></button>
        <button><a href="../ofertat/dashboard.php">Ofertat Dashboard</a></button>
    </div>
</body>
</html>