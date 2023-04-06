<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Managemen User</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                        <li class="breadcrumb-item active">Management User</li>
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
                        <!-- <div class="card-header">
                            <h3 class="card-title">DataTable with default features</h3>
                        </div> -->
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Nama Lengkap</th>
                                        <th>Role</th>
                                        <th>Status Akun</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data as $dataset) : dd($dataset) ?>
                                        <tr>
                                            <td><?= $dataset['username'] ?></td>
                                            <td><?= $dataset['secret'] ?></td>
                                            <td><?= $dataset['username'] ?></td>
                                            <td>
                                                <!-- <php if (count($dataset['group']) > 1) : ?>
                                                    <= implode($dataset['group']) ?>
                                                <php else : ?> -->
                                                <?= $dataset['group'] ?>
                                                <!-- <php endif; ?> -->
                                            </td>
                                            <td>
                                                <?php if ($dataset['active'] == 1) : ?>
                                                    <span class="badge badge-pill badge-primary">Aktif</span>
                                                <?php else : ?>
                                                    <span class="badge badge-pill badge-info">Tidak Aktif</span>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <!-- <a href="<?= base_url('manajemen/edit_user') ?>"><span class="badge badge-pill badge-warning">edit</span></a> -->
                                                <a href="<?= base_url('manajemen/edit_role') ?>"><span class="badge badge-pill badge-primary">ganti role</span></a>
                                                <!-- <php if ($dataset['active'] == 1) : ?>
                                                    <a href="<?= base_url('manajemen/edit_delete') ?>"><span class="badge badge-pill badge-danger">nonaktifkan</span></a>
                                                <php else : ?>
                                                    <a href="<?= base_url('manajemen/edit_delete') ?>"><span class="badge badge-pill badge-success">aktifkan</span></a>
                                                <php endif; ?> -->
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
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
</div>