<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOOPING</title>
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
    <li><a href="ifElse.php">IF-ELSE</a></li>
    <li><a class="active" href="loopFor.php">PERULANGAN FOR</a></li>
    <li><a href="array.php">ARRAY</a></li>
</ul>

<div class="main">
    <form action="" method="post">
        <fieldset>
            <legend><h2>LAGU ANAK AYAM</h2></legend>
            <label for="ayam">Masukan jumlah anak ayam</label>
            <input type="number" name="ayam" value=""> <br>
            <input type="submit" name="simpan">
            <input type="submit" name="reset" value="reset"> <br> <br>
            
            <?php
            if (isset($_POST['simpan'])) {
                $ayam = $_POST['ayam'];
                $cek = $ayam;
                for ($i=$ayam; $i >= 1 ; $i--) {
                    if ($i > 1) {
                        echo "anak ayam turun $i mati satu tinggal " .
                        ($cek-1) . "<br><br>";
                    }
                    else {
                        echo "anak ayam turun $i mati satu tinggal induknya";
                    }
                    $cek--;
                }
            }
            else
            echo "<br>Silahkan masukkan jumlah anak ayam!";
            ?>
            </fieldset>
        </form>
    </div>
</body>
</html>