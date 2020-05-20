    
<?php foreach ($tanaman as $detail) :?>
    <div class="modal fade" id="tanaman<?= $detail['id_tanaman']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><?= $detail['nama_tanaman']; ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <center>
                    <?php if($detail['umur_tanaman'] <= 0){ ?>
                                <img src="<?php echo base_url()?>/assets/img/plant0_small.png" alt="..." class="img-thumbnail">
                            <?php }else if($detail['umur_tanaman'] > 0 && $detail['umur_tanaman'] < 15){ ?>
                                <img src="<?php echo base_url()?>/assets/img/plant1_small.png" alt="..." class="img-thumbnail">
                            <?php }else if($detail['umur_tanaman'] >= 15 && $detail['umur_tanaman'] < 30){ ?>
                                <img src="<?php echo base_url()?>/assets/img/plant2_small.png" alt="..." class="img-thumbnail">
                            <?php } ?>
                    </center>
                    <ul class="list-group mt-3">
                        <li class="list-group-item">posisi : <?= $detail['posisi']; ?></li>
                        <li class="list-group-item">umur : <?= $detail['umur_tanaman']; ?> hari</li>
                        <li class="list-group-item">kadar air : <?= $detail['kadar_air']; ?> % 
                            <button type="button" class="btn btn-primary">Siram Air</button>
                            <button type="button" class="btn btn-secondary">Cek Air</button>
                        </li>
                        <li class="list-group-item">kadar PH : <?= $detail['kadar_ph']; ?> pH
                            <button type="button" class="btn btn-primary">Siram Pupuk</button>
                            <button type="button" class="btn btn-secondary">Cek Pupuk</button>
                        </li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark">Hapus</button>
                    <button type="button" class="btn btn-success">Tanam</button>
                    <button type="button" class="btn btn-warning">Panen</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>