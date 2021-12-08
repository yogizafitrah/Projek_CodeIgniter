    <?php $this->load->view('layout/header_admin'); ?>

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i>Tahap 1</h3>
                        </div>

                <div class="limiter">
                    <div class="wrap-table100">
                        <div class="table100">
                            <a href="<?php echo site_url("tahap/insert1")?>">Tambah Data</a>
                            <table border="1">
                                <thead>
                                <tr class="table100-head" >
                                    <th class="column1" width="3">No</th>
                                    <th class="column1">Jangka</th>
                                    <th class="column1">Isi</th>
                                    <th class="column1">Opsi</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($tahap1 as $key1 => $value1) {
                                    ?>  
                                <tr>
                                    <td class="column1"><?php echo $value1->id_tahap1; ?></td>
                                    <td class="column1"><?php echo $value1->jangka_tahap1; ?></td>
                                    <td class="column1"><?php echo $value1->isi_tahap1; ?> </td>
                                    <td class="column1">
        <a href="<?php echo site_url('tahap/update_tahap1/'.$value1->id_tahap1) ?>" class="btn btn-warning">EDIT</a>
                                    
       <a href="<?php echo site_url('tahap/delete_tahap1/'.$value1->id_tahap1) ?>"    onClick="return confirm('Apakah anda ingin menghapus data ini ?')" 
                                        class="btn btn-danger">HAPUS</a>
                                    </td>
                                </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i>Tahap 2</h3>
                        </div>

                <div class="limiter">
                    <div class="wrap-table100">
                        <div class="table100">
                            <a href="<?php echo site_url("tahap/insert2")?>">Tambah Data</a>
                            <table border="1">
                                <thead>
                                <tr class="table100-head" >
                                    <th class="column1" width="3">No</th>
                                    <th class="column1">Jangka</th>
                                    <th class="column1">Isi</th>
                                    <th class="column1">Opsi</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php
                                $query = $this->db->query("SELECT * FROM tahap2");
                                foreach ($query->result_array() as $row)
                                {
                                    ?>  
                                <tr>
                                    <td class="column1"><?php echo $row['id_tahap2']; ?></td>
                                    <td class="column1"><?php  echo $row['jangka_tahap2']; ?></td>
                                    <td class="column1"><?php echo $row['isi_tahap2']; ?></td>
                                    <td class="column1">

 <a href="<?php echo site_url("tahap/update_tahap2")?>/<?php echo $row['id_tahap2']; ?>" class="btn btn-warning">
     EDIT
    </a>
           <a href="<?php echo site_url("tahap/delete_tahap2")?>/<?php echo $row['id_tahap2']; ?>"    onClick="return confirm('Apakah anda ingin menghapus data ini ?')" 
                                        class="btn btn-danger">HAPUS</a>

                                    </td>
                                </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i>Tahap 3</h3>
                </div>

                 <div class="limiter">
                    <div class="wrap-table100">
                        <div class="table100">
                            <a href="<?php echo site_url("tahap/insert3")?>">Tambah Data</a>
                            <table border="1">
                                <thead>
                                <tr class="table100-head" >
                                    <th class="column1" width="3">No</th>
                                    <th class="column1">Jangka</th>
                                    <th class="column1">Isi</th>
                                    <th class="column1">Opsi</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php
                                $query = $this->db->query("SELECT * FROM tahap3");
                                foreach ($query->result_array() as $row)
                                {
                                    ?>  
                                <tr>
                                    <td class="column1"><?php echo $row['id_tahap3']; ?></td>
                                    <td class="column1"><?php  echo $row['jangka_tahap3']; ?></td>
                                    <td class="column1"><?php echo $row['isi_tahap3']; ?></td>
                                    <td class="column1">
        <a href="<?php echo site_url("tahap/update_tahap3")?>/<?php echo $row['id_tahap3']; ?>" class="btn btn-warning">
     EDIT
    </a>
           <a href="<?php echo site_url("tahap/delete_tahap3")?>/<?php echo $row['id_tahap3']; ?>"    onClick="return confirm('Apakah anda ingin menghapus data ini ?')" 
                                        class="btn btn-danger">HAPUS</a>
                                    </td>
                                </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i>Tahap 4</h3>
                </div>

                 <div class="limiter">
                    <div class="wrap-table100">
                        <div class="table100">
                            <a href="<?php echo site_url("tahap/insert4")?>">Tambah Data</a>
                            <table border="1">
                                <thead>
                                <tr class="table100-head" >
                                    <th class="column1" width="3">No</th>
                                    <th class="column1">Jangka</th>
                                    <th class="column1">Isi</th>
                                    <th class="column1">Opsi</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php
                                $query = $this->db->query("SELECT * FROM tahap4");
                                foreach ($query->result_array() as $row)
                                {
                                    ?>  
                                <tr>
                                    <td class="column1"><?php echo $row['id_tahap4']; ?></td>
                                    <td class="column1"><?php  echo $row['jangka_tahap4']; ?></td>
                                    <td class="column1"><?php echo $row['isi_tahap4']; ?></td>
                                    <td class="column1">
        <a href="<?php echo site_url("tahap/update_tahap4")?>/<?php echo $row['id_tahap4']; ?>" class="btn btn-warning">
     EDIT
    </a>
           <a href="<?php echo site_url("tahap/delete_tahap4")?>/<?php echo $row['id_tahap4']; ?>"    onClick="return confirm('Apakah anda ingin menghapus data ini ?')" 
                                        class="btn btn-danger">HAPUS</a>
                                    </td>
                                </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i>Tahap 5</h3>
                </div>

                 <div class="limiter">
                    <div class="wrap-table100">
                        <div class="table100">
                            <a href="<?php echo site_url("tahap/insert5")?>">Tambah Data</a>
                            <table border="1">
                                <thead>
                                <tr class="table100-head" >
                                    <th class="column1" width="3">No</th>
                                    <th class="column1">Jangka</th>
                                    <th class="column1">Isi</th>
                                    <th class="column1">Opsi</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php
                                $query = $this->db->query("SELECT * FROM tahap5");
                                foreach ($query->result_array() as $row)
                                {
                                    ?>  
                                <tr>
                                    <td class="column1"><?php echo $row['id_tahap5']; ?></td>
                                    <td class="column1"><?php  echo $row['jangka_tahap5']; ?></td>
                                    <td class="column1"><?php echo $row['isi_tahap5']; ?></td>
                                    <td class="column1">
        <a href="<?php echo site_url("tahap/update_tahap5")?>/<?php echo $row['id_tahap5']; ?>" class="btn btn-warning">
     EDIT
    </a>
           <a href="<?php echo site_url("tahap/delete_tahap5")?>/<?php echo $row['id_tahap5']; ?>"    onClick="return confirm('Apakah anda ingin menghapus data ini ?')" 
                                        class="btn btn-danger">HAPUS</a>
                                    </td>
                                </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i>Tahap 6</h3>
                </div>

                 <div class="limiter">
                    <div class="wrap-table100">
                        <div class="table100">
                            <a href="<?php echo site_url("tahap/insert6")?>">Tambah Data</a>
                            <table border="1">
                                <thead>
                                <tr class="table100-head" >
                                    <th class="column1" width="3">No</th>
                                    <th class="column1">Jangka</th>
                                    <th class="column1">Isi</th>
                                    <th class="column1">Opsi</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php
                                $query = $this->db->query("SELECT * FROM tahap6");
                                foreach ($query->result_array() as $row)
                                {
                                    ?>  
                                <tr>
                                    <td class="column1"><?php echo $row['id_tahap6']; ?></td>
                                    <td class="column1"><?php  echo $row['jangka_tahap6']; ?></td>
                                    <td class="column1"><?php echo $row['isi_tahap6']; ?></td>
                                    <td class="column1">
        <a href="<?php echo site_url("tahap/update_tahap6")?>/<?php echo $row['id_tahap6']; ?>" class="btn btn-warning">
     EDIT
    </a>
           <a href="<?php echo site_url("tahap/delete_tahap6")?>/<?php echo $row['id_tahap6']; ?>"    onClick="return confirm('Apakah anda ingin menghapus data ini ?')" 
                                        class="btn btn-danger">HAPUS</a>
                                    </td>
                                </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>




    <?php $this->load->view('layout/footer_admin'); ?>
