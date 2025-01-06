<?php
require('../config/koneksi.php');
session_start();

if(isset($_SESSION['username'])) {
    header("Location: admin/dashboard.php");
}

if ($_POST) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $que_user = "SELECT * FROM users WHERE email='$username'";
    $hasil = $koneksi->query($que_user);

    $user = mysqli_fetch_assoc($hasil);

    if(is_array($user)) {
        unset($_SESSION['pesan_error']);

        $enkripsi_password = md5($password);
        if($user['password'] == $enkripsi_password) {
            // session login
            $_SESSION['nama'] = $user['nama'];
            $_SESSION['username'] = $user['email'];
            $_SESSION['peran'] = $user['peran'];

            if ($user['peran'] == "admin") {
                header("Location: admin/dashboard.php");
            } else if ($user['peran'] == "dosen") {
                header("Location: dosen/dashboard.php");
            } else {
                header("Location: admin/dashboard.php");
            }
        } else {
            $_SESSION['pesan_error'] = "Password Salah";
            header("Location: login.php");
        }
    } else {
        $_SESSION['pesan_error'] = "User Tidak ditemukan";

        header("Location: login.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Absensi QRCOde</title>
        <link href="../assets/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Absensi QRCode</h3></div>
                                    <div class="card-body">
                                        <?php if(isset($_SESSION['pesan_error'])) { 
                                            echo " <div class='alert alert-danger'> ";
                                            echo $_SESSION['pesan_error'];
                                            echo "</div>";

                                            // unset($_SESSION['pesan_error']);
                                        }
                                        ?>
                                        <form action="" method="POST">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="text" name="username" placeholder="name@example.com" />
                                                <label for="inputEmail">Email address</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" type="password" name="password" placeholder="Password" />
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button type="submit" class="btn btn-primary">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Informatika UNUHA Team</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../assets/js/scripts.js"></script>
    </body>
</html>
