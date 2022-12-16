<?php
    include "config/base_url.php";
    include "config/db.php";
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Редактировать Профиль</title>
    <?php include "views/head.php"; ?>
</head>
<body>
    
<?php include "views/header.php"; ?>
    <div class="wrapper">
        <div class="auth-form">
            <?php
                $id = $_SESSION['user_id'];
                $query_user = mysqli_query($con,
                "SELECT *FROM users WHERE id=$id");
                $user = mysqli_fetch_assoc($query_user);
            ?>
            <form action="<?=$BASE_URL?>/api/user/update.php" class="form" method="POST">
                <div class="divka">
                    <h1 class="update-title"></h1>
                    <h3>Email</h3>
                    <input required type="text" class="input" name="email" placeholder="Введите email..." value="<?=$user['email']?>">

                    <h3>Полное имя</h3>
                    <input required type="text" class="input" name="full_name" placeholder="Полное имя..." value="<?=$user['full_name']?>">

                    <h3>Nickname</h3>
                    <input required type="text" class="input" name="nickname" placeholder="Nickname..." value="<?=$user['nickname']?>">

                    <h3>Пароль</h3>
                    <input type="password" class="input" name="old_password" placeholder="Введите старый пароль... ">

                    <h3>Подтвердите пароль</h3>
                    <input type="password" class="input" name="new_password" placeholder="Введите новый пароль... ">

                    <br>
                    
                    <button class="updatebtn" type="submit">Редактировать</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>