<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BERANDA</title>
    <link rel="stylesheet" href="style.css">
    <style>
    .navbar{
        font-family: verdana;
    }
    h1{
        text-align: center;
        font-family: verdana;
        margin: auto;
        margin-top: 50px;
        background-color: #a43e00 ;
        border-radius: 5px;
        width: 50%;
        color: white;
        padding: 20px 20px;
    }
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
<body>
    <div class="navbar">
        <ul>
            <li><a class="active" href="beranda.php">BERANDA</a></li>
            <li><a href="ifElse.php">IF-ELSE</a></li>
            <li><a href="loopFor.php">PERULANGAN FOR</a></li>
            <li><a href="array.php">ARRAY</a></li>
        </ul>
        <h1 >TUGAS PRAKTIKUM WEB <br>123200159 <br>BAHAR PRAWIRA NUGRAHA</h1>
    </div>
</body>
</html>