
<?php
if(isset($_POST["submit"]))
{
$bl        = $_POST["bl"];
$nompol    = $_POST["nompol"];
$nama      = $_POST["nama"];
$jenis     = $_POST["jenis"];
$merk      = $_POST["merk"];
$lokasi    = $_POST["lokasi"];
$masuk     = $_POST["masuk"];
$keluar    = $_POST["keluar"];
$parkir    = $_POST["parkir"];
$total = ("$keluar" - "$masuk")* 5000;

}
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>parkir online</title>
</head>
<html>
    <body>
    </center>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
 <center>

 <table >
       
        <tr>
            <td>Nomor BL</td>
            <td><?php echo $bl ?> <?php echo $nompol ?></td>
        </tr>
        <tr>
            <td>Nama Pemilik</td>
            <td><?php echo $nama ?></td>
        </tr>
        <tr>
            <td>Jenis Kendaraan</td>
            <td><?php echo $jenis ?></td>
        </tr>
        <tr>
            <td>Merk Kendaraan</td>
            <td><?php echo $merk?></td>
        </tr>
        <tr>
            <td>Lokasi Parkir</td>
            <td><?php echo $lokasi ?></td>
        </tr>
        <tr>
            <td>Jam Masuk</td>
            <td><?php echo $masuk ?></td>
        </tr>
        <tr>
            <td>Jam Keluar</td>
            <td><?php echo $keluar ?></td>
        </tr>
        <tr>
            <td>Nomor Parkir</td>
            <td><?php echo $parkir ?></td>
        </tr>
        <tr>
            <td>Total</td>
            <td><?php echo $total ?></td>
        </tr>
    </table>
<br>
<br>

</center>  
    </body>

    <style>
       table,
        th,
        td {
                                       border-collapse: collapse;
                                       border: 1px solid black;
                                       padding: 16px;
                                       padding-right: 40px;
                                       padding-top: 8px;
                                       margin: 100px;
                                       text-align: center;
                                   }

                                   body{
        background: linear-gradient(white,#00BCD4);
        background-repeat: no-repeat;
        background-size: cover;
        font-family: 'Marcellus', serif;
    }

    td{
        font-family: 'Marcellus', serif;
        font-size: 18px;
        color: black;
    }
                                   
    </style>

    
</html>