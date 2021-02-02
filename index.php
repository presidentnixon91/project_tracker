<?php 
	include("includes/php-global.php");
	// include("includes/php-auth.php");
	$CURRENT_PAGE = "Home";
?>
<!DOCTYPE html>
<html>
<head>
	<?php include("includes/head-tag-contents.php");?>

	<meta name="description" content="" />
	<meta name="keywords" content="" />

	<title>Project Tracker<?php print $SITE_TITLE;?></title>
</head>
<body id="page-home">

	<?php include("includes/design-top.php");?>

	<div class="main-content" id="">
		<div class="container">
			<div class="row">
				<div class="dashboard task-view">
					<!-- Display dashboard of task lists -->
				</div>
			</div>
		</div>
	</div>

	<?php include("includes/footer.php");?>

</body>
</html>