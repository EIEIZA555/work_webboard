<?php
session_start();
if (isset($_SESSION['id'])) {
    header("location:index.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script>
        function showPassword() {
            let pwd = document.getElementById("pwd");
            let showpwd = document.getElementById("showpwd");

            if (pwd.type == "password") {
                pwd.type = "text";
                showpwd.classList.remove("bi-eye");
                showpwd.classList.add("bi-eye-slash");
            } else {
                pwd.type = "password";
                showpwd.classList.remove("bi-eye-slash");
                showpwd.classList.add("bi-eye");
            }
        }
    </script>
</head>

<body>
    <div class="container-fluid mt-3">
    <h1 style="text-align: center;">Login</h1>    
        <?php include "nav.php" ?>
        <div class="row ">
            <div class="col-sm-8 col-md-6 col-lg-4 mx-auto mt-3">
                <?php
                if (isset($_SESSION['error'])) {
                    echo "<div class='alert alert-danger mt-3' role='alert'>
                                ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง
                                </div>";
                    unset($_SESSION['error']);
                    }
                ?>
                <div class="card mt-2 ">
                    <h5 class="card-header">เข้าสู่ระบบ</h5>
                    <div class="card-body">
                        <form action="verify.php" method="post">
                            <div class="form-group">
                                <label for="login" class="form-label">Login:</label>
                                <input id="login" type="text" name="login" class="form-control">
                            </div>
                            <div class="form-group mt-3">
                                <label for="pwd" class="form-label">Password:</label>
                                <div class="input-group">
                                    <input id="pwd" type="password" name="pwd" class="form-control">
                                    <button class="btn btn-secondary" type="button" onclick="showPassword()">
                                        <i id="showpwd" class="bi bi-eye"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="mt-3 d-flex justify-content-center">
                                <button type="submit" class="btn btn-success btn-sm me-2">
                                    login
                                </button>
                                <button type="reset" class="btn btn-danger btn-sm">
                                    reset
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    </div>
    <br>
    <div style="text-align: center;"> ถ้ายังไม่ได้เป็นสมาชิก <a href="register.php">กรุณาสมัครสมาชิก</a> </div>
</body>

</html>