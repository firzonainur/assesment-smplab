<div class="main-content">

                <div class="page-content">
                    
                    <!-- Page-Title -->
                    <div class="page-title-box">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h4 class="page-title mb-1">Admin</h4>
                                    <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item active">Selamat Datang di Page Kelompok</li>
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
            
                                            <h4 class="header-title">Daftar Kelompok</h4>
                                            <p class="card-title-desc">Berikut list kelompok</p>
                                            <div class="table-responsive">
                                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>
                                                    <th scope="col">Id</th>
                                                    <th scope="col">Nama Kelompok</th>
                                                    <th scope="col">Keterangan</th>
                                                    <th scope="col">Tanggal Pelaksanaan Kegiatan</th>
                                                    <th scope="col">Konselor</th>
                                                    
                                                    <th scope="col">Link Pertemuan</th>
                                                    <th scope="col">Link Materi</th>
                                                    <th scope="col">Aktif</th>
                                                    <th scope="col">Aksi</th>
                                                </tr>
                                                </thead>
            
            
                                                <tbody>
                                                <tr>
                                                    <th scope="row">KLMPK001</th>
                                                    <td>1</td>
                                                    <td>Kelompok 1</td>
                                                    <td>04-09-2023</td>
                                                    <td>Konselor 1</td>
                                                    <td>https://zoom.com/9990e2joj0qjd0</td>
                                                    <td>https://drive.google.com/9990e2jodojqd0</td>
                                                    <td>Aktif</td>
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
                                                                            <h5 class="font-size-16">User : Firzon</h5>
                                                                            <p>Berikut detail user firzon:
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
                                                                                                <td>Firzon</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Email</td>
                                                                                                <td>
                                                                                                    <div class="badge badge-soft-primary">firzonainur@gmail.com</div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Tanggal Daftar</td>
                                                                                                <td>10-10-2023</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>No HP</td>
                                                                                                <td>0858521227128</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Username</td>
                                                                                                <td>firzonainur</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Password</td>
                                                                                                <td>******</td>
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
                                                                            <h5 class="font-size-16">Form Tambah Data Kelompok</h5>
                                                                            <p>Isilah Form Admin Berikut:
                                                                                <div class="form-group row">
                                                                                    <label for="example-text-input" class="col-md-2 col-form-label">Nama</label>
                                                                                    <div class="col-md-10">
                                                                                        <input class="form-control" type="text" value="" id="example-text-input">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label for="example-text-input" class="col-md-2 col-form-label">Keterangan</label>
                                                                                    <div class="col-md-10">
                                                                                        <input class="form-control" type="email" value="" id="example-email-input">
                                                                                    </div>
                                                                                </div>
                                                                                
                                                                               <div class="form-group row">
                                                                                    <label for="example-date-input" class="col-md-2 col-form-label">Tanggal Pelaksanaan</label>
                                                                                    <div class="col-md-10">
                                                                                        <input class="form-control" type="date" value="2019-08-19" id="example-date-input">
                                                                                    </div>
                                                                                </div>
                                                                               <div class="form-group row">
                                                                                    <label class="col-md-2 col-form-label">Status</label>
                                                                                    <div class="col-md-10">
                                                                                        <select class="form-control">
                                                                                            <option>Aktif</option>
                                                                                            <option>Tidak Aktif</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label class="col-md-2 col-form-label">Konselor</label>
                                                                                    <div class="col-md-10">
                                                                                        <select class="form-control">
                                                                                            <option>Konselor 1</option>
                                                                                            <option>Konselor 2</option>
                                                                                            <option>Konselor 3</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                 <div class="form-group row">
                                                                                    <label for="example-text-input" class="col-md-2 col-form-label">Link Pertemuan</label>
                                                                                    <div class="col-md-10">
                                                                                        <input class="form-control" type="text" value="" id="example-text-input">
                                                                                    </div>
                                                                                </div>
                                                                                 <div class="form-group row">
                                                                                    <label for="example-text-input" class="col-md-2 col-form-label">Link Materi</label>
                                                                                    <div class="col-md-10">
                                                                                        <input class="form-control" type="text" value="" id="example-text-input">
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