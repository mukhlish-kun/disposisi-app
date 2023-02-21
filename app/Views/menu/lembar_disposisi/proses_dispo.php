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
                                        123456789
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
                                        23 Maret 2023
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
                                        22 Maret 2023
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
                                        987654321
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
                                        BPS Provinsi Jawa Tengah
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
                        <p class="text-sm">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro, recusandae
                            maiores nobis hic veritatis magni enim obcaecati unde odio assumenda tempora pariatur vitae
                            consequatur iusto ducimus. Autem ex aperiam natus.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <h5 class="text-dark mt-5 mb-2"><b>Lampiran</b></h5>
                        <div class="embed-responsive embed-responsive-4by3">
                            <iframe class="embed-responsive-item" src="<?=base_url('/uploads/pdf/contoh.pdf')?>"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <form>
                            <div class="form-group">
                                <label>Disposisi</label>
                                <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                            </div>
                            <div class="form-group">
                                <label>Diteruskan Kepada</label>
                                <select class="select2bs4" multiple="multiple" data-placeholder="Pilih satu atau lebih"
                                    style="width: 100%;">
                                    <option>Fayat</option>
                                    <option>Rodi</option>
                                    <option>Velia</option>
                                    <option>Jae</option>
                                    <option>Fadil</option>
                                    <option>Roi</option>
                                    <option>Fadil</option>
                                </select>
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