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
                        <li class="breadcrumb-item"><a href="#<?= base_url() ?>">Home</a></li>
                        <li class="breadcrumb-item active"><?= str_replace('/', ' / ', uri_string()); ?></li>
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
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($surat as $data) : ?>
                                        <tr>
                                            <td>
                                                <?= $i ?>
                                            </td>
                                            <td>
                                                <?= $data['asal_surat'] ?>
                                            </td>
                                            <td>
                                                <?= $data['tanggal_penerimaan'] ?>
                                            </td>
                                            <td>
                                                <?= $data['ringkasan_isi_surat'] ?>
                                            </td>
                                            <td>
                                                <?php switch ($data['status']) {
                                                    case '1':
                                                        echo "Belum Didisposisikan";
                                                        break;
                                                    case '2':
                                                        echo "Sudah Didisposisikan";
                                                        break;
                                                    case '3':
                                                        echo "Belum Selesai";
                                                        break;
                                                    default:
                                                        echo "Sudah Selesai";
                                                        break;
                                                }; ?>
                                            </td>
                                            <td>
                                                <a href="<?= base_url('/disposisi/proses/' . $data['id']) ?>" class="btn btn-primary btn-flat">Disposisikan</a>
                                                <a href="<?= base_url('/disposisi/edit/' . $data['id']) ?>" class="btn btn-success btn-flat">Edit</a>
                                                <!-- <button type="button" class="btn btn-success btn-flat">Edit</button> -->
                                                <button type="button" class="btn btn-danger btn-flat">Hapus</button>
                                            </td>
                                        </tr>
                                    <?php $i++;
                                    endforeach; ?>
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