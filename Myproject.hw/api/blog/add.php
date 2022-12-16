<?php
    include "../../config/base_url.php";
    include "../../config/db.php";

    if(isset(
        $_POST['title'],
        $_POST["description"],
        $_POST["category_id"]) &&
        strlen($_POST['title']) > 0 &&
        strlen($_POST['description']) > 0 &&
        intval($_POST['category_id'])
    ){
        session_start();
        $title = $_POST['title'];
        $desc = $_POST['description'];
        $cat_id = $_POST["category_id"];
        $author_id = $_SESSION['user_id'];
        
        if(isset($_FILES["image"], $_FILES["image"]["name"]) &&
        strlen($_FILES["image"]["name"]) > 0
        ){
            $ext = end(explode(".", $_FILES["image"]["name"])); // "png"  "svg" "jpg"
            $image_name = time().".".$ext;
            // 43243432144234324.png

            move_uploaded_file($_FILES["image"]["tmp_name"], "../../images/blogs/$image_name");
            $path = "/images/blogs/".$image_name;


            $prep = mysqli_prepare($con,
            "INSERT INTO blog (title, description, category_id, author_id, img)
            VALUES(?, ?, ?, ?, ?)");
            mysqli_stmt_bind_param($prep, "ssiis", $title, $desc,
            $cat_id, $author_id, $path);
            mysqli_stmt_execute($prep);
        }else{
            $prep = mysqli_prepare($con,
            "INSERT INTO blog (title, description, category_id, author_id)
            VALUES(?, ?, ?, ?)");
            mysqli_stmt_bind_param($prep, "ssii", $title, $desc,
            $cat_id, $author_id);
            mysqli_stmt_execute($prep);
        }

        $nickname = $_SESSION['nickname'];
        header("Location:$BASE_URL/profile.php?nickname=$nickname");
    }else{
        header("Location:$BASE_URL/newblog.php?error=1");
    }
?>