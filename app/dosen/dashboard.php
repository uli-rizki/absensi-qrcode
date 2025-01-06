<?php 
session_start();

if (! isset($_SESSION['username'])) {
    header("Location: ../login.php");
}

include('../../template/header.php');
?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h3>Selamat Datang <?php echo $_SESSION['nama']; ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include('../../template/footer.php'); ?>