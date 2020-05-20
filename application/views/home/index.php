    <div class="col-6">
        <div class="row align-items-center mt-3 md-4">
            <?php foreach ($tanaman as $map) : ?>
                <?php if($map['id_tanaman'] <= 3){ ?>
                    <div class="col">
                        <a type="button" data-toggle="modal" data-target="#tanaman<?= $map['id_tanaman']; ?>">
                        <?php if($map['umur_tanaman'] <= 0){ ?>
                                <img src="<?php echo base_url()?>/assets/img/plant0_small.png" alt="..." class="img-thumbnail">
                            <?php }else if($map['umur_tanaman'] > 0 && $map['umur_tanaman'] < 15){ ?>
                                <img src="<?php echo base_url()?>/assets/img/plant1_small.png" alt="..." class="img-thumbnail">
                            <?php }else if($map['umur_tanaman'] >= 15 && $map['umur_tanaman'] < 30){ ?>
                                <img src="<?php echo base_url()?>/assets/img/plant2_small.png" alt="..." class="img-thumbnail">
                            <?php } ?>
                        </a>
                    </div>
                <?php } ?>
            <?php endforeach; ?>
        </div>

        <div class="row align-items-center mt-3 md-4">
            <?php foreach ($tanaman as $map) : ?>
                <?php if($map['id_tanaman'] > 3){ ?>
                    <div class="col">
                        <a type="button" data-toggle="modal" data-target="#tanaman<?= $map['id_tanaman']; ?>">
                            <?php if($map['umur_tanaman'] <= 0){ ?>
                                <img src="<?php echo base_url()?>/assets/img/plant0_small.png" alt="..." class="img-thumbnail">
                            <?php }else if($map['umur_tanaman'] > 0 && $map['umur_tanaman'] < 15){ ?>
                                <img src="<?php echo base_url()?>/assets/img/plant1_small.png" alt="..." class="img-thumbnail">
                            <?php }else if($map['umur_tanaman'] >= 15 && $map['umur_tanaman'] < 30){ ?>
                                <img src="<?php echo base_url()?>/assets/img/plant2_small.png" alt="..." class="img-thumbnail">
                            <?php } ?>
                        </a>
                    </div>
                <?php } ?>
            <?php endforeach; ?>
        </div>
    </div>
    
    
