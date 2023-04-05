<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?=$title?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#<?=base_url()?>">Home</a></li>
                        <li class="breadcrumb-item active"><?=str_replace('/', ' / ',uri_string());?></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="form-group">
                                <label>Status Lembar Disposisi</label>
                                <select class="form-control" id="statusLembar">
                                    <option>Belum Didisposisikan</option>
                                    <option>Sudah Didisposisikan</option>
                                    <option>Belum Selesai</option>
                                    <option>Sudah Selesai</option>
                                </select>
                            </div>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Dari</th>
                                        <th>Tanggal Masuk</th>
                                        <th>Rangkuman Isi</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                        <th>Laporan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Diskominfo
                                        </td>
                                        <td>6 Juni 2023</td>
                                        <td>Perihal Pelaksanaan Acara Pembinaan Statistik 2023</td>
                                        <td>Belum Didisposisi</td>
                                        <td>
                                            <a href="<?=base_url('/disposisi/proses')?>"
                                                class="btn btn-primary btn-flat m-1">Disposisikan</a>
                                            <a href="<?=base_url('/disposisi/proses')?>"
                                                class="btn btn-success btn-flat m-1">Edit</a>
                                            <a href="<?=base_url('/disposisi/hapus')?>"
                                                class="btn btn-danger btn-flat m-1">Hapus</a>
                                        </td>
                                        <td>
                                            <a href="<?=base_url('disposisi/laporan')?>"
                                                class="btn btn-primary btn-flat m-1">Buat
                                                laporan</a>
                                            <button type="button" class="btn btn-success btn-flat m-1">Edit
                                                laporan</button>
                                            <button type="button" class="btn btn-danger btn-flat m-1">Hapus
                                                laporan</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>