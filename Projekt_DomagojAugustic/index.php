<?php 

$xml= simplexml_load_file('filmovi.xml');
$br=1;
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body{
        font-family:Garamond;
        font-size: 20px;
        }
        


        .main{
        background-color: #a205fc;
        }

        ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #345;
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
        background-color: #111;
        }

        footer{
        text-align: center;
        padding: 3px;
        background-color: #345;
        color: white;
        }

        .container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }
        .box {
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .box img {
            width: 300;
            height: auto;
        }
        .box h3 {
            margin: 10px 0 0 0;
        }
        .box p {
            color: #666;
        }
        button {
        border: none;
        color: white;
        padding: 16px 32px;
        text-align: center;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        transition-duration: 0.4s;
        cursor: pointer;
        background-color: white; 
        color: black; 
        border: 2px solid #21ac95;
        }
        button:hover {
        background-color: #21ac95;
        color: white;
        }
        
        

    </style>
</head>
<body>
    <div class="header">
        <ul>
            <li><img src="slike/logo.svg" width="200px" style="padding: 10px;"></li>
            <li><h3><a href="index.php">Početna</a></h3></li>
            <li><h3><a href="prikazivanja.php">Prikazivanja</a></h3></li>
        </ul>
    <div>
    <div class="container">
        <?php foreach ($xml->Film as $film): ?>
            <div class="box">
            <img src="<?php echo $film->Poster; ?>">
            <h2><?php echo $film->Naslov; ?><h2>
            <p>Trajanje:<?php echo $film->Trajanje; ?></p>
            <p>Žanr:<?php echo $film->Zanr; ?></p>
            <p>Redatelj:<?php echo $film->Redatelj; ?></p>
            <p>Glumci:<?php echo $film->Glumci; ?></p>
            <button onclick="location.href='prikazivanja.php#<?php echo $film->ID  ?>'">Prikazivanja</button>
        </div>
                    
        <?php endforeach; ?>
        
    </div>
    <footer>
        <p>01 6396 720 - Branimirova 29 - 10000 Zagreb</p>
    </footer>
</body>
</html>