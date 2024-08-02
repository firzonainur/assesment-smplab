<div class="main-content">

                <div class="page-content">
                    
                    <!-- Page-Title -->
                    <div class="page-title-box">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h4 class="page-title mb-1">Siswa</h4>
                                    <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item active">Selamat Datang di halaman Siswa</li>
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
            
                                            <h4 class="header-title">Daftar Siswa</h4>
                                            <p class="card-title-desc">Berikut daftar siswa di Assesmen smp lab</p>
                                            <div class="table-responsive">
                                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">No. Induk</th>
                                                    <th scope="col">Nama Siswa</th>
                                                    <th scope="col">Kelas</th>
                                                    <th scope="col">Semester</th>
                                                    <th scope="col">Tahun Ajaran</th>
                                                    <th scope="col">Mata Pelajaran</th>
                                                    <th scope="col">Nilai</th>
                                                    <th scope="col">Aksi</th>
                                                </tr>
                                                </thead>
            
            
                                                <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>20240101</td>
                                                    <td>Khafit</td>
                                                    <td>7</td>
                                                    <td>Semester 1</td>
                                                    <td>2024/2025</td>
                                                    <td>
                                                         <ul class="list-unstyled mb-0">
                                                                <ul class="pl-4">
                                                                    <li>IPA</li>
                                                                    <li>IPS</li>
                                                                    <li>Matematika</li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td>
                                                         <ul class="list-unstyled mb-0">
                                                                <ul class="pl-4">
                                                                    <li>
                                                                       <div class="btn-group" role="group">
                                                                        <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-placement="top" title="View">
                                                                            IPS
                                                                        </button>
                                                                        <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#myModalNilai" data-placement="top" title="Edit">
                                                                            <i class="mdi mdi-eye"></i>
                                                                        </button>
                                                                    </div>
                                                                    </li>
                                                                    <br>
                                                                    <li>
                                                                       <div class="btn-group" role="group">
                                                                        <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-placement="top" title="View">
                                                                            IPA
                                                                        </button>
                                                                        <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#myModalNilai" data-placement="top" title="Edit">
                                                                            <i class="mdi mdi-eye"></i>
                                                                        </button>
                                                                    </div>
                                                                    </li>
                                                                    <br>
                                                                    <li>
                                                                       <div class="btn-group" role="group">
                                                                        <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-placement="top" title="View">
                                                                            MTK
                                                                        </button>
                                                                        <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#myModalNilai" data-placement="top" title="Edit">
                                                                            <i class="mdi mdi-eye"></i>
                                                                        </button>
                                                                    </div>
                                                                    </li>
                                                                    
                                                                </ul>
                                                        </ul>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group" role="group">
                                                            <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-placement="top" title="View" data-target="#myModal">
                                                                <i class="mdi mdi-eye"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#myModalFormEdit" data-placement="top" title="Edit">
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
                                                                            <h5 class="modal-title mt-0" id="myModalLabel">Informasi Detail Siswa</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <h5 class="font-size-16">Siswa : Khafit</h5>
                                                                            <p>Berikut detail Siswa :
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
                                                                                                    No. Induk
                                                                                                </th>
                                                                                                <td>09</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th scope="row">
                                                                                                    Nama
                                                                                                </th>
                                                                                                <td>Khafit</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>No HP</td>
                                                                                                <td>0858521227128</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Kelas</td>
                                                                                                <td>
                                                                                                    <div class="badge badge-soft-primary">7</div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Semester</td>
                                                                                                <td>
                                                                                                    <div class="badge badge-soft-primary">1</div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Tanggal Daftar</td>
                                                                                                <td>10-10-2023</td>
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
                                                                            <h5 class="modal-title mt-0" id="myModalLabel">Informasi Detail Siswa</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <h5 class="font-size-16">Form Tambah Siswa</h5>
                                                                            <p>Isilah Form Siswa Berikut:
                                                                                <div class="form-group row">
                                                                                    <label for="example-text-input" class="col-md-2 col-form-label">Nama</label>
                                                                                    <div class="col-md-10">
                                                                                        <input class="form-control" type="text" value="" id="example-text-input">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label for="example-tel-input" class="col-md-2 col-form-label">No HP</label>
                                                                                    <div class="col-md-10">
                                                                                        <input class="form-control" type="tel" value="" id="example-tel-input">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label for="example-date-input" class="col-md-2 col-form-label">Tanggal Daftar</label>
                                                                                    <div class="col-md-10">
                                                                                        <input class="form-control" type="date" value="2019-08-19" id="example-date-input">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label class="col-md-2 col-form-label">Kelas</label>
                                                                                    <div class="col-md-10">
                                                                                        <select class="form-control">
                                                                                            <option>Pilih Kelas</option>
                                                                                            <option>7</option>
                                                                                            <option>8</option>
                                                                                            <option>9</option> 
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label class="col-md-2 col-form-label">Tahun Ajaran</label>
                                                                                    <div class="col-md-10">
                                                                                        <select class="form-control">
                                                                                            <option>Pilih Tahun</option>
                                                                                            <option>2024/2025</option>
                                                                                            <option>2025/2026</option> 
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                 <div class="form-group row">
                                                                                    <label class="col-md-2 col-form-label">Semester</label>
                                                                                    <div class="col-md-10">
                                                                                        <select class="form-control">
                                                                                            <option>Pilih Semester</option>
                                                                                            <option>1</option>
                                                                                            <option>2</option> 
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label class="col-md-2 col-form-label">Mapel 1</label>
                                                                                    <div class="col-md-10">
                                                                                        <select class="form-control">
                                                                                            <option>Pilih Mapel 1</option>
                                                                                            <option>IPA</option>
                                                                                            <option>IPS</option>
                                                                                            <option>Matematika</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label class="col-md-2 col-form-label">Mapel 2</label>
                                                                                    <div class="col-md-10">
                                                                                        <select class="form-control">
                                                                                            <option>Pilih Mapel 2</option>
                                                                                            <option>IPA</option>
                                                                                            <option>IPS</option>
                                                                                            <option>Matematika</option>
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
                                                <td>
                                                     <!-- sample modal content -->
                                                            <div id="myModalNilai" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title mt-0" id="myModalLabel">Informasi Detail Nilai Siswa</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <h5 class="font-size-16">Siswa : Khafit</h5>
                                                                            <h5 class="font-size-16">Guru : Feri</h5>
                                                                            <p>Berikut detail nilai IPS :
                                                                                <div class="table-responsive">
                                                                                    <table class="table table-centered table-hover mb-0">
                                                                                        <thead>
                                                                                            <tr>
                                                                                                <th scope="col">Materi</th>
                                                                                                <th scope="col">Keterangan</th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <th scope="row">
                                                                                                    Topik Geografi: Peta dan Penggunaan Peta
                                                                                                </th>
                                                                                                <td>85</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th scope="row">
                                                                                                    Topik Sejarah: Masa Praaksara di Indonesia
                                                                                                </th>
                                                                                                <td>80</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th scope="row">
                                                                                                    Topik Ekonomi: Kebutuhan dan Keinginan
                                                                                                </th>
                                                                                                <td>100</td>
                                                                                            </tr>
                                                                                             <tr>
                                                                                                <th scope="row">
                                                                                                    Topik Sosiologi: Nilai dan Norma Sosial
                                                                                                </th>
                                                                                                <td>100</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th scope="row">
                                                                                                    Rata-rata
                                                                                                </th>
                                                                                                <td>100</td>
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
                                                            <div id="myModalFormEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title mt-0" id="myModalLabel">Edit Detail Siswa</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <h5 class="font-size-16">Form Edit Siswa</h5>
                                                                            <p>Isilah Form Siswa Berikut:
                                                                                 <div class="form-group row">
                                                                                    <label for="example-text-input" class="col-md-2 col-form-label">Nama</label>
                                                                                    <div class="col-md-10">
                                                                                        <input class="form-control" type="text" value="" id="example-text-input">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label for="example-tel-input" class="col-md-2 col-form-label">No HP</label>
                                                                                    <div class="col-md-10">
                                                                                        <input class="form-control" type="tel" value="" id="example-tel-input">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label for="example-date-input" class="col-md-2 col-form-label">Tanggal Daftar</label>
                                                                                    <div class="col-md-10">
                                                                                        <input class="form-control" type="date" value="2019-08-19" id="example-date-input">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label class="col-md-2 col-form-label">Kelas</label>
                                                                                    <div class="col-md-10">
                                                                                        <select class="form-control">
                                                                                            <option>Pilih Kelas</option>
                                                                                            <option>7</option>
                                                                                            <option>8</option>
                                                                                            <option>9</option> 
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label class="col-md-2 col-form-label">Tahun Ajaran</label>
                                                                                    <div class="col-md-10">
                                                                                        <select class="form-control">
                                                                                            <option>Pilih Tahun</option>
                                                                                            <option>2024/2025</option>
                                                                                            <option>2025/2026</option> 
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                 <div class="form-group row">
                                                                                    <label class="col-md-2 col-form-label">Semester</label>
                                                                                    <div class="col-md-10">
                                                                                        <select class="form-control">
                                                                                            <option>Pilih Semester</option>
                                                                                            <option>1</option>
                                                                                            <option>2</option> 
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label class="col-md-2 col-form-label">Mapel 1</label>
                                                                                    <div class="col-md-10">
                                                                                        <select class="form-control">
                                                                                            <option>Pilih Mapel 1</option>
                                                                                            <option>IPA</option>
                                                                                            <option>IPS</option>
                                                                                            <option>Matematika</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label class="col-md-2 col-form-label">Mapel 2</label>
                                                                                    <div class="col-md-10">
                                                                                        <select class="form-control">
                                                                                            <option>Pilih Mapel 2</option>
                                                                                            <option>IPA</option>
                                                                                            <option>IPS</option>
                                                                                            <option>Matematika</option>
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