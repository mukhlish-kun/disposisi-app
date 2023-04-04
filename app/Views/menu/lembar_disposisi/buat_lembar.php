<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?= $title ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                        <li class="breadcrumb-item active"><?= str_replace('/', ' / ', uri_string()); ?></li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <form action="<?= base_url('/disposisi/tambah') ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="card card-dark">
                            <!-- /.card-header -->
                            <!-- form start -->
                            <div class="card-body" style="height: 14rem;">
                                <div class="form-group">
                                    <label for="nomorAgenda">Nomor Agenda/registrasi</label>
                                    <input type="text" name="nomorAgenda" class="form-control" id="nomorAgenda" value="<?= $no_registrasi + 1 ?>" placeholder="Masukkan Nomor Agenda" required />
                                </div>
                                <div class="form-group">
                                    <label for="tanggal Penerimaan">Tanggal Penerimaan</label>
                                    <input type="date" name="tanggalPenerimaan" class="form-control" id="tanggalPenerimaan" value="<?= date("Y-m-d") ?>" required />
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->
                    <!-- right column -->
                    <div class="col-md-6">
                        <!-- Form Element sizes -->
                        <div class="card card-dark-primary">
                            <div class="card-body" style="height: 14rem;">
                                <div class="form-group">
                                    <label for="nomorAgenda">Tingkat Keamanan</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tingkatKeamanan" value='sr' />
                                        <label class="form-check-label">Sangat Rahasia (<b>SR</b>)</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tingkatKeamanan" value='r' />
                                        <label class="form-check-label">Rahasia (<b>R</b>)</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tingkatKeamanan" value='b' />
                                        <label class="form-check-label">Biasa (<b>B</b>)</label>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-dark">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="tanggal Penerimaan">Tanggal Surat</label>
                                    <input type="date" name="tanggalSurat" class="form-control" id="tanggalSurat" required />
                                </div>
                                <div class="form-group">
                                    <label for="nomorSurat">Nomor Surat</label>
                                    <input type="text" name="nomorSurat" class="form-control" id="nomorSurat" placeholder="Masukkan Nomor Surat" required />
                                </div>
                                <div class="form-group">
                                    <label for="asalSurat">Dari</label>
                                    <input type="text" name="asalSurat" class="form-control" id="asalSurat" placeholder="Masukkan Asal Surat" required />
                                </div>
                                <div class="form-group">
                                    <label>Ringkasan Isi</label>
                                    <textarea class="form-control" rows="3" id="ringkasanIsi" name="ringkasanIsi" placeholder="Masukkan Ringkasan Isi Surat" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="lampiranFile">Lampiran (PDF)</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" accept=".pdf" class="custom-file-input" id='lampiranFile' name="lampiranFile">
                                            <label class="custom-file-label" for="lampiranFile">Pilih file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn-info btn-md btn-block" id="submitDisposisi">
                                    Kirim
                                </button>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row -->
            </div>
        </form>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>