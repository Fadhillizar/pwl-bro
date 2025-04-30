<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="card mb-4 mx-4 mt-3">
                <div class="card-header my-4">
                    <h5><i class="fas fa-plus"></i> Edit Kategori </h5>
                </div>
                <div class="modal-body">

                    <!-- FORM ACTION KE controller Dashboard/save_product -->
                    <form action="<?php echo base_url('dashboard/update_kategori') ?>" method="post" enctype="multipart/form-data">

                        <div class="form-group m-4">
                            <label for="">Nama Kategori</label>
                            <input type="text" name="nama_kategori"  class="form-control" required>
                            <input type="hidden" name="id_kategori" value="<?= $kategori['id_kategori'] ?>" class="form-control" required>
                        </div><br>

                        <div class="modal-footer m-4">
                            <button type="submit" class="btn btn-primary mx-2">Simpan Produk</button>
                            <a type="button" class="btn btn-secondary" href="<?= base_url('dashboard/lihat_dataKategori') ?>">Tutup</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</div>