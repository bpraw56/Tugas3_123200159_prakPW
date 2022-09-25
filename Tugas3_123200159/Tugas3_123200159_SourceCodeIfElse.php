<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IF-ELSE</title>
    <style>
    *{
        margin: 0;
    }
    .main {
        background-color: #a43e00;
        margin: 30px 300px;
        padding: 20px 20px;
        width: 60%;
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
        <li><a class="active" href="ifElse.php">IF-ELSE</a></li>
        <li><a href="loopFor.php">PERULANGAN FOR</a></li>
        <li><a href="array.php">ARRAY</a></li>
    </ul>
    
<div class="main">
    <form action="" method="POST">
        <fieldset>
            <legend style="text-align:center; font-size:30px;">TAHUN KABISAT</legend>
            <p>
                <label for="tahun">Masukan Tahun</label><br>
                <input type="number" name="tahun">
            </p>
            <input type="submit" value="Check" name="simpan">
            <br><br>
            
            <?php
            if (isset($_POST['simpan']))
            {
                $tahun = $_POST['tahun'];
                if ($tahun % 4 == 0) {
                    echo "Tahun " . $tahun . " adalah tahun kabisat.";
                }
                else {
                    echo "Tahun " . $tahun . " adalah bukan tahun kabisat.";
                }
            }
            else {
                echo "Tahun belum di Inputkan!";
            }
            ?>
            </fieldset>
        </form>
    </div>
</body>
</html>