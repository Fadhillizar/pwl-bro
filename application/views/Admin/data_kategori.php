<!--begin::App Main-->
<main class="app-main">
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6"><h3 class="mb-0">Selamat Datang Di Halaman Categories</h3>
            </div>
                <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard/index') ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Categories</li>
                </ol>
                </div>
            </div>
        </div>
        <!--end::Row-->
        <!--end::Container-->
    </div>
    <!--end::App Content Header-->

    <!--begin::App Content-->
    <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
        <!--begin::Row-->
        <div class="row">
            <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-header">
                    <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#tambah_produk">
                    <i class="fas fa-plus fa-sm me-1"></i>Tambah Kategori
                    </button>
                    <!-- <h3 class="card-title">Table Data Produk</h3> -->
                </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th style="width: 10px">No</th>
                                    <th style="width: 600px">Kategori Produk</th>                                                        
                                    <th style="width: 10px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="align-middle">
                                    <td>1.</td>
                                    <td>Liquid</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!-- tombol modal edit form -->
                                            <button class="btn btn-warning btn-sm me-4" data-bs-toggle="modal" 
                                                data-bs-target=""> 
                                                <i class="fa-regular fa-pen-to-square"></i>Edit
                                            </button>

                                            <!-- tombol modal hapus form -->
                                            <button type="button" class="btn btn-danger btn-sm" 
                                            onclick="">
                                            <i class="fas fa-trash"></i> Hapus
                                            </button>
                                        </div>                         
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-end">
                        <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                    </ul>
                    </div>
            </div>
            </div>

        </div>
        <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content-->

</main>
<!--end::App Main-->


<!-- Modal Buat Nambahin Barang -->
<div class="modal fade" id="tambah_produk" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Form Tambah Produk</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url('') ?>" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label for="">Nama Produk</label>
                <input type="text" name="nama_produk" class="form-control">
            </div><br>

            <div class="form-group">
                <label for="">Deskripsi</label>
                <input type="text" name="deskripsi" class="form-control">
            </div><br>

            <div class="form-group">
                <label for="">Harga</label>
                <input type="text" name="harga" class="form-control">
            </div><br>

            <div class="form-group">
                <label for="">Stok</label>
                <input type="text" name="Stok" class="form-control">
            </div><br>

            <!-- buat Gambar -->
            <div class="form-group">
                <label for="">Gambar Produk</label><br>
                <h6>*Usahain gambarnya bagus ya...</h6>
                <input type="file" name="gambar_produk" class="form-control">
            </div>

        </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
      </form>

    </div>
  </div>
</div>

