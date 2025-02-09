<?php
    include "koneksi.php";
    if (isset($_POST['username'])) {
        
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $cek = mysqli_query($koneksi, "SELECT*FROM user WHERE username ='$username' AND password ='$password'");

        if (mysqli_num_rows($cek) > 0) {
            $data = mysqli_fetch_array($cek);
            $_SESSION['user'] = $data;
            echo '<script>alert("Selamat datang di aplikasi kasir"); location.href="index.php"</script>';
        } else {
            echo '<script>alert("Username/Password salah!");</script>';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Login ke Aplikasi Kasir" />
        <meta name="author" content="" />
        <title>Login - Aplikasi Kasir</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-info">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center d-flex align-items-center" style="height: 90vh;">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header bg-primary text-white text-center">
                                        <h3 class="font-weight-bold my-3">Aplikasi Kasir</h3>
                                    </div>
                                    <div class="card-body">
                                        <form method="post">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="text" name="username" placeholder="Masukkan Username" required />
                                                <label for="inputEmail"><i class="fas fa-user"></i> Username</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" type="password" name="password" placeholder="Masukkan Password" required />
                                                <label for="inputPassword"><i class="fas fa-lock"></i> Password</label>
                                            </div>
                                            <div class="d-grid mt-3">
                                                <button type="submit" class="btn btn-primary btn-lg">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="register.php" class="text-primary">Belum punya akun? Register!</a></div>
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
                            <div class="text-muted">Copyright &copy; Aplikasi Kasir 2025</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
