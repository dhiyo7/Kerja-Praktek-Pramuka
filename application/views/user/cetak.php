<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <style>
        

    #grad1{/*
      width:500px;
      height:300px;*/
     /* margin-left: 20px;
      background-color:white;
      background:linear-gradient(blue, black, white);
      color: black;
    */}
    img{
      width: 50px;
     text-align: left;
    }
    </style>
</head>
<body>

     <?php 
      foreach($anggota as $d)?>

        
        <h3 align="center">Kartu Tanda Anggota</h3>
        <h4 align="center">SMK NEGERI 1 YOGYAKARTA</h4>
       <p style="margin-left: 200px"> <img width="100px" height="100px" src="images/businessman.png" style="float: left;"></p>
        <p style="margin-left: 300px;">Nama :<?php echo $d->nama_lengkap?></p>
        <p style="margin-left: 300px;">TTL  :<?php echo $d->tgl_lahir?></p>
        <p style="margin-left: 300px;">Jenis Kelamin :<?php echo $d->jk?></p>
        <p style="margin-left: 300px;">Alamat :<?php echo $d->alamat?></p>
        <form style="text-align: right;">

        
        </form>
        </form>
        
     </body>
     </html>
      
<!-- 
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama </th>
                          <th>Agama</th>
                          <th>Alamat</th>
                          <th>Jenis Kelamin</th>
                          <th>Tanggal Lahir</th>
                          <th>Golongan Darah</th>

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
                          <td><?php echo $d->agama?></td>
                          <td><?php echo $d->alamat?></td>
                          <td><?php echo $d->jk?></td> 
                          <td><?php echo $d->tgl_lahir?></td>
                          <td><?php echo $d->gol_darah?></td>
                        </tr>
                         <?php }
                    } else { ?>
                         <td class="text-center" colspan="9"><i>Tidak Ada Data</i></td>
                    </tr>
                  <?php } ?>
                      </tbody>
                        </table>
                      </div>
                  </div>
                </div>
              </div>  
              </div>
            </div> -->
          <!-- end: content -->