<?php
	include "config/base_url.php";
    include "config/db.php";
	include "common/time.php";

	$q = '';
	$category = "null";



	$sql = "SELECT b.*, c.name, u.nickname
	FROM blog b LEFT OUTER JOIN
	categories c ON b.category_id = c.id
	LEFT OUTER JOIN 
	users u ON b.author_id = u.id";

	
	

	if(isset($_GET["cat_id"])){
		$id = $_GET['cat_id'];
		$sql .= " WHERE b.category_id=$id";
		
	}
	if(isset($_GET['q'])){
		$q = strtolower($_GET['q']);
		$sql .= " WHERE LOWER(b.title) LIKE ? OR
		LOWER(b.description) LIKE ? OR
		LOWER(u.nickname) LIKE ? OR
		LOWER(c.name) LIKE ?";
	}


	if($q){
		$param = "%$q%";
		$prep = mysqli_prepare($con, $sql);
		mysqli_stmt_bind_param($prep, "ssss",
		$param, $param, $param, $param);
		mysqli_stmt_execute($prep);
		$query = mysqli_stmt_get_result($prep);
	}else{
		$query = mysqli_query($con,$sql);
	}

	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Главная</title>
	<?php include "views/head.php"; ?>
</head>
<body>
<?php include "views/header.php"; ?>
<section class="container page">
	<div class="page-content">
			<h2 class="page-title">Блоги про спорт</h2>
			<p class="page-desc">Популярные и лучшие публикации про спорт и питание в целом.</p>
			<div class="blogs">
				<?php
				if(mysqli_num_rows($query) > 0){
					while($blog = mysqli_fetch_assoc($query)){
				?>	
			 <div class="blog-item">
				<img class="blog-item--img" src="<?=$BASE_URL?>/<?=$blog['img']?>" alt="">
				<div class="blog-header">
				<a href="<?=$BASE_URL?>/blog-details.php?id=<?=$blog['id']?>"><h3><?=$blog['title']?></h3></a>	
				</div>
				<p class="blog-desc">
					<?=$blog['description']?>
				</p>

				<div class="blog-info">
					<span class="link">
						<img src="images/date.svg" alt="">
						<?=time_elapsed_string(strtotime($blog['date']))?>
					</span>
					<span class="link">
						<img src="images/visibility.svg" alt="">
						21
					</span>
					<a class="link">
						<img src="images/message.svg" alt="">
						<?php
						$blog_id = $blog['id'];
						$c = mysqli_query($con,
						"SELECT * FROM comments WHERE blog_id=$blog_id");
						echo mysqli_num_rows($c);
						?>
					</a>
					<span class="link">
						<img src="images/forums.svg" alt="">
						<?=$blog['name']?>
					</span>
					<a class="link" href="<?=$BASE_URL?>/profile.php?nickname=<?=$blog['nickname']?>">
						<img src="images/person.svg" alt="">
						<?=$blog['nickname']?>
					</a>
				</div>
			</div>
			<?php
		}
			}else{
			?>
				<h3>0 blogs</h3>	
			<?php
				}
			?>

			


			
			
		</div>
	</div>
    <?php
		include "views/categories.php";
	?>
</section>
</body>
    