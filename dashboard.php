<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Users List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <!-- your existing code -->
                
                <?php 
                $role = isset($_SESSION['user_role']) ? $_SESSION['user_role'] : '';

                if ($role == 'admin') {
                    // Simpan nama pengguna ke dalam session jika diperlukan
                    $_SESSION['username'] = 'Admin'; // Gantilah dengan cara Anda mendapatkan nama pengguna
                    header('Location: admin/admin.php');
                    exit();
                } elseif ($role == 'hr') {
                    // Simpan nama pengguna ke dalam session jika diperlukan
                    $_SESSION['username'] = 'User'; // Gantilah dengan cara Anda mendapatkan nama pengguna
                    header('Location: user/user.php');
                    exit();
                }
                ?>

            </div>
        </div>
    </div>
</div>

</body>
</html>
