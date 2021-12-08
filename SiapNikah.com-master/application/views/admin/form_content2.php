    <?php $this->load->view('layout/header_admin'); ?>

            <div class="row">
                <div class="col-lg-6">

                    <form method="POST" action="<?php echo site_url('tahap/insert_aksi2'); ?>">
                         <div class="form-group">
                            <label>ID</label>
                            <input class="form-control" value="<?php if(isset($tahap2->id_tahap2)) {
                                            echo $tahap2->id_tahap2;
                                        } ?>" name=id_tahap placeholder="ID">
                        </div>
                        <div class="form-group">
                            <label>Jangka</label>
                            <input class="form-control" value="<?php if(isset($tahap2->jangka_tahap2)) {
                                        	echo $tahap2->jangka_tahap2;
                                        } ?>" name=jangka_tahap placeholder="Jangka">
                        </div>
                        <div class="form-group">
                            <label>Isi</label>
                            <input class="form-control" name=isi_tahap value="<?php if(isset($tahap2->isi_tahap2)) {
                                        	echo $tahap2->isi_tahap2;
                                        } ?>" placeholder="Isi">
                        </div>
                        <button type="submit" class="btn btn-default">Submit Button</button>
                        <button type="reset" class="btn btn-default">Reset Button</button>

                    </form>
                </div>
            </div>
    <?php $this->load->view('layout/header_admin'); ?>