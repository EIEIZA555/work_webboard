<?php
session_start();
if (isset($_SESSION['id'])) {
	header("location:index.php");
	die();
}
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Register</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
		crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<script>
		function validpwd() {
			let pwd = document.getElementById("pwd");
			let confirmPwd = document.getElementById("confirmPwd");
			let pwd1 = pwd.value;
			let pwd2 = confirmPwd.value;

			if (pwd2 != pwd1) {
				alert("รหัสผ่านทั้งสองช่องไม่ตรงกัน");
				pwd.value="";
				confirmPwd.value="";
			}


		}
	</script>
</head>

<body>
	<div class="container-fluid">
	<h1 style="text-align: center;">Register</h1>
		<?php include "nav.php" ?>
		<div class="row">
			<div class="col-lg-3 "></div>
			<div class="col-lg-6 mt-3">
				<?php
				if (isset($_SESSION['add_login'])) {
					if ($_SESSION['add_login'] == 'error') {
						echo "<div class='alert alert-danger'>
							ชื่อบัญชีซ้ำหรือมีฐานข้อมูลมีปัญหา</div>";
					} else {
						echo "<div class='alert alert-success'>	
							เพิ่มบัญชีเรียบร้อยแล้ว</div>";
					}
					unset($_SESSION['add_login']);
				}
				?>
				<div class="card border-primary">
					<h5 class="card-header bg-primary text-white">เข้าสู่ระบบ</h5>
					<div class="card-body">
						<form action="register_save.php" method="post" >
							<div class="row">
								<label for="login" class="col-lg-3 col-form-label">ชื่อบัญชี:</label>
								<div class="col-lg-9 ps-0">
									<input id="login" type="text" name="login" class="form-control" required>
								</div>
							</div>
							<div class="row">
								<label for="pwd" class="col-lg-3 col-form-label mt-3">รหัสผ่าน:</label>
								<div class="col-lg-9 mt-3 ps-0">
									<input id="pwd" type="password" name="pwd" class="form-control" required>
								</div>
							</div>
							<div class="row">
								<label for="confirmPwd" class="col-lg-3 col-form-label mt-3">ใส่รหัสผ่านซ้ำ:</label>
								<div class="col-lg-9 mt-3 ps-0">
									<input id="confirmPwd" type="password" name="confirmPwd" class="form-control" onblur="validpwd()" required>
								</div>
							</div>
							<div class="row">
								<label for="name" class="col-lg-3 col-form-label mt-3 ">ชื่อ-นามสกุล:</label>
								<div class="col-lg-9 mt-3 ps-0">
									<input id="name" type="text" name="name" class="form-control" required>
								</div>
							</div>
							<div class="row">
								<label for="" class="col-lg-3 col-form-label mt-3">เพศ:</label>
								<div class="col-lg-9 mt-3 form-check ">
									<input value="m" type="radio" name="gender" class="form-check-input " required>
									ชาย<br>
									<input value="f" type="radio" name="gender" class="form-check-input" required>
									หญิง<br>
									<input value="o" type="radio" name="gender" class="form-check-input" required>
									อื่นๆ
								</div>


							</div>
							<div class="row">
								<label for="email" class="col-lg-3 col-form-label mt-3">อีเมล:</label>
								<div class="col-lg-9 mt-3 ps-0">
									<input id="email" type="email" name="email" class="form-control" required>
								</div>
							</div>
							<div class="mt-3 d-flex justify-content-center">
								<button type="submit" class="btn btn-primary btn-sm me-2">
									<i class="bi bi-box-arrow-in-down"></i>สมัครสมาชิก
								</button>

							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>





</body>

</html>