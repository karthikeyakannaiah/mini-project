<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jewels</title>
    <link rel="stylesheet" href="../css/purchases.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;1,300&display=swap" rel="stylesheet">
</head>
    <body>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "students";   
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            if($conn) {
                echo 'working';
            } else {
                echo 'failed';
            }
            $email = $_POST['email'];
            $product = $_POST['product'];
            $sql = "INSERT INTO purchases values ('$email', '$product')";
            if (mysqli_query($conn, $sql) == TRUE){
                echo '<h3 class="back">inserted <a href="../index.html">Go back</a></h3>';
            }
        ?>
    </body>
</html>