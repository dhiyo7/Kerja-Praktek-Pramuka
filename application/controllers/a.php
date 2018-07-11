 <div class="form-group">
                                 <label class="col-md-2 control-label text-right"></label>
                             <div class="col-md-10">
                         <div class="col-md-3">
                        <select class="form-control" name="provinsi" id="provinsi">
                            <option value="">Provinsi</option>
                            <?php
                            foreach ($provinsi as $prov) {
                                ?>
                                <option <?php echo $provinsi_selected == $prov->id_provinsi ? 'selected="selected"' : '' ?> 
                                    value="<?php echo $prov->id_provinsi ?>"><?php echo $prov->nama_provinsi ?></option>
                                <?php
                            }
                            ?>
                        </select>
                      </div>
                       <div class="col-md-3">
                        <select class="form-control" name="kota" id="kota">
                            <option value="">Kabupaten</option>
                            <?php
                            foreach ($kota as $kot) {
                                ?>
                                <!--di sini kita tambahkan class berisi id provinsi-->
                                <option <?php echo $kota_selected == $kot->id_provinsi_fk ? 'selected="selected"' : '' ?> 
                                    class="<?php echo $kot->id_provinsi_fk ?>" value="<?php echo $kot->id_kota ?>"><?php echo $kot->nama_kota ?></option>
                                <?php
                            }
                            ?>
                        </select>
                   
                    </div>
                 
                       <div class="col-md-3">
                       
                        <select class="form-control" name="kecamatan" id="kecamatan">
                            <option value="">Kecematan</option>
                            <?php
                            foreach ($kecamatan as $kec) {
                                ?>
                                <!--di sini kita tambahkan class berisi id kota-->
                                <option <?php echo $kecamatan_selected == $kec->id_kecamatan ? 'selected="selected"' : '' ?>  
                                    class="<?php echo $kec->id_kota_fk ?>" value="<?php echo $kec->id_kecamatan ?>"><?php echo $kec->nama_kecamatan ?></option>
                                <?php
                            }
                            ?>
                        </select>
                        <br>
                      </div>

                       <div class="col-md-3">
                       
                        <select class="form-control" name="kecamatan" id="kecamatan">
                            <option value="">Desa</option>
                            <?php
                            foreach ($desa as $d) {
                                ?>
                                <!--di sini kita tambahkan class berisi id kota-->
                                <option <?php echo $desa_selected == $d->id_desa ? 'selected="selected"' : '' ?>  
                                    class="<?php echo $kec->id_kota_fk ?>" value="<?php echo $kec->id_kecamatan ?>"><?php echo $kec->nama_desa ?></option>
                                <?php
                            }
                            ?>
                        </select>
                        <br>
                      </div>
                      </div>
                    </div>