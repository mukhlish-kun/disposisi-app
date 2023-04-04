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
                                        <?= $no_registrasi ?>
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
                                        <?= $tanggal_penerimaan ?>
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
                                        <?= $tanggal_surat ?>
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
                                        <?= $no_surat ?>
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
                                        <?= $asal_surat ?>
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
                            <?= $ringkasan_isi_surat ?>
                        </p>
                    </div>
                    <div class="col-md-6">
                        <h5 class="text-dark mt-5 mb-2"><b>Lampiran</b></h5>
                        <div class="embed-responsive embed-responsive-4by3">
                            <iframe class="embed-responsive-item" src="<?= base_url() . getenv('PATH_PDF') . "/" . $lampiran_surat ?>" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <form action="<?= base_url('/disposisi/proses') ?>" method="post">
                            <input type="hidden" name="id" value="<?= $id ?>">
                            <input type="hidden" name="penerimaDisposisi" id="input-hidden">

                            <div class="form-group">
                                <label>Disposisi</label>
                                <textarea class="form-control" rows="3" name="isiDisposisi"><?= $isi ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Diteruskan Kepada</label>
                                <select class="select2bs4" multiple="multiple" id="penerimaDisposisi" data-placeholder="Pilih satu atau lebih" style="width: 100%;">
                                    <?php foreach ($user as $num) : ?>
                                        <option value="<?= $num['id'] ?>"><?= $num['username'] ?></option>
                                        # code...
                                    <?php endforeach;  ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="tanggal Penerimaan">Tanggal Penyelesaian</label>
                                <input type="date" class="form-control" id="tanggalSelesai" name="tanggalSelesai" <?php if (isset($tanggal_penyelesaian)) {
                                                                                                                        echo ('value="' . $tanggal_penyelesaian . '"');
                                                                                                                    } ?> />
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn-info btn-md btn-block" id="submitDisposisi">
                                    Kirim
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