

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Courgette&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amiri&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Marcellus&display=swap" rel="stylesheet">
    <title>parkir online</title>
</head>
<body>
<center>
<br>
<br>

<center><h1>Parkir Aja</h1></center>
<br>
<br>


<form method="post" action="aksi.php">

<div class="container">
<div class="col-lg-6 col-sm-12">

<label for="">Nomor Polisi</label>
<br>
<select name="bl" class="selet1" id="">
    <option value="BL">BL</option>
    <option value="BK">BK</option>
    <option value="BL">BB</option>
    <option value="BK">BM</option>
    <option value="BL">BP</option>
    <option value="BK">BG</option>
    <option value="BL">BE</option>
    <option value="BK">BH</option>
    <option value="BL">A</option>
    <option value="BK">B</option>
    <option value="BL">D</option>
    <option value="BK">E</option>
    <option value="BL">F</option>
    <option value="BK">L</option>
    <option value="BL">M</option>
    <option value="BK">N</option>
    <option value="BL">H</option>
    <option value="BK">DK</option>
    <option value="BL">DN</option>
    <option value="BK">KT</option>
</select>
<br>
<br>
<input type="text" width="20" placeholder=" Nomor Polisi" name="nompol" required>
<br>
<br>
<label for="">Nama Lengkap</label>
<br>
<input type="text" placeholder=" Nama Lengkap" name="nama" required>
<br>
<br>
<label for="">Jenis Kendaraan</label>
<br>
<input type="radio" name="jenis" value="roda 2" checked> roda 2
<input type="radio" name="jenis" value="roda 4"> roda 4
<br>
<br>
<label for="">Merk Kendaran</label>
<br>
<input type="text" placeholder=" Merk Kendaraan" name="merk" required>
<br>
<br>
<label for="">Lokasi Pakir</label>
<br>
<select name="lokasi" class="selet" id="">
    <option value="suzuya mall">suzuya mall</option>
    <option value="masjid raya baiturrahman">masjid raya baiturrahman</option>
    <option value="hermes palace">hermes palace</option>
    <option value="politeknik aceh">politeknik aceh</option>
    <option value="Gp doy, ghifar's Home">Gp doy, ghifar's Home</option>
  
</select>
</div>
<br>

<div class="col-lg-6 col-sm-12">


<label class="biaya" for="">Biaya / jam : Rp 5000-, </label>
<br>
<br>

<label for="">Jam masuk</label>
<br>
<input type="text" placeholder=" Jam Masuk" name="masuk" required>
<br>
<br>
<label for="">Jam keluar</label>
<br>
<input type="text" placeholder=" Jam Keluar" name="keluar" required>
<br>
<br>
<br>
<label for="">Id Parkir</label>
<br>
<select name="parkir" class="selet1" id="">
    <option value="A01">A01</option>
    <option value="A02">A02</option>
    <option value="A03">A03</option>
    <option value="A04">A04</option>
    <option value="A05">A05</option>
    <option value="A06">A06</option>
    <option value="A07">A07</option>
    <option value="A08">A08</option>
    <option value="A09">A09</option>
    
</select>
<br>
<br>
<br>
<br>
<br>

<button type="button" class="cancel" name="submit"><a style="text-decoration:none;" href="http://localhost/dashboard/parkir/form.php"><b>Cancel</b></a></button>
<button type="submit" class="simpan" name="submit"><b>Proses</b></button>

<br>
<br>
<br>
<br>
<br>


</div>
</div>


</form>
    
<br>
<br>
          
  
</body>
<style>
    form{
        background-image:url()
        border-radius: 12px;
       /* box-shadow:0px 0px 4px 0px  black;*/
       
        
        padding: 10px;
        
    }

    input[type="text"]{
        width: 250px;
        height: 40px;
        border-radius: 10px;
        border: none;
        background-color:#dbf4fd;
    }
    input:hover[type="text"]{
        width: 250px;
        height: 40px;
        border: none;
        border-radius: 2px;
        -webkit-transition: 1s;
        background-color:white;
    }
.selet{
        width: 250px;
        height: 40px;
        border-radius: 10px;
        border: none;
        background-color:#dbf4fd;
}
.selet1{
        width: 100px;
        height: 40px;
        border-radius: 10px;
        border: none;
        background-color:#dbf4fd;
}
 
    option{
        width: 250px;
        height: 40px;
        border-radius: 10px;
        border: none;
    }

    .simpan {
        padding: 10px;
        width: 150px;
        height: 40px;
        border-radius: 10px;
        border: none;
        background-color:#dbf4fd;
        font-family:serif;
     


    }

    .cancel {
        padding: 10px;
        width: 150px;
        height: 40px;
        border-radius: 10px;
        border: none;
        background-color:#dbf4fd;
        font-family:serif;
        margin-bottom: 5px;


    }

    .simpan:hover{
        padding: 10px;
        width: 150px;
        height: 40px;
        border-radius: 10px;
        border: none;
        background-color:green;
        font-family:serif;
     


    }

    .cancel:hover {
        padding: 10px;
        width: 150px;
        height: 40px;
        border-radius: 10px;
        border: none;
        background-color:red;
        font-family:serif;
        margin-bottom: 5px;


    }



    body{
        background: linear-gradient(white,#00BCD4);
        background-repeat: no-repeat;
        background-size: cover;
        font-family: 'Marcellus', serif;
    }
    
    label{
        font-family: 'Marcellus', serif;
        font-size: 18px;
        color: black;
    }


  .biaya{
        font-family: 'Amiri', serif;
        font-size: 26px;
        font-weight: bold;
    }
    
    h1{
        font-family: 'Courgette', cursive;
        font-size: 60px;
        background: -webkit-gradient(linear , left top, right top, from(#000000),to(#00BCD4));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    b{
        font-family: 'Marcellus', serif;
        font-weight: bold;
        color:black;
    }

    a href{
        text-decoration: none;
    }
</style>
</html>

