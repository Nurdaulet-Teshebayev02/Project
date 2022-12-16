<?php
    include "config/base_url.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Войти в систему</title>
	<?php include "views/head.php"; ?>
</head>
<body>
<?php include "views/header.php"; ?>
<div class="wrapper">
	<section class="container-page">
		<div class="auth-form2">
            <h1 class="login-title">Вход</h1>
			<form class="form" method="POST" action="<?=$BASE_URL?>/api/user/signin.php">
                <div class="fieldset">
                    <input class="input-login" type="text" name="email" placeholder="Введите email">
                </div>
                <div class="fieldset">
                    <input class="input-login" type="password" name="password" placeholder="Введите пароль">
                </div>

                <div class="fieldset">
                    <button class="loginbtn" type="submit">Войти</button>
                </div>
			</form>
		</div>
	</section>
</div>
</body>
</html>