<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data</title>
     <style type="text/css">
    #outtable{
      padding: 20px;
      border:1px solid #e3e3e3;
      width:600px;
      border-radius: 5px;
    }
 
    .short{
      width: 50px;
    }
 
    .normal{
      width: 150px;
    }
 
    table{
      border-collapse: collapse;
      font-family: arial;
      color:#5E5B5C;
    text-align: :center;
    }
 
    thead th{
      text-align: left;
      padding: 10px;
    }
 
    tbody td{
      border-top: 1px solid #e3e3e3;
      padding: 10px;
    }
 
    tbody tr:nth-child(even){
      background: #F6F5FA;
    }
 
    tbody tr:hover{
      background: #EAE9F5
    }
  </style>
</head>
<body>
  <h2 align="center"> <img align="left" width="70px" height="70px" src="images/pra.png"> Sistem Aplikasi Pramuka <img align="right" width="70px" height="70px" src="images/pram.png"> </h2>
     <h3 align="center">Data Anggota Pramuka</h3>
     <hr>
    
<div id="outtable">
     <table  id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr bgcolor="yellow">
                          <th>No</th>
                          <th>Nama </th>
                          <th>Tgl Lahir</th>
                          <th>Jenis Kelamin</th>
                          <th>Alamat</th>
                          <th>Pendidikan</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                  $no = 1;
                  if($anggota!=null){
                    foreach($anggota as $d){                  
                  ?>
                        <tr>
                          <td><?php echo $no++?></td>
                          <td><?php echo $d->nama_lengkap?></td>
                          <td><?php echo $d->tgl_lahir?></td>
                          <td><?php echo $d->jk?></td>
                        <td><?php echo $d->alamat?></td>
                        <td><?php echo $d->tkt_pendidikan?></td>
                        </tr>
                         <?php }
                    } else { ?>
                         <td class="text-center" colspan="9"><i>Tidak Ada Data</i></td>
                    </tr>
                  <?php } ?>
                      </tbody>
                        </table>
        </div>
     </body>
     </html>