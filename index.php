<?php

require_once 'vendor/autoload.php';

use App\Statistics;

$covid = new Statistics('/home/arthur/PhpstormProjects/PHPbasics/covidDatabaseComposer/covid_19_valstu_saslimstibas_raditaji.csv');
$records = $covid->getRecords();
echo "<pre>";

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Covid-19</title>
</head>
<body>
    <table class="table">
        <tbody>
        <form method="get">
            <label for="fname">Search:</label><br>
            <input type="text" id="fname" name="fname" placeholder="enter country"><br>
            <input type="submit" value="Submit">
        </form>
        <?php foreach ($records as $record)
        {
            if ($_GET["fname"] === $record['Valsts'])
            {
                ?><tr><th scope="row"><span style="font-size: smaller; "><?php echo $record['Datums']; ?></span></th>
                <td><span style="font-size: smaller; "><?php echo $record['Valsts']; ?></span></td>
                <td><span style="font-size: smaller; "><?php echo $record['14DienuKumulativaIncidence']; ?></span></td>
                <td><span style="font-size: smaller; "><?php echo $record['Izcelosana']; ?></span></td>
                <td><span style="font-size: smaller; "><?php echo $record['Pasizolacija']; ?></span></td>
                <td><span style="font-size: smaller; "><?php echo $record['PersIrVakcParslSert_PasizolacijaLatvija']; ?></span></td>
                <td><span style="font-size: smaller; "><?php echo $record['PersIrVakcParslSert_TestsPirmsIebrauksanasLV']; ?></span></td>
                <td><span style="font-size: smaller; "><?php echo $record['PersIrVakcParslSert_TestsPecIebrauksanasLV']; ?></span></td>
                <td><span style="font-size: smaller; "><?php echo $record['CitasPersonas_PasizolacijaLatvija']; ?></span></td>
                <td><span style="font-size: smaller; "><?php echo $record['CitasPersonas_TestsPirmsIebrauksanasLV']; ?></span></td>
                <td><span style="font-size: smaller; "><?php echo $record['CitasPersonas_TestsPecIebrauksanasLV']; ?></span></td></tr><br><?php
            }
        }?>
        <?php foreach ($records as $record): ?>
            <tr>
                <th scope="row"><span style="font-size: smaller; "><?php echo $record['Datums']; ?></span></th>
                <td><span style="font-size: smaller; "><?php echo $record['Valsts']; ?></span></td>
                <td><span style="font-size: smaller; "><?php echo $record['14DienuKumulativaIncidence']; ?></span></td>
                <td><span style="font-size: smaller; "><?php echo $record['Izcelosana']; ?></span></td>
                <td><span style="font-size: smaller; "><?php echo $record['Pasizolacija']; ?></span></td>
                <td><span style="font-size: smaller; "><?php echo $record['PersIrVakcParslSert_PasizolacijaLatvija']; ?></span></td>
                <td><span style="font-size: smaller; "><?php echo $record['PersIrVakcParslSert_TestsPirmsIebrauksanasLV']; ?></span></td>
                <td><span style="font-size: smaller; "><?php echo $record['PersIrVakcParslSert_TestsPecIebrauksanasLV']; ?></span></td>
                <td><span style="font-size: smaller; "><?php echo $record['CitasPersonas_PasizolacijaLatvija']; ?></span></td>
                <td><span style="font-size: smaller; "><?php echo $record['CitasPersonas_TestsPirmsIebrauksanasLV']; ?></span></td>
                <td><span style="font-size: smaller; "><?php echo $record['CitasPersonas_TestsPecIebrauksanasLV']; ?></span></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>

