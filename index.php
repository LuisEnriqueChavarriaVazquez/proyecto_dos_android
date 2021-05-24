<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h2>Hola!!</h2>";

        include 'conn.php';

        $sql = "SELECT id, volumen FROM volumenTable";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "id: " . $row["id"]. " Volumen: " . $row["volumen"] . "<br>";
            echo "Gato";
        }
        } else {
        echo "0 results";
        }

        mysqli_close($conn);
            ?>

    
</body>
</html>