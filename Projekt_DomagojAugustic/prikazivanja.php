<?php 

$xml= simplexml_load_file('filmovi.xml');
 $br=1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prikazivanja</title>
    <style>
        body{
        font-family:Garamond;
        font-size: 20px;
        }
        table, td, th {
        border: 3px solid black;
        }

        table {
        border-collapse: collapse;
        width: 100%;
        font-size:20px;
        font-weight:bold;
        }

        td {
        text-align: center;
        width:250px;
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

        .odabrani:target {
            border: solid #0394fc 6px; 
            background-color: #03dbfc;
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
        <div class="main">

        <table class="table" >
            <thead>
                <tr>
                    <th></th>
                    <th></th>
                    <th>Ponedjeljak</th>
                    <th>Utorak</th>
                    <th>Srijeda</th>
                    <th>Četvrtak</th>
                    <th>Petak</th>
                    <th>Subota</th>
                    <th>Nedjelja</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($xml->Film as $film): ?>
                    <tr id="<?php echo $film->ID; ?>" class="odabrani">
                        <td><img src="<?php echo $film->Poster; ?>" width=200></td>
                        <td><h2><?php echo $film->Naslov; ?><h2></td>
                        <td><?php echo $film->Vremena->Ponedjeljak; ?></td>
                        <td><?php echo $film->Vremena->Utorak; ?></td>
                        <td><?php echo $film->Vremena->Srijeda; ?></td>
                        <td><?php echo $film->Vremena->Četvrtak; ?></td>
                        <td><?php echo $film->Vremena->Petak; ?></td>
                        <td><?php echo $film->Vremena->Subota; ?></td>
                        <td><?php echo $film->Vremena->Nedjelja; ?></td>
                        
                    </tr>
                    
                <?php endforeach; ?>
            </tbody>
        </table>
        
        </div id=7>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

        <footer>
            <p>01 6396 720 - Branimirova 29 - 10000 Zagreb</p>
        </footer>

    </body>
</html>