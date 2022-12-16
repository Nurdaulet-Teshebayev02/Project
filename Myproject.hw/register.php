<?php
    include "config/base_url.php";
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация в систему</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php include "views/head.php"; ?>
</head>

<body>
<?php include "views/header.php"; ?>
    <section class="container-page">

            <div class="main">
                    <div class="main-item">
                            <div class="type-writer">
                                <h1 class="title">Спорт - это <span color:red id="output"></span></h1>
                            </div>
                            <p class="parag">Измени свою жизнь к лучшему вместе с Wix Fit</p>
                            <br>
                            <button onclick="openModal()" class="registerbtn"><a>Начать новую жизнь</a></button>
                    </div>
            </div>
        
                <div class="modal-window"  id="modal-window">

                    <form action="<?=$BASE_URL?>/api/user/signup.php" class="form" method="POST">
                    <div onclick="closeModal()" class="modal-backdrop"></div>
                    <div class="modal-inner">
                        <div onclick="closeModal()" class="modal-close">X</div>
                        <h1 class="register-title">Регистрация</h1>
                        <div class="modal-input">
                        <input type="text" class="input" name="email" id="" placeholder="Введите email...">
                        </div>

                        <div class="modal-input">
                        <input type="text" class="input" name="full_name" id="" placeholder="Полное имя...">
                        </div>

                        <div class="modal-input">
                        <input type="text" class="input" name="nickname" id="" placeholder="Nickname...">
                        </div>

                        <div class="modal-input">
                            <input type="password" class="input" name="password" id="" placeholder="Введите пароль... ">
                        </div>

                        <div class="modal-input">
                            <input type="password" class="input" name="password2" id="" placeholder="Подтвердите пароль... ">
                        </div>
                        

                        <br>
                        
                        <button class="modal-button" type="submit">Зарегистрироваться</button>
                        <br>
                        <div class="signin">
                            <p>У вас уже есть аккаунт? <a href="<?=$BASE_URL?>/login.php">Войти.</a></p>
                        </div>
                    </div>
                    
                    </form>
                </div>
    </section>
<div class="counter-wrapper">
    <div class="counter" data-aos="fade-up">
        <div class="counter-item">
            <h2 data-num="100000" class="number">0</h2>
            <p>Людей изменивших свою жизнь</p>
        </div>
        <div class="counter-item">
            <h2 data-num="10" class="number">0</h2>
            <p>Лет лидерства на рынке</p>
        </div>
        <div class="counter-item">
            <h2 data-num="1000000" class="number">0</h2>
            <p>Подписчиков</p>
        </div>
        <div class="counter-item">
            <h2 data-num="2000" class="number">0</h2>
            <p>Онлайн покупателей</p>
        </div>
    </div>
</div>
    <section class="portfolio">
        <div class="containerr">
            <div class="portfolio-title">
                <h2 class="title-1">О чем блог</h2>
            </div>

            <div class="project" data-aos="flip-up">
                <img src="https://parktropa.com/wp-content/uploads/2015/08/street-workout-tropa-7.jpg" alt="" class="project-img">
                <h3 class="project-title">Workout</h3>
            </div>

            <div class="project" data-aos="flip-up">
                <img src="https://www.kidneyurology.org/wp-content/uploads/2022/09/Be-Smart-Be-Better-Everyone-May-Know-The-Art-Of-BodyBuilding.jpg" alt="" class="project-img">
                <h3 class="project-title">Bodybuilding</h3>
            </div>

            <div class="project" data-aos="flip-up">
                <img src="https://hiddengym.net/wp-content/uploads/2019/12/powerlifting.jpg" alt="Braun Landing Page" class="project-img">
                <h3 class="project-title">Powerlifting</h3>
            </div>
        </div>
    </section>

    <footer class="contacts">
        <div class="containerr">
            <div class="contacts-title">
                <h2 class="title-1">Контакты</h2>
            </div>
            <div class="contacts-content" data-aos="fade-down">
                <p>Хотите узнать больше или просто поболтать?<br> Добро пожаловать!</p>
            </div>
            <div class="contacts-button" data-aos="fade-down">
                <a href="#!" class="registerbtn">Отправить сообщение</a>
            </div>
            <div class="contacts-social" data-aos="zoom-in">
            <a href="#!"><img src="images/LinkedIn.svg" alt="LinkedIn"></a>
                <a href="#!"><img src="images/instargam.svg" alt="Instargam"></a>
                <a href="#!"><img src="images/Behance.svg" alt="Behance"></a>
                <a href="#!"><img src="images/Dribble.svg" alt="Dribble"></a>
            </div>
            <div class="contacts-footer" data-aos="fade-up">
                <p><br> LinkedIn, Instagram, Behance, Dribble</p>
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/modal.js"></script>
    <script src="js/typeWriter.js"></script>
    <script src="js/counter.js"></script>
</body>

</html>


    
