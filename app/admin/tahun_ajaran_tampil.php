<?php 
include('../../template/header.php');
?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Data Tahun Ajaran</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Tahun Ajaran</li>
        </ol>
        <div class="row">
            <div class="col-lg-12 col-md-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <a href="tahun_ajaran_tambah.php" class="btn btn-primary">Tambah</a>
                    </div>
                    <div class="card-body">
                        <div class="table-reponsive">
                            <table class="table table-striped">
                                <thead>
                                    <th>No</th>
                                    <th>Keterangan</th>
                                    <th>Tahun</th>
                                    <th>Aktif</th>
                                    <th>Aksi</th>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include('../../template/footer.php'); ?>