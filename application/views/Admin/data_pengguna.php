<!--begin::App Main-->
<main class="app-main">
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6"><h3 class="mb-0">Selamat Datang Di Halaman Data Pengguna</h3>
            </div>
                <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard/index') ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data Pengguna</li>
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
                <div class="card-header"><h3 class="card-title">Table Data Pengguna</h3></div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th style="width: 10px">No</th>
                                    <th style="width: 10px">Nama Pengguna</th>
                                    <th style="width: 10px">Tanggal Lahir</th>
                                    <th style="width: 10px">Jenis Kelamin</th>
                                    <th style="width: 10px">No Telepon</th>
                                    <th style="width: 10px">Alamat</th>
                                    <th style="width: 10px" >Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="align-middle">
                                    <td>1.</td>
                                    <td>fiqi</td>
                                    <td>20-12-2000</td>
                                    <td>Laki laki</td>
                                    <td>0807070070</td>
                                    <td>Jl ammmammamamdadoaodajdojodjj</td>
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
