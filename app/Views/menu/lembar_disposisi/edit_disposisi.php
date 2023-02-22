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
                        <li class="breadcrumb-item"><a href="<?=base_url()?>">Home</a></li>
                        <li class="breadcrumb-item active"><?=str_replace('/', ' / ',uri_string());?></li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-dark">
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form>
                            <div class="card-body" style="height: 14rem;">
                                <div class="form-group">
                                    <label for="nomorAgenda">Nomor Agenda/registrasi</label>
                                    <input type="text" class="form-control" id="nomorAgenda"
                                        placeholder="Masukkan Nomor Agenda" value="123" />
                                </div>
                                <div class="form-group">
                                    <label for="tanggal Penerimaan">Tanggal Penerimaan</label>
                                    <input type="date" class="form-control" id="tanggalPenerimaan" value="2023-02-01" />
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </form>
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
                                    <input class="form-check-input" type="radio" name="tingkatKeamanan" value='sr'
                                        checked />
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
                        <!-- form start -->
                        <form>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="tanggal Penerimaan">Tanggal Surat</label>
                                    <input type="date" class="form-control" id="tanggalSurat" value="2023-02-01" />
                                </div>
                                <div class="form-group">
                                    <label for="nomorSurat">Nomor Surat</label>
                                    <input type="text" class="form-control" id="nomorSurat"
                                        placeholder="Masukkan Nomor Surat" value="11/23/45/67/BPS/2023" />
                                </div>
                                <div class="form-group">
                                    <label for="asalSurat">Dari</label>
                                    <input type="text" class="form-control" id="asalSurat"
                                        placeholder="Masukkan Asal Surat" value="BPS Provinsi Jateng" />
                                </div>
                                <div class="form-group">
                                    <label>Ringkasan Isi</label>
                                    <textarea class="form-control" rows="3" id="ringkasanIsi" name="ringkasanIsi"
                                        placeholder="Masukkan Ringkasan Isi Surat">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores iure dolorem nemo harum aut vitae nesciunt animi sed aspernatur! Odit sapiente ea cum dicta ullam corrupti est quasi quas itaque?</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="lampiranFile">Lampiran (PDF)</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="lampiranFile"
                                                name="lampiranFile" />
                                            <label class="custom-file-label" for="lampiranFile">Surat.pdf</label>
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
                                    Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>