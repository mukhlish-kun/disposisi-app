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
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h4><b>LEMBAR DISPOSISI</b></h4>
                        <table class="table table-default mt-4 text-sm">
                            <tbody>
                                <tr>
                                    <td>
                                        Nomor Agenda/registrasi
                                    </td>
                                    <td>
                                        :
                                    </td>
                                    <td>
                                        123456
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Tanggal Penerimaan
                                    </td>
                                    <td>
                                        :
                                    </td>
                                    <td>
                                        6/4/2000
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Tingkat Keamanan
                                    </td>
                                    <td>
                                        :
                                    </td>
                                    <td>
                                        Sangat Rahasia
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Tanggal Surat
                                    </td>
                                    <td>
                                        :
                                    </td>
                                    <td>
                                        6/4/2000
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Nomor Surat
                                    </td>
                                    <td>
                                        :
                                    </td>
                                    <td>
                                        12345
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Dari
                                    </td>
                                    <td>
                                        :
                                    </td>
                                    <td>
                                        12345
                                    </td>
                                </tr>
                                <!-- garis bawah tabel -->
                                <tr>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <h5><b>Ringkasan Isi</b></h5>
                        <p class="text-sm">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus ullam harum omnis corrupti
                            distinctio architecto nobis eligendi a, pariatur iste nesciunt consectetur error asperiores
                            exercitationem voluptatem. Quos officia cumque optio.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <h5 class="text-dark mt-5 mb-2"><b>Lampiran</b></h5>
                        <div class="embed-responsive embed-responsive-4by3">
                            <iframe class="embed-responsive-item" src="" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <form action="" method="post">
                            <input type="hidden" name="id" value="">
                            <input type="hidden" name="penerimaDisposisi" id="input-hidden">

                            <div class="form-group">
                                <label>Disposisi/Arahan</label>
                                <textarea class="form-control" rows="3" name="isiDisposisi"
                                    disabled>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia minima, illum eveniet corrupti consectetur explicabo fugiat aliquid repellendus repellat numquam saepe porro cum culpa laboriosam fugit excepturi at! Quas, eius.</textarea>
                            </div>
                            <div class="form-group">
                                <label>Diteruskan Kepada</label>
                                <ul>
                                    <li>Fadil</li>
                                    <li>Fadel</li>
                                    <li>Fadul</li>
                                </ul>
                            </div>
                            <div class="form-group">
                                <label for="tanggal Penerimaan">Rencana Tanggal Penyelesaian</label>
                                <input type="text" class="form-control" id="tanggalSelesai" name="tanggalSelesai"
                                    value="6 April 2023" disabled />
                            </div>
                            <div class="form-group">
                                <label for="tanggal Penerimaan">Realisasi Tanggal Penyelesaian</label>
                                <input type="date" class="form-control" id="tanggalSelesaiReal"
                                    name="tanggalSelesaiReal" />
                            </div>
                            <div class="form-group">
                                <label>Isi laporan</label>
                                <textarea class="form-control" rows="3"
                                    name="isiLaporan">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia minima, illum eveniet corrupti consectetur explicabo fugiat aliquid repellendus repellat numquam saepe porro cum culpa laboriosam fugit excepturi at! Quas, eius.</textarea>
                            </div>
                            <div class="form-group">
                                <label for="lampiranFile">Lampiran laporan (PDF)</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" accept=".pdf" class="custom-file-input"
                                            id='lampiranFileLaporan' name="lampiranFile">
                                        <label class="custom-file-label" for="lampiranFile">Pilih file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn-info btn-md btn-block" id="submitDisposisi">
                                    Kirim laporan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
</div>