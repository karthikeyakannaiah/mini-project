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
    <table align="center" style="border:1px solid black; padding:2%;color:white; border-collapse: collapse;">
            <tr>
                <th style="border:1px solid black; padding:4%; color:gold; border-collapse: collapse;">Purchase</th>
                <th style="border:1px solid black; padding:4%; color:gold; border-collapse: collapse;">Price</th>
                <th style="border:1px solid black; padding:4%; color:gold; border-collapse: collapse;">Date of Purchase</th>
            </tr>
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
            $email = $_POST['email'];
            $sql = "SELECT * FROM jewellery WHERE email = '$email'";
            $retval= mysqli_query($conn, $sql);
            if (!$retval) {
                die("Could not get the data".mysqli_error($conn));
            }
            while ($row = mysqli_fetch_array($retval)){
            ?>
            <tr>
                <td style="border:1px solid black; padding:auto; border-collapse: collapse;"><?php echo $row['Purchase']."<br>";?></td>
                <td style="border:1px solid black; padding:auto; border-collapse: collapse;"><?php echo $row['Price']."<br>";?></td>
                <td style="border:1px solid black; padding:auto; border-collapse: collapse;"><?php echo $row['reg_date']."<br>";?></td>  
            </tr>
            <?php
            }
            echo '<h3 class="back">Fetching Successful <a href="./orders.html">Go back</a><br>
                    <a class="back" href="../index.html">Home</a></h3>';
            
            mysqli_close($conn);
        ?>
    </table>
    </body>
</html>