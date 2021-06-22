<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://quanlychitieu2030.herokuapp.com/MVC/view/pages/css/login.css">
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign In</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div>
			<div class="card-body">
				<form class="login-container" action="Ajax/checkuse" method="POST">
				<p id="htkq"></p>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control"  name="useName" id="useName" placeholder="Tên tài khoản">
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" name="usePassword" id="usePassword" placeholder="Mật khẩu">
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">Lưu
					</div>
					<div class="form-group">
                    <input  id="btnLogin"  name="btnLogin"  class="btn btn-success" type="submit" style="color:#ffffff;" value="Đăng nhập"/>
					</div>
                    <div class="card-footer">
				<div class="d-flex justify-content-center links">
					Bạn chưa có tài khoản?<input name="signup" class="btn btn-success" type="submit" style="color:#ffffff;" value="Đăng ký tài khoản"/>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">Forgot your password?</a>
				</div>
			</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script src="https://quanlychitieu2030.herokuapp.com/MVC/view/pages/js/main.js"></script>
</body>
</html>