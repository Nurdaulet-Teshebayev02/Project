<header class="header">
  <!-- <div class="header-logo">
      <a href="index.php">Decode Blog</a>  
  </div>
  <div class="header-search">
    <input type="text" class="input-search" placeholder="Поиск по блогам">
    <button class="button button-search">
      <img src="images/search.svg" alt="">  
      Найти
    </button>
  </div>
  <div> -->

        
          <div class="navbar">
            <a href="index.php">
            <img src="https://www.fbafitness.com/files/wix_logo_-_1000_x_500_.png" alt="" class="header-logo">
            </a>
          </div>

            <form class="header-search" method="GET">
                <input name="q" type="text" class="input-search" placeholder="Поиск по блогам...">
                <button type="submit" class="button button-search">
                <img src="images/search.svg" alt="">  
                  Найти
                </button>
            </form>

        

        <?php
          if(isset($_SESSION['nickname'])){
        ?>
          <a href="<?=$BASE_URL?>/profile.php?nickname=<?=$_SESSION['nickname']?>">
            <img class="user-profile-ava" src="images/avatar2.png" alt="Avatar">
          </a>
        <?php
          }else{
        ?>
            <div class="nav-menu">
            <a href="<?=$BASE_URL?>/register.php" class="button">Регистрация</a>
            <a href="<?=$BASE_URL?>/login.php" class="button">Вход</a>
            </div>
        <?php
          }
        ?>

    
  </div>
</header>