<?php
    include_once("conexion.php");

    $conexi = new Conexion();
    $conect = $conexi->Conectar();

    $query = "SELECT * FROM user_details";
    $resultado = $conect->prepare($query);
    $resultado->execute();
    $usuarios = $resultado->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datatables</title>
    <link rel="stylesheet" href="stilos.css">

</head>
<body>

    <div class="container" id="container">

        <table id="tbUsers" class="tbUsers">
            <thead>
                <th>User id</th>
                <th>Username</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Gender</th>
                <th>Password</th>
                <th>Status</th>
            </thead>
            <tbody>
                <?php
                    foreach ($usuarios as $usuario) {
                ?>
                    <tr>
                        <td><?php echo $usuario['user_id']; ?></td>
                        <td><?php echo $usuario['username']; ?></td>
                        <td><?php echo $usuario['first_name']; ?></td>
                        <td><?php echo $usuario['last_name']; ?></td>
                        <td><?php echo $usuario['gender']; ?></td>
                        <td><?php echo $usuario['password']; ?></td>
                        <td><?php echo $usuario['status']; ?></td>
                    </tr>
                <?php
                    }    
                ?>

            </tbody>
        </table>

    </div>
    
</body>
</html>