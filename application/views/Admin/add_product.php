<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="card mb-4 mx-4 mt-3">
                <div class="card-header">
                    <h5><i class="fas fa-plus"></i> Tambah Produk</h5>
                </div>
                <div class="modal-body">

                    <!-- FORM ACTION KE controller Dashboard/save_product -->
                    <form action="<?php echo base_url('dashboard/save_product') ?>" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="">Nama Produk</label>
                            <input type="text" name="nama_produk" class="form-control" required>
                        </div><br>

                        <div class="form-group">
                            <label for="">Kategori Produk</label>
                            <input type="text" name="kategori_produk" class="form-control" required>
                        </div><br>

                        <div class="form-group">
                            <label for="">Stok Produk</label>
                            <input type="number" name="stok_produk" class="form-control" required>
                        </div><br>

                        <div class="form-group">
                            <label for="">Harga Produk</label>
                            <input type="number" name="harga_produk" class="form-control" required>
                        </div><br>

                        <div class="form-group">
                            <label for="">Gambar Produk</label><br>
                            <h6 class="text-muted">*Usahakan gambar berkualitas baik</h6>
                            <input type="file" name="gambar_produk" class="form-control">
                        </div>

                        <div class="modal-footer mt-4">
                            <button type="submit" class="btn btn-primary">Simpan Produk</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</div>