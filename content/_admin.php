<div class="main-content">

                <div class="page-content">
                    
                    <!-- Page-Title -->
                    <div class="page-title-box">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h4 class="page-title mb-1">Admin</h4>
                                    <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item active">Selamat Datang di Page Admin</li>
                                    </ol>
                                </div>
                                 <div class="col-md-4">
                                    <div class="float-right d-none d-md-block">
                                        <div class="dropdown">
                                            <button class="btn btn-light btn-rounded dropdown-toggle" data-toggle="modal" data-target="#myModalForm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="mdi mdi-plus-outline mr-1"></i> Tambah Data
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- end page title end breadcrumb -->

                    <div class="page-content-wrapper">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
            
                                            <h4 class="header-title">Daftar Admin</h4>
                                            <p class="card-title-desc">Berikut daftar keanggotaan admin di Assesmen smp lab</p>
                                            <div class="table-responsive">
                                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Nama</th>
                                                    <th scope="col">Posisi</th>
                                                    <th scope="col">Aksi</th>
                                                </tr>
                                                </thead>
            
            
                                                <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Khafit</td>
                                                    <td>Admin</td>
                                                    <td>
                                                        <div class="btn-group" role="group">
                                                            <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-placement="top" title="View" data-target="#myModal">
                                                                <i class="mdi mdi-eye"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                <i class="mdi mdi-pencil"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                <i class="mdi mdi-trash-can"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Firzon</td>
                                                    <td>Admin</td>
                                                    <td>
                                                        <div class="btn-group" role="group">
                                                            <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-placement="top" title="View" data-target="#myModal">
                                                                <i class="mdi mdi-eye"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                <i class="mdi mdi-pencil"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                <i class="mdi mdi-trash-can"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>

                                                </tbody>
                                            </table>

                                            <table>
                                                <td>
                                                            <!-- sample modal content -->
                                                            <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title mt-0" id="myModalLabel">Informasi Detail Admin</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <h5 class="font-size-16">Admin : Khafit</h5>
                                                                            <p>Berikut detail admin khafit:
                                                                                <div class="table-responsive">
                                                                                    <table class="table table-centered table-hover mb-0">
                                                                                        <thead>
                                                                                            <tr>
                                                                                                <th scope="col">Label</th>
                                                                                                <th scope="col">Keterangan</th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <th scope="row">
                                                                                                    Nama
                                                                                                </th>
                                                                                                <td>Khafit</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Status</td>
                                                                                                <td>
                                                                                                    <div class="badge badge-soft-primary">Admin</div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Alamat</td>
                                                                                                <td>Tulungagung</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Tanggal Daftar</td>
                                                                                                <td>10-10-2023</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>No HP</td>
                                                                                                <td>0858521227128</td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </p>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                                                        </div>
                                                                    </div><!-- /.modal-content -->
                                                                </div><!-- /.modal-dialog -->
                                                            </div>
                                                            <!-- /.modal -->
                                                </td>
                                                <td>
                                                            <!-- sample modal content -->
                                                            <div id="myModalForm" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title mt-0" id="myModalLabel">Informasi Detail Admin</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <h5 class="font-size-16">Form Tambah Admin</h5>
                                                                            <p>Isilah Form Admin Berikut:
                                                                                <div class="form-group row">
                                                                                    <label for="example-text-input" class="col-md-2 col-form-label">Nama</label>
                                                                                    <div class="col-md-10">
                                                                                        <input class="form-control" type="text" value="" id="example-text-input">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label for="example-email-input" class="col-md-2 col-form-label">Email</label>
                                                                                    <div class="col-md-10">
                                                                                        <input class="form-control" type="email" value="" id="example-email-input">
                                                                                    </div>
                                                                                </div>
                                                                                
                                                                                <div class="form-group row">
                                                                                    <label for="example-tel-input" class="col-md-2 col-form-label">No HP</label>
                                                                                    <div class="col-md-10">
                                                                                        <input class="form-control" type="tel" value="" id="example-tel-input">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label for="example-text-input" class="col-md-2 col-form-label">Username</label>
                                                                                    <div class="col-md-10">
                                                                                        <input class="form-control" type="text" value="" id="example-text-input">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label for="example-password-input" class="col-md-2 col-form-label">Password</label>
                                                                                    <div class="col-md-10">
                                                                                        <input class="form-control" type="password" value="hunter2" id="example-password-input">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label for="example-date-input" class="col-md-2 col-form-label">Tanggal Daftar</label>
                                                                                    <div class="col-md-10">
                                                                                        <input class="form-control" type="date" value="2019-08-19" id="example-date-input">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label class="col-md-2 col-form-label">Posisi</label>
                                                                                    <div class="col-md-10">
                                                                                        <select class="form-control">
                                                                                            <option>Admin</option>
                                                                                            
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </p>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-primary waves-effect" data-dismiss="modal">Tambah</button>
                                                                        </div>
                                                                    </div><!-- /.modal-content -->
                                                                </div><!-- /.modal-dialog -->
                                                            </div>
                                                            <!-- /.modal -->
                                                </td>
                                            </table>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                            <!-- end row -->

                        </div> <!-- container-fluid -->
                    </div>


                    <!-- end page-content-wrapper -->
                </div>
                <!-- End Page-content -->
            </div>