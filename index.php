<?php
	session_start();
	error_reporting(0);
	$page = $_GET['page'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sakhier's</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
	<!-- Font Awesome CSS -->
	<link rel="stylesheet" type="text/css" href="dist/css/font-awesome.min.css">
	<!-- All Style CSS -->
	<link rel="stylesheet" type="text/css" href="dist/css/style.css">
</head>
<body>

	<?php
		include "header.php";
		if ($page == "" OR $page == "home") {
			include "home.php";
			include "product.php";
		}
		else if ($page == "product") {
			include "product.php";
		}
		else if ($page == "contact") {
			include "contact.php";
		}
		else if ($page == "faqs") {
			include "faqs.php";
		}
		else if ($page == "cart") {
			include "cart.php";
		}
		else if ($page == "wishlist") {
			include "wishlist.php";
		}
		else if ($page == "detail") {
			include "detail.php?brand=<?php echo $data[brand];?>";
		}

		else if ($page == "prod-mj") {
			include "prod-mj.php";
		}
		include "footer.php";
	?>

	<!-- JQuery.min.js -->
	<script type="text/javascript" src="dist/js/jquery.min.js"></script>
	<!-- Bootstrap.min.js -->
	<script type="text/javascript" src="dist/js/bootstrap.min.js"></script>
</body>
</html>
