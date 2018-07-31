<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <style>
    p{
        margin: 15px;
        padding: 1px;
    }
    </style>
</head>
<body>

     <?php 
      foreach($anggota as $d)?>
    <h2 align="center"> <img align="left" width="70px" height="70px" src="images/pra.png"> Sistem Aplikasi Pramuka <img align="right" width="70px" height="70px" src="images/pram.png"> </h2>
     <h3 align="center">Data Anggota Pramuka</h3>
     <hr>
     <p>Nama          : <?php echo $d->nama_lengkap?></p>
     <p>TTL           : <?php echo $d->tgl_lahir?></p>
     <p>Jenis Kelamin : <?php echo $d->jk?></p>
    <p>Alamat       : <?php echo $d->alamat?></p>
    <p>Agama : <?php echo $d->agama?></p>
    <p>Golongan darah : <?php echo $d->gol_darah?></p>
    <p>Sekolah : <?php echo $d->sekolah_id?></p>
    <p>Tingkat Pendidikan : <?php echo $d->tkt_pendidikan?></p>
    <p>Provinsi : <?php echo $d->nama_provinsi?></p>
     </body>
     </html>