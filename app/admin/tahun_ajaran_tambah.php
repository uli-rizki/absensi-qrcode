<?php 
include('../../template/header.php');
?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Data Tahun Ajaran</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">Tahun Ajaran</li>
            <li class="breadcrumb-item active">Tambah</li>
        </ol>
        <div class="row">
            <div class="col-lg-12 col-md-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <h5>Tambah Data</h5>
                    </div>
                    <div class="card-body">
                        <form class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Keterangan</label>
                                    <input class="form-control" name="keterangan" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Semester</label>
                                    <input class="form-control" name="semester" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Aktif</label>
                                    <input class="form-control" name="aktif" required>
                                </div>
                            </div>
                            <div class="col-md-12 mt-3">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="tahun_ajaran_tampil.php" class="btn btn-danger">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include('../../template/footer.php'); ?>