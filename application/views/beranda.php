<!-- <?php var_dump($buku) ?> -->

<div class="container_daftar_buku">
    <div class="container text-center">
        <div class="row justify-content-center">
            <?php foreach ($buku as $data) { ?>
            <!-- <?php echo $data ?> -->

            <div class="col-md-2 buku_view card shadow-sm" style="padding: 5px; margin-bottom: 10px; border: none;">
                <img style="height: 200px; object-fit: contain; margin-bottom: 5px;" class="img_buku"
                    src="<?php echo base_url() . 'assets/img/upload/' . $data['image'] ?>" />
                <p style="padding: 0px 8px;" class="text-start pengarang"><?php echo $data['pengarang'] ?></p>
                <p style="padding: 0px 8px; font-size: 10px; font-weight: 500;" class="text-start">
                    <?php echo $data['penerbit'] ?></p>
                <div class="d-flex justify-content-around" style="margin-top: -10px; margin-bottom: 20px;">
                    <button style="font-size: 12px;" type="button" class="btn btn-outline-info">Booking</button>
                    <a href="<?php echo base_url() . 'detail_buku?id=' . $data['id']  ?>" style="font-size: 12px;"
                        type="button" class="btn btn-outline-warning">Detail</a>

                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>