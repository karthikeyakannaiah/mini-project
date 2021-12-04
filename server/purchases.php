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
                echo '';
            } else {
                echo 'failed';
            }
            $purid = 0;
            $sql = 'SELECT COUNT(*) FROM jewellery;';
            $retval= mysqli_query($conn, $sql);
            if (!$retval) {
                die("Could not get the data".mysqli_error($conn));
            }
            while ($row = mysqli_fetch_array($retval)){
                 $purid = $row['COUNT(*)'] + 1;
            }
            $email = $_POST['email'];
            $product = $_POST['product'];
            echo $product;
            $price = 0;
            if ($product == "Earring"){
                $price = 30000;
            } elseif ($product == "Gold Bangles") {
                $price = 92000;
            } elseif ($product == "Necklace") {
                $price = 180000;
            } else {
                $price = 300000;
            }
            $sql = "INSERT INTO jewellery(pur_id, email, Purchase, Price) values ($purid,'$email', '$product', '$price')";
            if (mysqli_query($conn, $sql) == TRUE){
                echo '<h3 class="back">Purchase Successful <a href="../index.html">Go back</a><br>
                    <a class="back" href="orders.html">orders</a></h3>';
            }
            
            mysqli_close($conn);
        ?>
    </body>
</html>

<!--
        CREATE TABLE jewellery (
            pur_id INT PRIMARY KEY,
            email VARCHAR(50),
            Purchase VARCHAR(50),
            Price INT,
            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        );
-->