<div class="container" style="padding-bottom: 20px;">
    <!-- <?php var_dump($kategori) ?> -->
    <div class="container_daftar_buku" style="text-align: center;">
        <img class="img_buku" src="<?php echo base_url() . 'assets/img/upload/' . $detailBuku[0]['image'] ?>" />
        <p style="padding: 0px 8px; margin-bottom: 5px; margin-top: 10px;" class="pengarang">
            <?php echo $detailBuku[0]['pengarang'] ?>
        </p>
        <div class="row" style="padding: 8px; border-top: 1px solid grey; border-bottom: 1px solid grey;">
            <div class="col-6 row">
                <p class="col-3" style="font-weight: 500; text-align: start;">Judul Buku </p>
                <p class="col-9" style="font-weight: 300; text-align: start;">
                    <?php echo $detailBuku[0]['judul_buku'] ?>
                </p>
            </div>
            <div class="col-6 row">
                <p class="col-3" style="font-weight: 500; text-align: start;">Kategori </p>
                <p class="col-9" style="font-weight: 300; text-align: start;">
                    <?php echo $kategori ?>
                </p>
            </div>
            <div class="col-6 row">
                <p class="col-3" style="font-weight: 500; text-align: start;">Penerbit </p>
                <p class="col-9" style="font-weight: 300; text-align: start;">
                    <?php echo $detailBuku[0]['penerbit'] ?>
                </p>
            </div>
            <div class="col-6 row">
                <p class="col-3" style="font-weight: 500; text-align: start;">Dipinjam </p>
                <p class="col-9" style="font-weight: 300; text-align: start;">
                    <?php echo $detailBuku[0]['dipinjam'] ?>
                </p>
            </div>
            <div class="col-6 row">
                <p class="col-3" style="font-weight: 500; text-align: start;">Tahun Terbit </p>
                <p class="col-9" style="font-weight: 300; text-align: start;">
                    <?php echo $detailBuku[0]['tahun_terbit'] ?>
                </p>
            </div>
            <div class="col-6 row">
                <p class="col-3" style="font-weight: 500; text-align: start;">Dibooking </p>
                <p class="col-9" style="font-weight: 300; text-align: start;">
                    <?php echo $detailBuku[0]['dibooking'] ?>
                </p>
            </div>
            <div class="col-6 row">
                <p class="col-3" style="font-weight: 500; text-align: start;">ISBN </p>
                <p class="col-9" style="font-weight: 300; text-align: start;">
                    <?php echo $detailBuku[0]['isbn'] ?>
                </p>
            </div>
            <div class="col-6 row">
                <p class="col-3" style="font-weight: 500; text-align: start;">Tersedia </p>
                <p class="col-9" style="font-weight: 300; text-align: start;">
                    <?php echo $detailBuku[0]['stok'] ?>
                </p>
            </div>
            <div class="d-flex justify-content-center" style="margin-top: 20px;">
                <a style="font-size: 12px; margin-right: 15px;" type="button" class="btn btn-outline-info">Booking</a>
                <a href="<?php echo base_url() ?>" style="font-size: 12px; margin-left: 15px;" type="button"
                    class="btn btn-outline-secondary">Kembali</a>

            </div>
        </div>
    </div>

</div>