<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARRAY</title>
    <style>
    
    *{
        margin: 0;
    }
    .main {
        background-color: #a43e00;
        margin: 30px 350px;
        padding: 20px 20px;
        width: 50%;
        border-radius: 5px;
        font-family: arial;
        color: white;
    }
    ul {
        list-style-type: none ;
        margin: 0;
        overflow: hidden;
        background-color: #333;
    }
    li {
        float: left;
    }
    li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }
    li a:hover {
        background-color: #555;
        color: white;
    }
    li a.active {
        background-color: #a43e00 ;
        color: white;
    }
    li a:hover:not {
        background-color: #555;
        color: white;
        }
    </style>
</head>
<body style="font-family:verdana;">

<ul>
    <li><a href="beranda.php">BERANDA</a></li>
    <li><a href="ifElse.php">IF-ELSE</a></li>
    <li><a href="loopFor.php">PERULANGAN FOR</a></li>
    <li><a class="active" href="array.php">ARRAY</a></li>
    </ul>
    
    <div class="main">
        <h2 style="text-align:center;">DATA DIRI</h2>
        <?php
        $nama = ["BAHAR" , "PRAWIRA" , "NUGRAHA"];
        $ipk = ["3" , "3,3" , "3,9"];
        $email = ["bahar@gmail.com", "prawira@gmail.com", "nugraha@gmail.com"];
        echo "<table border='1' style='width:50%; margin:auto;'>";
        echo "<tr>";
        echo "<th>Nama Mahasiswa</th>";
        echo "<th>IPK</th>";
        echo "<th>E-Mail</th>";
        echo "</tr>";
        echo "<tr>";
        echo "<td> $nama[0] </td>";
        echo "<td> $ipk[0] </td>";
        echo "<td> $email[0] </td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td> $nama[1] </td>";
        echo "<td> $ipk[1] </td>";
        echo "<td> $email[1] </td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td> $nama[2] </td>";
        echo "<td> $ipk[2] </td>";
        echo "<td> $email[2] </td>";
        echo "</tr>";
        echo " </table>";
    ?>
    </div>
</body>
</html>