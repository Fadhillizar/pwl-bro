<div class="container mt-4">
    <h3>Edit Produk</h3>
    <form action="<?= base_url('dashboard/update_product') ?>" method="post" enctype="multipart/form-data">

        <input type="hidden" name="id_produk" value="<?= $item['id_produk'] ?>">

        <div class="form-group mb-3">
            <label>Nama Produk</label>
            <input type="text" name="nama_produk" class="form-control" value="<?= $item['nama_produk'] ?>" required>
        </div>

        <div class="form-group mb-3">
            <label>Kategori Produk</label>
            <input type="text" name="kategori_produk" class="form-control" value="<?= $item['kategori_produk'] ?>" required>
        </div>

        <div class="form-group mb-3">
            <label>Stok Produk</label>
            <input type="number" name="stok_produk" class="form-control" value="<?= $item['stok_produk'] ?>" required>
        </div>

        <div class="form-group mb-3">
            <label>Harga Produk</label>
            <input type="number" name="harga_produk" class="form-control" value="<?= $item['harga_produk'] ?>" required>
        </div>

        <div class="form-group mb-3">
            <label>Ganti Gambar Produk</label><br>
            <?php if ($item['gambar_produk']): ?>
                <img src="<?= base_url('bahan/img/' . $item['gambar_produk']); ?>" width="100"><br>
            <?php endif; ?>
            <input type="file" name="gambar_produk" class="form-control mt-2">
        </div>

        <button type="submit" class="btn btn-success">Simpan Perubahan</button>
        <a href="<?= base_url('dashboard/lihat_dataProduk') ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>
